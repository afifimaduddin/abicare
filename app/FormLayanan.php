<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormLayanan extends Model
{
    //
    protected $table = 'homecare';
    protected $primaryKey = 'id_homecare';


    	
    protected $fillable = [
    		'nama_homecare',
    		'jenis_layanan',
    		'foto_homecare',
    		'alamat_homecare',
            'status_homecare',
    ];		
}
