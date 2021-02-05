<?php

namespace App\Http\Controllers\admin;

use App\Lesson;
use App\LevelLesson;
use App\ChildrenChurchLevel;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LessonController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function lesson(){
        $lessons = Lesson::all();
        return view('cms.lesson', compact('lessons'));
        
    }
    public function lessonForm(){
        return view('cms.lesson_form');
    }

    public function lessonFormSubmit(Request $request){
        $data = array(
            'title'          => $request->title,
            'pastor'          => $request->pastor
        );
        \Log::info($request);
		  if($request->hasFile('video')) {
        $file = $request->file('video');
        $name = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        $filename = Str::random(15).time() . "." . $extension;
        $location = env('APP_URL') . '/files/uploads/video/' . $filename;
        $file->move('files/uploads/video/', $filename);
        $data['video'] = $location;
        }
        Lesson::create($data);
        \Session::flash('success', 'Lesson created successfully.');
        return redirect()->back();
    }

    public function delete ($id) {
        $delete = Lesson::find($id);
        if(!$delete)
        {
            abort(404);
        }
        $delete->delete();
        \Session::flash('success', 'Deleted successfully.');
        return redirect()->back();
    }


    //church children level lesson
    public function getLevelLesson($id){
       $levels=ChildrenChurchLevel::find($id);
      return view('cms.level_lesson', compact('levels'));
    }
    public function levelLessonForm($classId){
        return view('cms.level_lesson_form', compact("classId"));
    }

    public function levelLessonFormSubmit(Request $request){
        $data = array(
            'title'          => $request->title,
            'bible'          => $request->bible,
            'children_church_level_id' =>$request->level_id
        );
        \Log::info($request);
		 if ($request->hasFile('video')) {
        $file = $request->file('video');
        $name = $file->getClientOriginalName();
        $extension =$file->getClientOriginalExtension();
        $filename =Str::random(15).time() . "." . $extension;
        $location =env('APP_URL') . '/files/uploads/video/' . $filename;
        $file->move('files/uploads/video/', $filename);
        $data['video'] = $location;
		 }
        LevelLesson::create($data);
        \Session::flash('success', 'Lesson created successfully.');
        return redirect()->back();
    }

  

    public function level(){
        $lessons = ChildrenChurchLevel::all();
        return view('cms.children_level', compact('lessons'));
        
    }
    public function levelForm(){
        return view('cms.children_level_form');
    }
    
    public function levelFormSubmit(Request $request){
        $data = array(
            'image'          => $request->image,
            'level'          => $request->level

        );
        \Log::info($request);
    
        $file = $request->file('image');
        $name = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        $filename = Str::random(15).time() . "." . $extension;
        $location = env('APP_URL') . '/files/uploads/images/' . $filename;
        $file->move('files/uploads/images/', $filename);
        $data['image'] = $location;
        // if ($request->hasFile('video')) {
        // }
        ChildrenChurchLevel::create($data);
        \Session::flash('success', 'Lesson created successfully.');
        return redirect()->back();
    }

}



