<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;
use App\Models\DangKyHoc;
class DangKyHocController extends Controller
{
    public function dangKy(Request $request){

        $model = new DangKyHoc();
        $model->user_id = $request->user_id;
        $model->topic_id = $request->topic_id;
        $model->trang_thai =1;
        $model->save();

        // $dang_ky_hoc = DangKyHoc::where('topic_id',$request->topic_id)->where('user_id',$request->user_id)->first();
        // dd($dang_ky_hoc);
        return redirect()->route('site.topic-detail',$request->topic_id);
    }
}
