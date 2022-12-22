<?php


namespace App\Repositories;


use App\Models\Page;
use Illuminate\Support\Facades\DB;

class PageRepository
{
    public $model;

    /**
     * UserRepository constructor.
     */
    public function __construct(Page $model)
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
        // $page = DB::table('pages')->whereId($id)->limit(1) 
        // ->update($params);
        // return $page;
    }

    public function renderHtmlTable() 
    {
        $tableData = DB::table('pages')->select('id','title','meta_keywords','meta_description','route_name')->paginate(10);
        return view('admin.page.table', compact('tableData'))->render();
    }

}
