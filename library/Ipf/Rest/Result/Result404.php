<?php

namespace Ipf\Rest\Result;

use Ipf\Rest\Result;

class Result404 extends Result
{
    /**
     * @var int 
     */
    public $code = 404;

    /**
     * @var boolean 
     */
    public $error = true;
}
