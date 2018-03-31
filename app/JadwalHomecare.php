<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JadwalHomecare extends Model
{
    //
    protected $table = 'jadwal_homecare';
    protected $primaryKey = 'id_jadwal_homecare';


    	
    protected $fillable = [
    		'hari_praktek',
    		'jam_buka',
    		'jam_tutup',
    ];		
}
