<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;
use App\Models\Lesson;
use Illuminate\Support\Facades\DB;
use FFI\Exception;
use App\Http\Requests\StoreTopic;
class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $models = Topic::paginate(10);
        
        return view('backend.topics.index',compact('models'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.topics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTopic $request)
    {
        $model = new Topic();
        $model->fill($request->all());
        // var_dump($model->image); die;
        // if($request->hasFile('image')){

        //     // lấy tên gốc của ảnh
        //     $filename = $request->image->getClientOriginalName();
        //     // thay thế ký tự khoảng trắng bằng ký tự '-'
        //     $filename = str_replace(' ', '-', $filename);
        //     // thêm đoạn chuỗi không bị trùng đằng trước tên ảnh
        //     $filename = uniqid() . '-' . $filename;
        //     // lưu ảnh và trả về đường dẫn
        //     $path = $request->file('image')->storeAs('topics', $filename);
        //     $model->image = "images/$path";
        // }

    	DB::beginTransaction();
    	try{

			$model->save();
			DB::commit();
    	}catch(Exception $ex){
    		// ghi log lỗi lại
    		DB::rollback();
    	}
    	

    	return redirect()->route('topic.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Topic $topic)
    {
        $lessons = Lesson::where('topic_id',$topic->id)->get();
        return view('backend.topics.show',compact('topic','lessons'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $topic=Topic::find($id);
        // $cate = Topic::find($id);
        return view('backend.topics.edit')->with('topic',$topic);
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
        $model = Topic::find($id);
        $model->fill($request->all());
        $model->save();
        // echo "<pre>";
        // var_dump($model); die;
        return redirect()->route('topic.index',$model->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Topic::find($id);
        $model->delete();
        return redirect()->route('topic.index');
    }
    public function topicPage(){
        $topics = Topic::paginate(10);
        return view('frontend.pages.topics',compact('topics'));
    }
}
