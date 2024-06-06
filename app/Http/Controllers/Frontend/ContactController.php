<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Page;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Support\Facades\Mail;
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
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addImage(url('assets/frontend/images/metaShere.png'));
        return view('frontend.contact', compact('content', 'table'));
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
        //dd($request->all());
        try {
            if (!empty($request->file('documents'))) {
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
            $params['budget'] = $request->budget;
            if (!empty($request->others)) {
                $service = implode('.', $request->services);
                $params['services'] = $service . '-' . $request->others;

            } else {
                $params['services'] = implode('.', $request->services);

            }
            //            $params['services'] = implode('.', $request->services);
            $params['competitors'] = $request->competitors;
            $params['reference'] = $request->reference;

            // if ($request->file('documents')) {
            //     $params['documents'] = $name;
            // }
//            $params['schedule_date'] = $request->schedule_date ?? '';
//            $params['timezone'] = $request->timezone;
//            $params['schedule_time'] = $request->schedule_time;

            $contact = Contact::create($params);

            if (!empty($contact)) {

                $params = [];

                $params['contact_details'] = view('email.SendMail', compact('contact'))->render();
                Mail::send(new \App\Mail\ContactMailNotification($params));
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
