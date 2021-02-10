<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table ="stocks";
    protected $primaryKey="id";
    protected $fillable = [
        'id_product', 'id_sub_stock', 'observation', 'quantity'
    ];
    public function product(){
    	return $this->belongsTo("App\Models\Product","id_product");
    }
    public function sub_stock(){
    	return $this->belongsTo("App\Models\Sub_Stock","id_sub_stock");
    }
    public $timestamps = false;
}
