<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'name',
        'parent_id',
        'is_active',
    ];

    public function products(){
        return $this->hasMany(Product::class, 'category_id', 'id');
    }

    public function category(){
        return $this->belongsTo(Category::class, 'parent_id', 'id');
    }
}
