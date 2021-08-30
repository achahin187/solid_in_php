<?php

namespace classes;



class team
{

 private $playersList;
    public function __construct(Array $players)
    {
            $this->playersList = $players;
    }


    public function start(){

        echo "Start Team playing";
        echo "\n";

        foreach ($this->playersList as $player)
        {
            $player->play();
        }
    }
 

}



