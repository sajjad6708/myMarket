<?php

namespace App\Models\Market;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'slug', 'image', 'status', 'tags', 'show_in_menu', 'parent_id'];

    public function parent(){
        return $this->belongsTo($this , 'parent_id')->with('parent') ;
    }
    public function children()
    {
        return $this->hasMany($this, 'parent_id')->with('children');
    }


    // public function products()
    // {
    //     return $this->hasMany(Product::class, 'category_id');
    // }

    // public function attributes()
    // {
    //     return $this->hasMany(CategoryAttribute::class);
    // }

    
}
