<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelSubUnit1 extends Model
{
    protected $table = 'mkategori2';

	protected $primaryKey = 'idKat2';

	protected $allowedFields = ['idKat2','idMesin','idUnit','namaKategori2'];
}
