<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SpolkZeme;
use App\Models\Station;
use App\Models\currentStation;

class Kontroler extends BaseController
{
    var $spolkZeme;
    var $Station;
    var $currentStation;

    public function __construct(){
        $this->spolkZeme = new spolkZeme();
        $this->Station = new Station();
        $this->currentStation = new currentStation();
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

    public function getIndividualStation($idStation){
        $data['currentStation'] = $this->currentStation->where('Stations_ID', $idStation)->findAll();
        //$data['currentStationName'] = $this->spolkZeme->find($idStation)->quality;
        echo view('individualniStanice', $data);
    }

    public function getIndividualBundeslandObr($idbundesland){
        $data['name'] = $this->spolkZeme->find($idbundesland)->name;
        $data['Station'] = $this->Station->where('bundesland', $idbundesland)->findAll();
        echo view('kartaSpolkZemeObr', $data);
    }
}
