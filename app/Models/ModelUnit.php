<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelUnit extends Model
{
    protected $table = 'tmesinunit';

	protected $primaryKey = 'idUnit';

	protected $allowedFields = ['idUnit','idMesin','namaMesin'];
}
