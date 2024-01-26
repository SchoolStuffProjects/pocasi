<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SpolkZeme;

class Kontroler extends BaseController
{
    var $spolkZeme;
    var $Station;

    public function __construct(){
        $this->spolkZeme = new spolkZeme();
    }
    
    public function getbundesland(){
        $data['spolkZeme'] = $this->spolkZeme->orderBy('name', 'asc')->findAll();
        echo view('spolk_zeme', $data);
    }

    public function getIndividualBundesland($idbundesland){
        $data['spolkZeme'] = $this->spolkZeme->find($idbundesland);
        echo view('kartaSpolkZeme', $data);
    }

    public function getStations($idbundesland){
        $data['Station'] = $this->Station->where('bundesland', $idbundesland)->FindAll();
        $data['name'] = $this->spolkZeme->find($idbundesland)->name;
        echo view('kartaSpolkZeme', $data);
    }
}
