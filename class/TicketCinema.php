<?php


include_once __DIR__.'\ticket.php';
include('phpqrcode/qrlib.php');

class TicketCinema extends Ticket{
    public string $nomFilm;
    public int $salle;
    public string $seance;
    public int $age;
    public int $agemin;

    function __construct( $date, $place, $tarif,$nomFilm, $salle, $seance, $age, $agemin){
    parent::__construct($date, $place, $tarif);
        $this -> date = $date;
        $this -> salle = $salle;
        $this -> seance = $seance;
        $this -> place = $place;
        $this -> tarif = $tarif;
        $this -> nomFilm = $nomFilm;
        $this -> age = $age;
        $this -> agemin =$agemin;
        
    }
    public function displayTicketCinema()
    {
        $QRID = $this-> getID();
        QRcode::png("ID: ".$QRID."   Nom du Film: ".$this ->nomFilm."  Date: ".$this ->getDate(), 'image-qrcode.png');
        
       ?>
       <div>
            <img class="cQR" src="image-qrcode.png"/>
            <p class="cTarif"><?php echo $this ->getTarif() ?></p>
            <p class="cDate"><?php echo $this ->getDate() ?>
            <span class="cSalle"><?php echo $this ->salle ?></span></p>
            <p class="cFilm"><?php echo $this ->nomFilm ?></p>
       </div>
        <p class="cSeance"><?php echo $this ->seance ?>
        <span class="cPlace" style="text-transform:uppercase"><?php echo $this ->getPlace() ?></span></p>
        <img class="cimg" src="public/minus/<?php echo $this ->agemin ?>.png"/>
        <span class="cId"><?php echo $QRID ?></span>
        <span class="cgetId" ><?php echo $this ->getdateID() ?></span>        
       <?php
}}