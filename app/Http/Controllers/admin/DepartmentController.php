<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Department;

class DepartmentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function department(){
        $departments = Department::all();
        return view('cms.department_all', compact('departments'));
        
    }
    public function departmentForm(){
     return view('cms.department_form');

    }

    public function departmentFormSubmit(Request $request){
        $data = array(
            'title'   => $request->title,
            'department_head'   => $request->department_head,
            'description'   => $request->description,
        );
        Department::create($data);

        \Session::flash('success', 'Department ccreated  successfully.');

        return redirect()->back();

    }

    public function delete ($page, $id) {

        if ($page == 'department') {

            $delete = Department::find($id);

            if(!$delete)
            {

                abort(404);

            }
            $delete->delete();

            \Session::flash('success', 'Deleted successfully.');

            return redirect()->back();



        }

        

    }

}
