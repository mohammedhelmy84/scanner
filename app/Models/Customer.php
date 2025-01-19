<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    protected $table = 'customers';
    public $timestamps = true;
    protected $fillable = array('name', 'category_id','qrcode','institution',"phone","email");

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

}
