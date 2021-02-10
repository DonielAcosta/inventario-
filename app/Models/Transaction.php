<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table ="transactions";
    protected $primaryKey="id";
    protected $fillable = [
        'id_product', 'id_stock', 'id_input', 'quantity', 'price'
    ];

    public function product(){
    	return $this->belongsTo("App\Models\Product","id_product");
    }
    public function stock(){
    	return $this->belongsTo("App\Models\Stock","id_stock");
    }
    public function input(){
    	return $this->belongsTo("App\Input","id_input");
    }
    public $timestamps = false;
}
