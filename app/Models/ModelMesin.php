<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelMesin extends Model
{
    protected $table = 'tmesin';

	protected $primaryKey = 'idMesin';

	protected $allowedFields = ['idMesin','namaMesin'];
}
