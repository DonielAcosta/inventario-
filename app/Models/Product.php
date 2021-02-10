<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table="products";
    protected $primaryKey="id";
    protected $fillable = [
        'name', 'date', 'decription', 'id_category'
    ];
   
    public function suppliers(){
        return $this->hasMany("App\Models\Supplier","id_supplier");
    }

    public function category(){
        return $this->belongsTo("App\Models\Category","id_category");
    }

    public $timestamps = false;
}
