<?php
namespace App\Controllers;
require realpath("../../vendor/autoload.php");
use App\Config\Connection;
use App\Models\Intern;
class InternController{
    protected $db;
    protected $requireMrthod;
    protected $userId;
    public function __construct( $db, $requestMethod, $userId)
    {

        $this->requestMethod = $requestMethod;
        $this->userId = $userId;

        $this->personGateway = new Intern($db);
    }
}

//
