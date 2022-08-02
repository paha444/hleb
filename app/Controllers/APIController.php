<?php

namespace App\Controllers;

class APIController extends \MainController
{
    public function index() {

        $data=[];
        $data['jsonrpc']='1.0';
        $data['DateTime']=$this->getDateTime();
        $data['UNIXTime']=$this->getUNIXTime();
        
        return view('/api', ['data' => $data]);
    }
    
    private function getDateTime(){
        
        return date('Y-m-d H:i:s');
        
    }

    private function getUNIXTime(){
        
        return time();
        
    }


}

