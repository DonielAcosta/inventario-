<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
     
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table ="suppliers";
    protected $primaryKey="id";
    protected $fillable = [
        'name', 'last_name', 'email', 'phone', 'rif'
    ];
    
    public function inputs(){
    	return $this->hasMany("App\Models\Input");
    }

    public $timestamps = false;
}
