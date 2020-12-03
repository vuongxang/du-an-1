<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Topic;
use App\Models\Question;

class Lesson extends Model
{
    protected $table = 'lessons';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'name',
        'desc',
        'topic_id',
        'video',
    ];

    public function topic(){
        return $this->belongsTo(Topic::class,'topic_id');
    }

    public function questions(){
        return $this->hasMany(Question::class,'lesson_id');
    }
}
