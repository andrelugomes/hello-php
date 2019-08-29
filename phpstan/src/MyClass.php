<?php

namespace App;

use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

class MyClass
{

    public function myMethod() : Collection
    {
        $collection = new ArrayCollection([1,2,3,4,5,6,7,8,9.10]);

        return $collection->map(function ($item) {
           return $item * 3;
        });
    }

}