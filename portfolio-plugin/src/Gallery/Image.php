<?php

namespace App\PortfolioPlugin\Gallery;

use App\PortfolioPlugin\Traits\Validation;

class Image extends Gallery
{
    use Validation;

    public function imageLoading()
    {
        echo "image loading";
    }
}

$image0bj = new Image();
$image0bj->gallery_Plugin();



// abstraction 
// interface 
// polymprphism 
// encapsulation 