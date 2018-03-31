<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailHomecare extends Model
{
    //
    protected $table = 'detail_homecare';
    protected $primaryKey = 'id_detail_perawatan';


    	
    protected $fillable = [
    		'deskripsi_homecare',
    		'email_homecare',
    		'no_telfon',
    		'tarif',
    ];		
}
