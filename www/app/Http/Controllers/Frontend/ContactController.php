<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Page;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Yoeunes\Toastr\ToastrServiceProvider;



class ContactController extends Controller
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
        SEOTools::setTitle($content->title);
        SEOTools::setDescription($content->meta_description);
        SEOMeta::addKeyword($content->meta_keywords);
        return view('frontend.contact', compact('content','table'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactRequest $request)
    {
        // $validated = $request->validate([
        //     'name' => 'required',
        //     'email' => 'required',
        // ]);

        $data = $params = [];
        DB::beginTransaction();
        // dd($request);

        try {
            if ($request->file('documents')) {
                $file = $request->file('documents');
                $name = Str::random(16) . '.' . $file->getClientOriginalExtension();
                $doc = $request->file('documents');
                $doc->storeAs('public/documents/contacts', $name);
                $params['documents'] = $name;
            }
            $params['name'] = $request->name;
            $params['email'] = $request->email;
            $params['phone'] = $request->phone;
            $params['website'] = $request->website;
            $params['project'] = $request->project;
            $params['budget'] = $request->range1 . '-' . $request->range2;
            $params['services'] = $request->services;
            $params['competitors'] = $request->competitors;
            $params['reference'] = $request->reference;
            // if ($request->file('documents')) {               
            //     $params['documents'] = $name;
            // }
            $params['schedule_date'] = $request->schedule_date;
            $params['timezone'] = $request->timezone;
            $params['schedule_time'] = $request->schedule_time;

            $page = Contact::create($params);

            if (!empty($page)) {

                $data['error'] = false;
                toastr()->success('Your query has been submitted successfully!');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
