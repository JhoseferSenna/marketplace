<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function store()
    {
        return $this->belongsTo(Store::class);
    }
    protected $fillable = ['name', 'description', 'body', 'price', 'slug'];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
