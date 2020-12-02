<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class LamQuizz extends Model
{
    protected $table = 'lam_quizzs';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'user_id',
        'topic_id',
        'point',
        'trang_thai',
        'lesson_id'
    ];
    public function user(){
        return $this->hasMany(User::class, 'user_id');
    }

    public function lesson(){
        return $this->hasMany(Lesson::class, 'lesson_id');
    }
    
}
