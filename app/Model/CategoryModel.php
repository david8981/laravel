<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    //Name of the table
    protected $table 	= 'category';
    protected $fillable = ['name','slug','description','status','image_file'];

    public function get_fillable() {
    	return $this->fillable;
    }

    public function subcategories(){
    	return $this->hasMany(SubCategoryModel::class,'category_id');
    }
	 
}
