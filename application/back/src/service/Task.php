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
            $result->data = $table->findAll();
            return $result;
        });
    }
    
}
