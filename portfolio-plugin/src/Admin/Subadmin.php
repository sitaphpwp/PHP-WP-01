<?php

namespace App\PortfolioPlugin\Admin;

class SubAdmin extends Admin
{
}

//  PHP multiple inheritance not allow 
//  python allow 


$subadmin = new SubAdmin();

$subadmin->add_menu();
// $subadmin->add_sub_menu_level();
// $subadmin->add_sub_menu();
