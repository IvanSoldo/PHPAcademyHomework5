<?php

namespace App\Core;

require_once 'App/Util/Prefix.php';
use App\Util\Prefix;

abstract class AbstractModel {

    protected $prefix;

    private function addPrefix() {
        $this->prefix = new Prefix();
        return $this->prefix->getDate();
    }

    public function viewAction()
    {
        return $this->addPrefix() . ' ' . get_class($this);
    }

}