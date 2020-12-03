<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DangKyHoc extends Model
{
    protected $table = 'dang_ky_hocs';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'user_id',
        'topic_id',
        'trang_thai',
        'ngay_hoan_thanh'
    ];
    public function topic(){
        return $this->belongsTo(Topic::class,'topic_id');
    }
}
