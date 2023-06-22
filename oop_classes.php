<?php
class Game{

    const BR = '<br/>';

    var $name;
    var $price;
    var $photo;
    var $dir='pix/';

  public  function print_game(){
    /*echo $this-> name.self::BR;
    echo $this-> price.self::BR;
    echo $this-> photo.self::BR;*/
    

        
        echo "<div style= 'float: left: margin-right: 40px;'>";
        echo "<font size= '5px'>{$this->name}</font>".self::BR;
        echo "<img src='{$this->dir}{$this->photo}'>".self::BR;
        echo '$'.$this->price;
        echo "</div>";}


  function set_game($name,$price,$photo){
    $this->name =$name;
    $this->price =$price;
    $this->photo =$photo;
  }
    }


$game1=new Game;
$game1 -> name= "fifa" ;
$game1 -> price= "300";
$game1 -> photo='fifa.jpg';

$game1 -> print_game();

$game2= new Game;
$game2 -> name = "nba";
$game2 -> price= "160";
$game2 -> photo= "nba.jpg";
$game2 -> print_game();

$game3= new Game;
$game3 -> name = "ghost";
$game3 -> price= "140";
$game3 -> photo= "ghost.jpg";
$game3 -> print_game();

$game4= new Game;
$game4 -> name = "assasin";
$game4 -> price= "130";
$game4 -> photo= "assassin.jpg";
$game4 -> print_game();

$game5= new Game;
$game5->set_game("gta","130","gta.jpg");
$game5 -> print_game();
 
$game6= new Game;
$game6-> set_game("car","139","car.jpg");
$game6-> print_game();