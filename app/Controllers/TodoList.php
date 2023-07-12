<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelInputProblem;
use App\Models\ModelMesin;
use App\Models\ModelUnit;
use App\Models\ModelSubUnit1;
use App\Models\ModelSubUnit2;

class TodoList extends BaseController
{
    public function index()
    {
       return view('todolist/input_problem_view');
    }
    public function input_problem()
    {
        $ModelInputProblem = new ModelInputProblem();
        $request = \Config\Services::request();
        $data['series']        = $request->getVar('series');
        $data['category_name'] = $ModelInputProblem->prioritas();
        $data['kategori']      = $ModelInputProblem->kategori();
        $dataMesin      = new ModelMesin();
        $data['mesin']  = $dataMesin->orderBy('namaMesin', 'ASC')->findAll();
        return view('todolist/input_problem_view', $data);

    }
    
    public function action()
	{
		if($this->request->getVar('action'))
		{
			$action = $this->request->getVar('action');
			if($action == 'get_unit')
			{
				$unitModel = new ModelUnit();
				$unitdata = $unitModel->where('idMesin', $this->request->getVar('id_mesin'))->findAll();
				echo json_encode($unitdata);
			}

			if($action == 'get_subunit1')
			{
				$subUnit1Model = new ModelSubUnit1();
				$subUnit1data  = $subUnit1Model->where('idUnit', $this->request->getVar('id_unit'))->findAll();
				echo json_encode($subUnit1data);
			}

            if($action == 'get_subunit2')
			{
				$subUnit2Model = new ModelSubUnit2();
				$subUnit2data  = $subUnit2Model->where('idKat2', $this->request->getVar('id_kat2'))->findAll();
				echo json_encode($subUnit2data);
			}
		}
	}
}
