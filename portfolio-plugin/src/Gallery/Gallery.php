<?php

namespace App\PortfolioPlugin\Gallery;

use App\PortfolioPlugin\Traits\Validation;

class Gallery
{
    use Validation;
    public function gallery_Plugin()
    {
        echo "gallery method";
        // sayHello();

        // $this->Validate();
    }

    protected function gallery_Plugin1()
    {
        echo "gallery method";
    }
    private function gallery_Plugin2()
    {
        echo "gallery method";
    }

    public static function isAdmnin()
    {
        echo "is Admin";
    }
}
