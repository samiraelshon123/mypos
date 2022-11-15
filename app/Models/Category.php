<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use \Astrotomic\Translatable\Translatable;
    protected $guarded = [];
    public $translatedAttributes = ['name'];
    public function products(){
        return $this->hasMany(Product::class);
    }
}
