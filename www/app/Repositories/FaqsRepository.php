<?php


namespace App\Repositories;

use App\Models\Faqs;

class FaqsRepository
{
    public $model;

    /**
     * UserRepository constructor.
     */
    public function __construct(Faqs $model)
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
    }

    //Strore new data
    public function store($params)
    {
        return $this->model->create($params);
    }

    public function renderHtmlTable($params) 
    {
        $tableData = $this->filter($params);
        return view('admin.faqs.table', compact('tableData'))->render();
    }

    public function filter($params)
    {
        return $this->model
            ->latest()
            ->paginate(config('constants.PER_PAGE'), ['*'],'page',!empty($params['page'])? $params['page']:'')
            ->setPath($params['path']);           
    }

}
