<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $models = Question::paginate(10);
        return view('backend.questions.index',compact('models'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lessons = Lesson::all();
        return view('backend.questions.create',compact('lessons'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Question::insert([
            'name' => $request->name,
            'lesson_id' => $request->lesson_id,
            'content' => $request->content,
            'a' => $request->a,
            'b' => $request->b,
            'c' => $request->c,
            'd' => $request->d,
            'dap_an_dung'=>$request->dap_an_dung
        ]);

        return redirect()->route('question.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lessons = Lesson::all();
        $model = Question::find($id);
        return view('backend.questions.edit',compact('lessons','model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = Question::find($id);
        $model->fill($request->all());
        $model->save();
        return redirect()->route('question.index',$model->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Question::find($id);
        $model->delete();
        return redirect()->route('lesson.index');
    }
    public function getQuestion($id)
    {
        $questions= Question::where('lesson_id',$id)->get();
        $lesson = Lesson::find($id);
        return view('frontend.pages.showquestions',compact('questions','lesson'));
    }
}
