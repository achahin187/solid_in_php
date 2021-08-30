<?php

namespace classes;

use Interfaces\playerInterface;



class attackPlayer  implements playerInterface
{

    public function play()
    {
          echo "attack";
    }
}