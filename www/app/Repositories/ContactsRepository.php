<?php


namespace App\Repositories;

use App\Models\Contact;
use Illuminate\Support\Facades\DB;

class ContactsRepository
{
    public $model;

    /**
     * UserRepository constructor.
     */
    public function __construct(Contact $model)
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
            //
    }

    //Strore new data
    public function store($params)
    {
            //
    }

    public function renderHtmlTable() 
    {
        $tableData = $this->model->select()->paginate(config('constants.PER_PAGE'));
        return view('admin.contacts.table', compact('tableData'))->render();
    }

}
