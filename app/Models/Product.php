<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description'];

    public function productDetails(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(ProductDetails::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getCategoryName()
    {
        return $this->category->name;
    }

    public function getCategoryNameAttribute(){
        return $this->category->name;
    }

    public function getCodeBarAttribute(){
        return $this->productDetails->code_bar;
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function comments(){
        return $this->morphMany(Comment::class, 'comentable');
    }
}
