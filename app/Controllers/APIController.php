<?php

namespace App\Controllers;

class APIController extends \MainController
{
    public function index() {

        $data=[];
        $data['jsonrpc']='1.0';
        $data['MySQLTime']=self::MySQLTime();
        $data['UNIXTime']=self::UNIXTime();
        
        return view('/api', ['data' => $data]);
    }
    
    public function index_v3() {

        $params=\Request::get();
        
        $data=[];
        $data['jsonrpc']='3.0';
        
        foreach($params as $param){
            if (method_exists(__CLASS__,$param)) {
                $data[$param]=call_user_func('self::'.$param);
            }
        
        }
       
        return view('/api', ['data' => $data]);
    }
    
    

    public function getMySQLTime(){
        
        $data=[];
        $data['jsonrpc']='1.0';
        $data['MySQLTime']=self::MySQLTime();
        
        return view('/api', ['data' => $data]);
        
    }

    public function getUNIXTime(){
        
        $data=[];
        $data['jsonrpc']='1.0';
        $data['UNIXTime']=self::UNIXTime();
        
        return view('/api', ['data' => $data]);
        
    }



    private static function MySQLTime(){
        return date('Y-m-d H:i:s');
    }

    private static function UNIXTime(){
        return time();
    }

}

