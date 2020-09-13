<?php

namespace App\Util;

class Prefix {

    private $date;

    /**
     * Prefix constructor.
     */
    public function __construct()
    {
        $this->date = date('d/m/Y', time());
    }


    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }




}