<?php
require '../models/model.php';




class Controller
{
    function __construct()
    {
        if (isset($_GET['sessionName'])) {
            $this->GetDataUsers();
        }
    }

    public function GetDataUsers()
    {
        header('Content-Type: application/json');                
        $Data = new Data;
        $users = ['data'=>$Data->getData($_GET['sessionName'])]; 
        $users = $users['data'];            
        foreach ($users as $user){            
            $result=['data'=>$user];
        }                      
        echo json_encode($result,JSON_FORCE_OBJECT);
    }
}

$Controller = new Controller();
