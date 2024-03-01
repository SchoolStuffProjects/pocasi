<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SpolkZeme;
use App\Models\Station;

class Kontroler extends BaseController
{
    var $spolkZeme;
    var $Station;

    public function __construct(){
        $this->spolkZeme = new spolkZeme();
        $this->Station = new Station();
    }
    
    public function getbundesland(){
        $data['spolkZeme'] = $this->spolkZeme->orderBy('name', 'asc')->findAll();
        echo view('spolk_zeme', $data);
    }

    public function getIndividualBundesland($idbundesland){
        $data['name'] = $this->spolkZeme->find($idbundesland)->name;
        $data['Station'] = $this->Station->where('bundesland', $idbundesland)->findAll();
        echo view('kartaSpolkZeme', $data);
    }
}
