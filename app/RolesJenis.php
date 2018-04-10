<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RolesJenis extends Model
{
    //
    protected $table = 'roles_jenis';
    protected $primaryKey = 'id_roles_jenis';

    protected $fillable = [
    		'nama_perawatan',
    ];		
}
