<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Topic;
class Lesson extends Model
{
    protected $table = 'lessons';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'name',
        'desc',
        'topic_id',
        'content_1',
        'content_2',
        'content_3'
    ];

    public function topic(){
        return $this->belongsTo(Topic::class,'topic_id');
    }
}
