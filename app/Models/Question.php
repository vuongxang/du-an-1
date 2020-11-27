<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Lesson;

class Question extends Model
{
    protected $table = 'questions';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'name',
        'type',
        'content',
        'media',
        'lesson_id',
        'a',
        'b',
        'c',
        'd',
        'dap_an_dung'
    ];
    public function lesson(){
        return $this->belongsTo(Lesson::class,'lesson_id');
    }
}
