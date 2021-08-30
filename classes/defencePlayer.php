<?php

namespace classes;


use Interfaces\playerInterface;

class defencePlayer  implements playerInterface
{

    public function play()
    {
          echo "Defence";
    }
}