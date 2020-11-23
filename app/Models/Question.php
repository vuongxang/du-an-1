<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}
