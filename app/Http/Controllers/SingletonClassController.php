<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SingletonClass;

class SingletonClassController extends Controller
{
    public function initSingleton() {
        SingletonClass::getInstance();
        
    }
}
