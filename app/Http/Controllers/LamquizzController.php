<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\LamQuizz;
use App\Models\ChiTietLamQuizz;
use App\Models\Lesson;
use App\Models\Topic;

class LamquizzController extends Controller
{
    public function quizz(Request $request){

        // foreach($request->all() as $index => $item){
        //     var_dump($index);
        // }
        // die;

        $lam_quizz = new LamQuizz();
        $lam_quizz->user_id = $request->user_id;
        $lam_quizz->topic_id = $request->topic_id;
        $lam_quizz->lesson_id = $request->lesson_id;
        $lam_quizz->save();
        
        $questions = Question::where('lesson_id',$request->lesson_id)->get();

        foreach($questions as $item){
            
            $model = new ChiTietLamQuizz();
            $model->lamquizz_id = $lam_quizz->id;
            $model->question_id = $item->id;
            $model->lesson_id = $item->lesson_id;
            $model->save();
            foreach($request->all() as $index => $it){
                if($index==$item->id){
                    if($it==$item->dap_an_dung){
                        $model->trang_thai= 1;
                    }
                }
            }
            $model->save();
        }
        $models = ChiTietLamQuizz::where('lesson_id',$request->lesson_id)->where('trang_thai',1)->where('lamquizz_id',$lam_quizz->id)->get();

        $point = count($models)/count($questions)*10;
        
        $lam_quizz->point = $point;
        if($lam_quizz->point<8){
            $lam_quizz->trang_thai = 0;
        }else{
            $lam_quizz->trang_thai = 1;
        }
        $lam_quizz->save();
        $lesson = Lesson::find($request->lesson_id);
        $topic = Topic::find($request->topic_id);
        return view('frontend.pages.thong-bao',compact('point','lesson','topic'));
    }
}
