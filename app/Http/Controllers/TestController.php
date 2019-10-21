<?php

namespace App\Http\Controllers;

use App\DataTables\OrderDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Repositories\OrderRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use Datatables;

class TestController extends Controller
{
    public function initSingleton() {
        SingletonClass::getInstance();
        SingletonClass::getInstance();
        SingletonClass::getInstance();
    }

}