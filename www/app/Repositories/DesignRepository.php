<?php


namespace App\Repositories;

use App\Models\Faqs;

class DesignRepository
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
    public function findByCategory($id)
    {
        return $this->model->findorFail($id);
    }

    // Create new recoard
    public function create($params)
    {
        //
    }


    public function renderHtmlTable($params)
    {
        $tableData = $this->filter($params);

        // echo var_dump($tableData);
        return view('frontend.components.completefaqs', compact('tableData'))->render();
    }



    public function filter($params)
    {
        return $this->model
            ->all()
            ->where('category','home' )->where('is_active','Y' )->take(20);
    }
}
