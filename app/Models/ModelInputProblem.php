<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelInputProblem extends Model
{
    function prioritas(){
        $db         = db_connect();
        $builder    = $db->table('mcategories p');
        $query      = $builder->select('*');
        return $query->orderBy('idcat','ASC')->get()->getResult();    
    }
    function kategori(){
        $db         = db_connect();
        $builder    = $db->table('mkategori1 p');
        $query      = $builder->select('*');
        return $query->orderBy('idKat1','ASC')->get()->getResult();    
    }

}
