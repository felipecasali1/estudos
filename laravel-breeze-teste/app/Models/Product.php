<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'price',
        'quantity',
        'description',
        'category_id', 
        'user_id',
    ];

    protected $hidden = [
        //
    ];

    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }
    
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
