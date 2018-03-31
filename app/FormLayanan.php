<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormLayanan extends Model
{
    //
    protected $table = 'jenis_perawatan';
    protected $primaryKey = 'id_jenis_perawatan';


    	
    protected $fillable = [
    		'nama_homecare',
    		'jenis_layanan',
    		'foto',
    		'alamat_homecare',
    ];		
}
