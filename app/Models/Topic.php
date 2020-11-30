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
        'price',
        'image',
        'show_menu',
        'view_count'
    ];

    public function lesson(){
        return $this->hasMany(Lesson::class,'topic_id');
    }
}
