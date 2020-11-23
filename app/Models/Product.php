<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
class Product extends Model
{
    protected $table = 'products';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'name',
        'image',
        'cate_id',
        'price',
        'short_desc',
        'detail',
        'star',
        'views',
    ];
    public function category(){
        return $this->belongsTo(Category::class,'cate_id');
    }
}
