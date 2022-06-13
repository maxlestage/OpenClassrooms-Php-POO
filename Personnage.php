<?php

class Personnage
{

    private $name;
    private $age;
    public  $life = 78;
    private $atk;

    public function __construct($name, $age, $atk)
    {
        $this->name = $name;
        $this->age = $age;
        $this->atk = $atk;
    }




    public function regenerate($life = null)
    {

        if ($life == null) {
            $life = $this->life;
            echo "j'ai " . $life . " points de vie!";
            return $life;
        } else {
            $life = $this->life = $this->life + $life;
            echo "j'ai " . $life . " points de vie!";
            return  $life;
        }
    }


    public function vie($life)
    {
        if ($life <= 0) {
            return false;
        } else {
            echo "Tu es toujours en vie \n";
            return true;
        }
    }
}
