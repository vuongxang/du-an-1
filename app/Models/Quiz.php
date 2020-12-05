<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $table = 'quizzes';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'user_id',
        'topic_id',
        'point',
        'status',
        'lesson_id'
    ];
    public function user(){
        return $this->hasMany(User::class, 'user_id');
    }

    public function lesson(){
        return $this->hasMany(Lesson::class, 'lesson_id');
    }
}
