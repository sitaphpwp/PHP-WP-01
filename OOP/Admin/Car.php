<?php

class Car
{
    private $host;
    private $username;
    private $dbname;
    private $password;

    public function __construct($db_host, $db_username, $db_dbname, $db_password)
    {
        $this->host = $db_host;
        $this->username = $db_username;
        $this->dbname = $db_dbname;
        $this->password = $db_password;
    }

    private $carname = "BMW";
    private $car_price = "1 Core";


    public function carRun()
    {
        echo $this->carname . "</br>";
        echo "car can run";
    }

    public function carStop()
    {
        echo $this->car_price . "</br>";
        echo "Car cam Stop";
    }
}


// $car_obj = new Car();

// $car_obj->carRun();
// $car_obj->carStop();
