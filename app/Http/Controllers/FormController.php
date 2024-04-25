<?php

namespace App\Http\Controllers;

use App\Models\FormModel;
use App\Validation\FormValidation;
use Illuminate\Http\Request;

class FormController extends Controller
{
    //
    protected $table = 'form';

    public function add(Request $request, $id = null)
    {
        try {
            $data["title"] = "Add registeration";
            if ($id) {
                $leads = new FormModel();
                $data['singleData'] = $leads->getSingleData($id);
            } else {
                $data['singleData'] = '';
            }
            return view("Form", $data);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function save(Request $request)
    {
        try {
            $returnData = [];

            $leads = new FormValidation();
            $validationResult = $leads->validate($request->all());

            if ($validationResult !== null) {
                return json_encode($validationResult);
            }
            
            $objleads = new FormModel();
            $returnData = $objleads->saveData($request->all());
            if (count($returnData) <= 0) {
                $returnData = ['status' => 'error', 'message' => 'Error in data insertion'];
            }

            return json_encode($returnData);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }


}
