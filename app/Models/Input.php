<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Input extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table ="inputs";
    protected $primaryKey="id";
    protected $fillable = [
        'id_user', 'id_supplier', 'whole', 'date','n_invoice'
    ];

    public function supplier(){
    	return $this->belongsTo("App\Models\Supplier","id_supplier");
    }

    public function user(){
    	return $this->belongsTo("App\Models\User","id_user");
    }
    public $timestamps = false;
}
