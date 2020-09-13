<?php

namespace App\Core;

require_once 'App/Util/Prefix.php';
use App\Util\Prefix;

abstract class PrefixAdder {

    protected $prefix;

    protected function addPrefix() {
        $this->prefix = new Prefix();
        return $this->prefix->getDate();
    }

}