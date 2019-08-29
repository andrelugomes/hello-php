<?php

namespace Collections;

use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

class Collections {

    public function filter(array $array) : Collection {
        $collection = new ArrayCollection($array);

        $filteredCollection = $collection->filter(function($it) {
            return  $it > 1;
        });

        return $filteredCollection;
    }

}
