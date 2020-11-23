<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
class Category extends Model
{
    protected $table = 'categories';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'name',
        'desc'
    ];
    public function product()
    {
        return $this->hasMany(Product::class, 'cate_id');
    }
}
