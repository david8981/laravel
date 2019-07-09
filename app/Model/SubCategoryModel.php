<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SubCategoryModel extends Model
{
    //
    protected $table = "sub_category";

    public function categories(){
    	$this->belongsTo(CategoryModel::class);
    }
}
