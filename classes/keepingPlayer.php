<?php

namespace classes;


use Interfaces\playerInterface;

class keepingPlayer  implements playerInterface
{

    public function play()
    {
          echo "Keeping";
    }
}