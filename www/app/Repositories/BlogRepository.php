<?php


namespace App\Repositories;

use App\Models\Blog;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class BlogRepository
{
    public $model;

    /**
     * UserRepository constructor.
     */
    public function __construct(Blog $model)
    {
        return $this->model = $model;
    }

    // Get data by id
    public function findByID($id)
    {
        return $this->model->findorFail($id);
    }

    // Create new recoard
    public function create($params)
    {
        //
    }

    // Update recoard
    public function update($params, $id)
    {
        return $this->findById($id)->update($params);
        // $news = DB::table('blogs')->whereId($id)->limit(1) 
        // ->update($params);
        // return $news;
    }

    //Strore new data
    public function store($params)
    {
        return $this->model->create($params);
        // $news = DB::table('blogs')->insert($params);
        // return $news;

    }

    public function renderHtmlTable() 
    {
        $tableData = DB::table('blogs')->select('id','title','description')->paginate(8);
        return view('admin.blog.table', compact('tableData'))->render();
    }

}
