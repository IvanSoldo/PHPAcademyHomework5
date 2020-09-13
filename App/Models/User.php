<?php

namespace App\Models;

require_once 'App/Core/ViewableInterface.php';
require_once 'App/Core/PrefixAdder.php';

use \App\Core\ViewableInterface;
use \App\Core\PrefixAdder;

class User extends PrefixAdder implements ViewableInterface {

    public function viewAction()
    {
        return $this->addPrefix() . ' ' . get_class($this);
    }
}