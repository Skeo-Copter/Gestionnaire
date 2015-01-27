<?php

namespace Service;

use Ipf\Rest\Api;
use Ipf\Rest\Result;

class User extends Api
{
    public function __construct()
    {
        parent::__construct();

        $table = new \Model\DbTable\User();
        var_dump('hello');

        $this->get('/TimeTracking/application/back/back/user', function () use ($table){
            $result = new Result();
            $result->data = $table->findUser();
            return $result;
        });
        
        $this->get(
            '/TimeTracking/application/back/back/weektask',
            function () use ($table) {
                $result = new Result();
                $result->data = $table->findUser();
                return $result;
            }
        );
    }
}
