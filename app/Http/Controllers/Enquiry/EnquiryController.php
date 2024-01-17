<?php

namespace App\Http\Controllers\Enquiry;

use App\Http\Controllers\Controller;
use App\Http\Requests\EnquiryRequest;
use App\Models\EnquiryLandingPage;
use App\Models\Page;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;


class EnquiryController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $content = Page::select('id', 'title', 'meta_keywords', 'meta_description')->whereRouteName(Route::currentRouteName())->first();
        $table = resolve('home-repo')->renderHtmlTable($request);
//        SEOTools::setTitle($content->title);
//        SEOTools::setDescription($content->meta_description);
//        SEOMeta::addKeyword($content->meta_keywords);
        return view('enquiry_landing_page.Enquiry', compact('content', 'table'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(EnquiryRequest $request)
    {
        try {
        $params = [];
        $params['name'] = $request->name;
        $params['surname'] = $request->surname;
        $params['mobile'] = $request->mobile;
        $params['business_name'] = $request->business_name;
        $params['website'] = $request->website;
        $params['message'] = $request->message;

        $enquiry = EnquiryLandingPage::create($params);

            if (!empty($enquiry)) {
                $params['enquiry_details'] = view('email.Enquiry', compact('enquiry'))->render();
                Mail::send(new \App\Mail\EnquiryMailNotification($params));
                toastr()->success('Your enquiry has been submitted successfully!');
                DB::commit();
            } else {
                toastr()->error('Oops! Something went wrong!', 'Please Contact on 8785455245');
            }
            return redirect()->back();
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
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


}
