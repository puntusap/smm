<?php

namespace App\Interfaces;

interface ChatRoomMediator 
{
    public function showMessage( $user,  $message);
}