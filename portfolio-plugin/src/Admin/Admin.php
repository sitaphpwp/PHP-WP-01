<?php

namespace App\PortfolioPlugin\Admin;

class Admin
{
    public $username = "test";
    protected $password = "";
    private $dbname = "test";
    public function add_menu()
    {
        echo "I am menu page";
    }
    protected function add_sub_menu()
    {
        echo "I am sub menu page";
    }
    private function add_sub_menu_level()
    {
        echo "I am sub menu page";
    }
}

// 5000 => admin 
// 400=>subadmin 


