<?php


namespace App\Repositories;

use App\Models\News;
use Illuminate\Support\Facades\DB;

class NewsRepository
{
    public $model;

    /**
     * UserRepository constructor.
     */
    public function __construct(News $model)
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

        // return $this->create($params);
     }

    // Update recoard
    public function update($params, $id)
    {
        return $this->findByID($id)->update($params);
    }

   // Store new recoard
    public function store($params)
    {
        return $this->model->create($params);

        // $news = DB::table('news')->insert($params);
        // return $news;
    }

    public function renderHtmlTable() 
    {
        $tableData = DB::table('news')->select('id','title','description')->paginate(8);
        return view('admin.news.table', compact('tableData'))->render();
    }

}
