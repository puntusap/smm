<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ComputerFacade;

class ComputerFacadeController extends Controller
{
    public function index()
    {
        $computer = new ComputerFacade(new Computer());

echo $computer->turnOn(); // Ай! Бип-бип! Загрузка.. Готов к использованию!

//echo $computer->turnOff(); // Буп-буп-буп-бззз! Аах! Zzzzz

}
}