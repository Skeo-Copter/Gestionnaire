<?php

namespace Service;

use Ipf\Rest\Api;
use Ipf\Rest\Result;
use Ipf\Http\Request;

class Task extends Api
{
    public function __construct()
    {
        parent::__construct();

        $table = new \Model\DbTable\Task();
        
        $this->get('/gestionnaire/application/back/back/todos', function () use ($table){
            $result = new Result();
            $result->data = $table->findAll();
            return $result;
        });

        $table = new \Model\DbTable\User();
        
        $this->get('/gestionnaire/application/back/back/manager/UserTask', function () use ($table){
            $result = new Result();
            $result->data = $table->UserTask();
            return $result;
        });
        
        $this->post('/gestionnaire/application/back/back/getUser', function () use ($table){

            $request = $this->getRequest()->getRawBody();
            var_dump($request['login']);
            $result = new Result();
            $result->data = $table->getUser($request);
            return $result;
        });
    }
    
}
