<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $table = 'images';
    // những dữ liệu cần lấy
    protected $fillable = ['name', 'product_id'];

    public $timestamps = false;

    public function product(){
        //Cái này thuộc về ai 
        return $this->belongsTo('App\Product');
    }
}
