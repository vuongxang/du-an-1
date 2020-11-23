<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Lesson;
class Topic extends Model
{
    protected $table = 'topics';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'name',
        'desc',
        'image',
        'show_menu'
    ];

    public function lesson(){
        return $this->hasMany(Lesson::class,'topic_id');
    }
}
