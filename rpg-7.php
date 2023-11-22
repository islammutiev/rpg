<?php

class Character{
    protected static int $health = 100;
    protected static int $mana = 10;
    protected static int $level = 1;

}

class Player extends Character{

    public function __construct(){
        $this->health = parent::$health;
        $this->mana = parent::$mana;
        $this->level = parent::$level;
    }

    public function getPlayerStats(){
        echo 'player hp = ' . $this->health * parent::$level . '</br>' .
        'player mana = ' . $this->mana * parent::$level. '</br>' .
        'player level = ' . $this->level . '</br>';
    }

    public function playerAction(string $action){

        switch ($action){
        case 'farming':
            parent::$level++;
            return parent::$level;

        case 'hunting':
            parent::$level++;
            return parent::$level;

        case 'trading':
            parent::$level++;
            return parent::$level;

        case 'fishing':
            parent::$level++;
            return parent::$level;

        // case 'bossfight':
            
        default:
            echo 'This is not an action!';
        }
    }
}

class Boss extends Character{

    public function __construct(){
        $this->health = parent::$health;
        $this->mana = parent::$mana;
    }

    public function getBossStats(){
        echo 'boss hp = ' . $this->health * parent::$level * 10 . '</br>' .
        'boss mana = ' . $this->mana * parent::$level * 10 . '</br>';
    }
}

$alexander = new Player();

$king = new Boss();

$alexander->getPlayerStats();

$king->getBossStats();

$alexander->playerAction('farming');
$alexander->playerAction('hunting');
$alexander->playerAction('trading');
$alexander->playerAction('fishing');

$alexander->getPlayerStats();

$king->getBossStats();

