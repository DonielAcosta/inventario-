<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Output extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table ="outputs";
    protected $primaryKey="id";
    protected $fillable = [
        'id_user', 'id_stock', 'quantity', 'date','observation'
    ];
    public function user(){
        return $this->belongsTo("App\Models\User","id_user");
    }
    public function stock(){
        return $this->belongsTo("App\Models\Stock","id_stock");
    }
    public $timestamps = false;
}
