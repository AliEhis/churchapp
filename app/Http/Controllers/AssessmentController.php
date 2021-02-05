<?php

namespace App\Http\Controllers;

use App\Lesson;
use App\Quiz;
use App\Question;
use App\LevelLesson;
use App\ChildrenChurchLevel;
use Illuminate\Http\Request;

class AssessmentController extends Controller
{
    //
    public function getQuestions (Request $request, $classId) {
        $assessment = Question::where('lesson_id', $classId)->get();
        return response()->json([
            'status' => true,
            'data' => $assessment
        ]);
    }

    public function getQuiz (Request $request) {
        $quiz = Quiz::all();
        return response()->json([
            'status' => true,
            'data' => $quiz
        ]);
    }

    public function validateAssessment (Request $request, $classId) {
        $lesson = Lesson::find($classId);
        if (!$lesson) {
            return response()->json([
                'status' => false,
                'message' => 'Class not found'
            ]);
        }
        if (count((array)$request->payload) == 0) {
            return response()->json([
                'status' => false,
                'message' => 'Payload is required'
            ]);
        }
        // Loop the result and score the user
        $total = count($request->payload);
        $score = 0;
        foreach ($request->payload as $item) {
            if (isset($item['questionId'])) {
                $question = Question::find($item['questionId']);
                if (!$question) {
                    return response()->json([
                        'status' => false,
                        'message' => 'Question not applicable to class'
                    ]);
                }
                if ($item['answer'] == $question->answer) {
                    $score += 1;
                }
            } else {
                return response()->json([
                    'status' => false,
                    'message' => 'Payload misses the questionId'
                ]);
            }
        }
        return response()->json([
            'status' => true,
            'message' => 'Completed the grading',
            'data'  => [
                'total' => $total,
                'score' => $score,
                'fails' => $total - $score
            ]
        ]);
    }

    public function getLevelLessonQuestions($lessonId){
        $level=LevelLesson::find($lessonId);
        if(!$level){
         return response()->json([
             'status' => 'false',
             "message" => "record not found",
         ]);       }
        return response()->json([
         'status' => 'success',
         "message" => "Question and answers retrieved successfully",
         "data" => $level->levelQuestions    
     ]);
     }
    public function getChildrenChurchLevel(){
        $level=ChildrenChurchLevel::all();
        if(!$level){
         return response()->json([
             'status' => 'false',
             "message" => "record not found",
         ]);       }
        return response()->json([
         'status' => 'success',
         "message" => "Levels retrieved successfully",
         "data" => $level    
     ]);
     }
    public function getLevelLessons($levelId){
        $level = ChildrenChurchLevel::find($levelId);
        if(!$level){
            return response()->json([
                'status' => 'false',
                "message" => "record not found",
            ]);       
        }
        $data = [];
        if (count($level->levelLesson) > 0) {
            foreach($level->levelLesson as $item => $value) {
                $payload = [
                    "title" => $value->title,
                    "bible" => $value->bible,
                    "video" => $value->video,
                    "level_name" => $level->level
                ];
                array_push($data, $payload);
            }
        }
        return response()->json([
            'status' => 'success',
            "message" => "Level lessons retrieved successfully",
            "data" => $data  
        ]);
     }
}
