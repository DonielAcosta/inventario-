<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sub_Stock extends Model
{
      

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table="sub__stocks";
    protected $primaryKey="id";
    protected $fillable = [
        'id_warehouse', 'name', 'decription', 'date'
    ];
    public function warehouse(){
    	return $this->belongsTo("App\Models\Warehouse","id_warehouse");
    }
    public $timestamps = false;
}

