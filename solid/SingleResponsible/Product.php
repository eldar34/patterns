<?php
namespace Solid\SingleResponsible;

class Product
{
    private $price;
    private $type;
    private $message;

    public function __construct(AlertMessage $message)
    {
        $this->message = $message;
    }

    public function setPrice($price)
    {
        $this->price = $price;
        $this->message->showMessage('Price installed');
    }

    public function setType($type)
    {
        $this->type = $type;
        $this->message->showMessage('Type installed');
    }
}