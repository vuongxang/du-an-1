<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\Question;
use App\Models\Topic;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $models = Lesson::paginate(5);
        
        return view('backend.lessons.index',compact('models'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $topic = Topic::all();
        return view('backend.lessons.create',compact('topic'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Lesson::insert([
            'name' => $request->name,
            'desc' => $request->desc,
            'topic_id' => $request->topic_id,
            'content_1' => $request->content_1,
            'content_2' => $request->content_2,
            'content_3' => $request->content_3,
        ]);

        return redirect()->route('lesson.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lesson = Lesson::find($id);
        $questions = Question::where('lesson_id',$id)->get();
        return view('backend.lessons.show',compact('lesson','questions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $topic = Topic::all();
        $model=Lesson::find($id);

        return view('backend.lessons.edit',compact('topic','model'));
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
        $model = Lesson::find($id);
        $model->fill($request->all());
        $model->save();
        // echo "<pre>";
        // var_dump($model); die;
        return redirect()->route('lesson.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Lesson::find($id);
        $model->delete();
        return redirect()->route('lesson.index');
    }

    public function lessonPage($id){
        $lesson = Lesson::find($id);
        $lessons = Lesson::where('topic_id',$lesson->topic_id)->get();

        return view('frontend.pages.lesson',compact('lesson','lessons'));
    }

    public function lessonShowPage($id){
        $lesson = Lesson::find($id);
        dd($lesson);
    }
}
