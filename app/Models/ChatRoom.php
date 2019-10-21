<?php

class ChatRoom implements ChatRoomMediator
{
    public function showMessage($user, $message)
    {
        $time = date('M d, y H:i');
        $sender = $user->getName();

        echo $time . '[' . $sender . ']:' . $message;
    }
}
