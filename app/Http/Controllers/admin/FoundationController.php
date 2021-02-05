<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Foundation;

class FoundationController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function foundation(){
        $foundations = Foundation::all();
        return view('cms.foundation', compact('foundations'));
        
    }
    public function foundationForm(){
        return view('cms.foundation_form');
    }

    public function foundationFormSubmit(Request $request){
        $data = array(
            'name'          => $request->name,
            'description'   => $request->description
        );
        if ($request->period <= 1) {
            $data['duration'] = $request->period . ' ' . $request->type;
        } else {
            $data['duration'] = $request->period . ' ' . $request->type . 's';
        }
        Foundation::create($data);
        \Session::flash('success', 'Foundation created successfully.');
        return redirect()->back();
    }

    public function delete ($id) {
        $delete = Foundation::find($id);
        if(!$delete)
        {
            abort(404);
        }
        $delete->delete();
        \Session::flash('success', 'Deleted successfully.');
        return redirect()->back();
    }

}
