<?php

namespace Service;

use Ipf\Rest\Api;
use Ipf\Rest\Result;

class Task extends Api
{
    public function __construct()
    {
        parent::__construct();

        $table = new \Model\DbTable\Task();
        
        var_dump('hello');
        
        $this->get('/TimeTracking/application/back/back/todos', function () use ($table){
            $result = new Result();
            $result->data = $table->findAll();
            return $result;
        });

        $this->get(
            '/TimeTracking/application/back/back/weektask',
            function () use ($table) {
                $result = new Result();
                $result->data = array(
                    'prenom' => 'toto',
                    'nom'    => 'otot'
                );
                return $result;
            }
        );
    }
}