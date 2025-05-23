<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Support\Facades\Route;


class HomeController extends Controller
{

    public function index(Request $request)
    {
        $content = Page::select('id', 'title', 'meta_keywords', 'meta_description')->whereRouteName(Route::currentRouteName())->first();
        SEOTools::setTitle($content->title);
        SEOTools::setDescription($content->meta_description);
        SEOMeta::addKeyword($content->meta_keywords);
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addImage(url('assets/frontend/images/metaShere.png'));
        $table = resolve('home-repo')->renderHtmlTable($request);
        return view('frontend.home', compact('content', 'table'));


        // return view('admin.news.news_list', compact('table'));
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
    public function store(Request $request)
    {
        //
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

    public function signatureName($name)
    {
        $array = ([
            'krishnajajoo' => [
                "name" => "Krishnaa D Jajoo",
                "Designation" => "Founder & Intern",
                "Number" => "+919890393090",
                "Whatsapp" => "https://wa.me/+919890393090"
            ],
            'bhaktikothari' => [
                "name" => "Bhakti Kothari",
                "Designation" => "Performance & Social Media Executive",
                "Number" => "+918976365578",
                "Whatsapp" => "https://wa.me/+918976365578 "
            ],
            'tanmaydeshpande' => [
                "name" => "Tanmay Deshpande",
                "Designation" => "Social Media Executive",
                "Number" => "+917276159703",
                "Whatsapp" => "https://wa.me/+917276159703 "
            ],
            'rahuljain' => [
                "name" => "Rahul Jain",
                "Designation" => "Social Media Manager",
                "Number" => "+917249032020",
                "Whatsapp" => "https://wa.me/+917249032020"
            ],
            'jahnvivira' => [
                "name" => "Jahnvi Vira",
                "Designation" => "Content & Client Servicing Executive",
                "Number" => "+919967402437",
                "Whatsapp" => "https://wa.me/+919967402437"
            ],
            'amolthotam' => [
                "name" => "Amol Thotam",
                "Designation" => "Motion Graphic & Video Editor",
                "Number" => "  ",
                "Whatsapp" => "  "
            ],
            'abdulkhan' => [
                "name" => "Abdul Khan",
                "Designation" => "Copywriter",
                "Number" => "+917738260090",
                "Whatsapp" => "https://wa.me/+917738260090"
            ],
            'kinalborana' => [
                "name" => "Kinal Borana",
                "Designation" => "Social Media Executive",
                "Number" => "+917249031818",
                "Whatsapp" => "https://wa.me/+917249031818"
            ],
        ]);

        $details = Arr::where($array, function ($value, $key) use ($name) {
            return $key == $name;
        });

        return view('frontend.buzz_signature', compact('details'));
    }
}
