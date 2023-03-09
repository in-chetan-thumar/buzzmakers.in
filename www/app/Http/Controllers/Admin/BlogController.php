<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use Buglinjo\LaravelWebp\Facades\Webp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $table = resolve('blog-repo')->renderHtmlTable($request);
        return view('admin.blog.blog_list', compact('table'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return "Hello";
        $data = [];
        try {
            // $blogdata = Blog::whereId(1)->select('id','title', 'description')->first();

            $data['error'] = false;
            $data['view'] = view('admin.blog.offcanvas')->render();
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
    public function store(BlogRequest $request)
    {
        $data = $params = [];
        DB::beginTransaction();
        try {
            $validator = Validator::make($request->all(), ['image' => 'mimetypes:image/jpeg']);
            if ($validator->fails()) {
                $data['error'] = true;
                $data['message'] =  $validator->errors()->first();
                return response()->json($data);
            }
            // if ($request->file('img') != null ) {
            $webp = Webp::make($request->file('image'))->quality(70);
            $name = Str::random(16) . '.webp';

            if ($webp->save(storage_path('app/public/images/blogs/' . $name))) {
                $params = [];
                $params['title'] = $request->title;
                $params['description'] = $request->description;
                $params['cover_photo'] = $name;
                $params['is_article'] = $request->is_article == 'Y' ? 'Y' : 'N';
                $params['is_featured'] = $request->is_featured == 'Y' ? 'Y' : 'N';
                $params['is_conversation'] = $request->is_conversation == 'Y' ? 'Y' : 'N';
                $page = resolve('blog-repo')->store($params);
                if (!empty($page)) {

                    $data['error'] = false;
                    $data['message'] = 'Blog Stored successfully.';
                    $data['view'] = resolve('blog-repo')->renderHtmlTable($this->getParamsForFilter($request));
                    DB::commit();
                    return response()->json($data);
                }
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
            $blogdata = Blog::whereId($id)->first();

            $data['error'] = false;
            $data['view'] = view('admin.blog.offcanvas', compact('blogdata'))->render();
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
    public function update(BlogRequest $request, $id)
    {
        $data = $params = [];
        DB::beginTransaction();
        try {
            $validator = Validator::make($request->all(), ['image' => 'mimetypes:image/jpeg,image/png,image/webp'], ['image.mimetypes' => 'Select an image type of jpg,png only']);
            if ($validator->fails()) {
                $data['error'] = true;
                $data['message'] =  $validator->errors()->first();
                return response()->json($data);
            }

            // Update page
            $params = [];
            $params['title'] = $request->title;
            $params['description'] = $request->description;
            $params['is_article'] = $request->is_article == 'Y' ? 'Y' : 'N';
            $params['is_featured'] = $request->is_featured == 'Y' ? 'Y' : 'N';
            $params['is_conversation'] = $request->is_conversation == 'Y' ? 'Y' : 'N';

            if ($request->file('image')) {
                $webp = Webp::make($request->file('image'))->quality(70);
                $name = Str::random(16) . '.webp';
                $webp->save(storage_path('app/public/images/blogs/' . $name));
                $params['cover_photo'] = $name;
            }

            $news = resolve('blog-repo')->update($params, $id);

            if (!empty($news)) {

                $data['error'] = false;
                // toastr()->success('Blog update successfully..!');
                $data['message'] = 'Blog update successfully.';
                $data['view'] = resolve('blog-repo')->renderHtmlTable($this->getParamsForFilter($request));
                
                DB::commit();
                return response()->json($data);
                return redirect()->route('blog-list.index');
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
            $news = resolve('blog-repo')->findById($id);
            if (!empty($news)) {

                $news->delete();
                toastr()->success('Blog deleted successfully..!');
                return redirect()->route('blog-list.index');
            } else {
                toastr()->error('Blog not Found.!');
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

        if (request()->routeIs('blog-list.index') || !isset($previousUrl['query'])) {
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
