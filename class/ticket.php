<?php


class Ticket {
    protected string $date;
    protected string $place;
    protected string $tarif;
    protected string $id;
    protected string $dateid;


    function __construct($date, $place, $tarif){
    $this -> date = $date;
    $this -> place =$place;
    $this -> tarif =$tarif;
    }
public function getID(){
    return $this -> id = uniqid();
}
public function getdateID(){
    return $this -> dateid = (date("m-Y-"). (rand(10,99)));
}

public function getTarif(){
    return $this -> tarif;
}
public function getPlace(){
    return $this -> place;
}
public function getDate(){
    return $this -> date;
}
}
