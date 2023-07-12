<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelDocSeries extends Model
{
    protected $table            = 'mdocumentseries';
    protected $primaryKey       = 'idSeries';
    
    protected $allowedFields    = ['series'];

}
