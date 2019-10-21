<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SingletonClass extends Model
{
    private static $instance;

    protected function __construct() {
        //Do nothing
    }

    public static function getInstance() {
        if (empty(SingletonClass::$instance)) {
            SingletonClass::$instance = new SingletonClass();
            echo 'Created';
        }
        else {
            echo ', Already created';
        }

        return SingletonClass::$instance;
    }
}
