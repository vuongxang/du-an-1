<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChiTietLamQuizz extends Model
{
    protected $table = 'chi_tiet_lam_quizzs';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'lamquizz_id',
        'question_id',
        'trang_thai'
    ];
    
}
