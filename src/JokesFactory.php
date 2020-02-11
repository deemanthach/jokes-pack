<?php

namespace Deemantha\Jokespack;



class JokesFactory
{
    protected $msg = [
        'abc','lorem ipsum','dolor amet'
    ];

    public function __construct(array $msg = null)
    {
        if($msg){
            $this->msg = $msg;
        }
    }

    public function hello()
    {
        echo "Jokes returns";
    }

    public function getRandomJoke()
    {
        return $this->msg[array_rand($this->msg)];
    }
}