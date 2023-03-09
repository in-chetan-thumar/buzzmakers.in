<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FaqsRequest;
use App\Models\Faqs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class FaqsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $table = resolve('faqs-repo')->renderHtmlTable($this->getParamsForFilter($request));
        return view('admin.faqs.faqs', compact('table'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [];
        try {
            $data['error'] = false;
            $data['view'] = view('admin.faqs.offcanvas')->render();
            return response()->json($data);
        } catch (\Exception $e) {
            $data['error'] = true;
            $data['message'] = $e->getMessage();
        }
        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FaqsRequest $request)
    {
        $data = $params = [];
        DB::beginTransaction();
        try {           
            $params = [];
            $params['category'] = $request->category;
            $params['title'] = $request->title;
            $params['description'] = $request->description;
            $params['is_active'] = $request->is_active;
            
               $faqs = resolve('faqs-repo')->store($params);
                if (!empty($faqs)) {

                    $data['error'] = false;
                    $data['message'] = 'Faqs Stored successfully.';
                    $data['view'] = resolve('faqs-repo')->renderHtmlTable($this->getParamsForFilter($request));
                    DB::commit();
                    return response()->json($data);
                }
            
        } catch (\Exception $e) {
            DB::rollBack();
            $data['error'] = true;
            $data['message'] = $e->getMessage();
            return response()->json($data);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [];
        try {
            $faqsdata = Faqs::whereId($id)->select()->first();

            $data['error'] = false;
            $data['view'] = view('admin.faqs.offcanvas', compact('faqsdata'))->render();
            return response()->json($data);
        } catch (\Exception $e) {
            $data['error'] = true;
            $data['message'] = $e->getMessage();
        }
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FaqsRequest $request, $id)
    {

        
        $data = $params = [];
        DB::beginTransaction();
        try {
            // Update Faqs
            $params = [];
            $params['category'] = $request->category;
            $params['title'] = $request->title;
            $params['description'] = $request->description;
            $params['is_active'] = $request->is_active;           
            $faqs = resolve('faqs-repo')->update($params, $id);
             
            if ($faqs) {

                $data['error'] = false;
                $data['message'] = 'Faqs update successfully.';
                $data['view'] = resolve('faqs-repo')->renderHtmlTable($this->getParamsForFilter($request));

                DB::commit();
                return response()->json($data);
            }
            
        } catch (\Exception $e) {
            DB::rollBack();
            $data['error'] = true;
            $data['message'] = $e->getMessage();
            return response()->json($data);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $faqs = resolve('faqs-repo')->findById($id);
            if (!empty($faqs)) {
                $faqs->delete();
                toastr()->success('FAQs deleted successfully..!');
                return redirect()->route('faqs.index');
            } else {
                toastr()->error('FAQs not Found.!');
            }
        } catch (\Exception $e) {
            toastr()->error($e->getMessage());
            return redirect()->back();
        }
    }

    public function getParamsForFilter(Request $request)
    {
        $previousUrl = parse_url(url()->previous());
        $params = [];

        if (request()->routeIs('faqs.index') || !isset($previousUrl['query'])) {
            $params['query_str'] = $request->query_str ?? '';
            $params['page'] =  $request->page ?? 0;
            $params['path'] =  \Illuminate\Support\Facades\Request::fullUrl();
        } else {
            parse_str($previousUrl['query'], $params);
            $params['path'] =  url()->previous();
        }
        return $params;
    }
}
