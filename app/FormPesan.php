<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormPesan extends Model
{
    //
    protected $table = 'pemesanan';
    protected $primaryKey = 'id_pemesanan';


    	
    protected $fillable = [
    		'tanggal_pemesanan',
    		'jam_pemesanan',
    		'keluhan',
    ];		
}
