<?php

namespace App\Controllers;

use CodeIgniter\Controllers;
use App\Models\ModelDashboard;

class Dashboard extends BaseController
{
    public function index(){
        return view('dashboard_view');
    }

    public function table_dashboard()
    {
        $dataDashboard = new ModelDashboard();

        $param['draw']  = isset($_REQUEST['draw']) ? $_REQUEST['draw'] : '';
        $start          = isset($_REQUEST['start']) ? $_REQUEST['start'] : '';
        $length         = isset($_REQUEST['length']) ? $_REQUEST['length'] : '';
        $search_value   = isset($_REQUEST['search']['value']) ? $_REQUEST['search']['value'] : '';
        
        $listing        = $dataDashboard->queryDashboard($search_value, $start, $length);
        $total_count    = $dataDashboard->queryDashboard($search_value);
        $data   = array();
        $no = 0;
        foreach($listing as $key){
            $row = array();
            $no++;
            $row[] = $no;
            $row[] = $key->idprob;
            $row[] = $key->deskripsi;
            $row[] = $key->namaMesin;
            $row[] = $key->namaUnit;
            $row[] = $key->category;
            $row[] = $key->created_by;
            $row[] = $key->fullname;
            $row[] = $key->category_name;

            $data[] = $row;
        }
        $output = array(
            "draw" => intval($param['draw']),
            "recordsTotal" => count($total_count),
            "recordsFiltered" => count($total_count),
            "data" => $data
        );
        echo json_encode($output);
    }
}
