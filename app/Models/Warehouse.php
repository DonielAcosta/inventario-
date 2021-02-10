<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table="warehouses";
    protected $primaryKey="id";
    protected $fillable = [
        'name', 'quantity'
    ];

    public function sub_stocks(){
        return $this->hasMany("App\Models\Sub_Stock");
    }
    public $timestamps = false;
}
