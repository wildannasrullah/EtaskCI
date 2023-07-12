<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelSubUnit2 extends Model
{
    protected $table = 'mkategori3';

	protected $primaryKey = 'idKat3';

	protected $allowedFields = ['idKat3','idKat2','idUnit','idMesin','namaKategori3'];
}
