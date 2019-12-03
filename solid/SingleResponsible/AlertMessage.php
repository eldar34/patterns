<?php

namespace Solid\SingleResponsible;


class AlertMessage implements \Solid\OpenClosed\AMessage
{
    public function showMessage($message){
        echo $message;
    }
}