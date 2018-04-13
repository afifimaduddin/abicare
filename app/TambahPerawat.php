<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TambahPerawat extends Model
{
    //
    protected $table = 'detail_perawat';
    protected $primaryKey = 'id_detail_perawat';


    	
    protected $fillable = [
    		'nama_perawat',
    		'jenis_kelamin',
    		'tanggal_lahir',
    		'pendidikan_terakhir',
    		'jurusan',
    		'NIRA',
            'foto_perawat',
    ];		
}
