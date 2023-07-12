<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelDashboard extends Model
{   
    function queryDashboard($katakunci = null, $start = 0, $length = 0)
    {
        $db = db_connect();
        $where1 = "(
				    (
				     (p.idprob LIKE 'TSK%' OR p.idprob LIKE 'PGA%') 
				      AND p.status_problem NOT IN ('CLOSED') 
				      AND ta.created_date IN (select max(created_date) from tassign group by no_pelaporan)
				    ) 
				    OR p.status_problem IN ('OPEN')
			       )";
        $where2 = "(
			  		(
			  		  (p.idprob LIKE 'TSK%' OR idprob LIKE 'MTC%') 
			  		  and p.id_mesin <> '55'
			  		) 
			  	   or (p.idprob LIKE 'TSK%'	
			  	   		AND p.id_mesin = '55' 
			  	   		AND 
			  	   			(p.dateprob < '2022-05-17' or p.transfer_to = 'mtc')
			  	   	   )
			  	   or (
			  	   		(p.idprob LIKE 'PGA%' or p.idprob LIKE 'TSK%')
			  	   			and p.id_mesin = '55' 
			  	   			and p.dateprob >= '2022-05-17' 
			  	   			and (p.transfer_to = 'mtc' or u.divisi = 'MAINTENANCE') 
			  	   			and p.status_problem NOT IN ('CLOSED')
			  	   	  )
			  	   and (
			  	   		 p.status_problem NOT IN ('CLOSED') OR p.status_problem IN ('OPEN')
			  	   	    )
			  	  )";
        
        $builder = $db->table('tproblems p');
        $query = $builder->select('*')
                         ->join('mcategories c','p.idcat = c.idcat','left')
                         ->join('tmesin m','p.id_mesin = m.idMesin','left')
                         ->join('tmesinunit n','p.id_unit_mesin = n.idUnit','left')
                         ->join('tassign ta','p.idprob = ta.no_pelaporan','left')
                         ->join('user u','u.username = ta.pic_handling','left')
                         ->where($where1)
                         ->where($where2)
                         ->groupBy('p.idProb')
                         ->orderBy('p.idcat','ASC');

        if($katakunci){
            $arr_katakunci = explode(" ", $katakunci);
            for($x = 0; $x < count($arr_katakunci); $x++){
                $query = $query->orLike('idprob', $arr_katakunci[$x]);
                $query = $query->orLike('namapelapor', $arr_katakunci[$x]);
                $query = $query->orLike('deskripsi', $arr_katakunci[$x]);
            }
        }
        if($start != 0 or $length != 0){
            $query = $query->limit($length, $start);
        }
        return $query->orderBy('idprob')->get()->result_array();    
       
    }

    
}
