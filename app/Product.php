<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /*public function getCategory(){
        return Category::find($this->category_id);
    }*/
    protected $fillable = ['code', 'name','price', 'category_id', 'description', 'image'];
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function getPriceForCount($count){
        return $this->price * $count;
    }
}

