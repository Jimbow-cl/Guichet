<?php

include_once __DIR__.'\ticket.php';

class TicketTheatre extends Ticket{
    public string $piece;
    public string $hour;
    public string $entract;

    function __construct( $date, $place, $tarif, $piece, $hour, $entract){
    parent::__construct($date, $place, $tarif);
        $this -> date = $date;
        $this -> place = $place;
        $this -> tarif = $tarif;
        $this -> piece = $piece;
        $this -> hour = $hour;
        $this -> entract = $entract;

    }
    public function displayTicketTheatre()
    {
        $QRTID = $this-> getID();
        QRcode::png("ID: ".$QRTID."   Pièce: ".$this ->piece."  Date: ".$this ->getDate(),'image-qrcode.png');

       ?>
    <div>
       <p class="thTitre"  maxlength="10"><?php echo $this ->piece ?></p>
        <p class="thDate"><?php echo $this ->getDate() ?></p>
        <p class="thPlace" style="text-transform:uppercase" ><?php echo $this ->getPlace() ?></p>
        <p class="thTarif"><?php echo $this ->getTarif() ?></p>
        <p class="thHour"><?php echo $this ->hour ?></p>
        <p class="thEntract"><?php echo $this ->entract ?></p>
        <p class="thID"><?php echo $QRTID ?></p>
        <img class="tQR" src="image-qrcode.png"/>

    </div>
    <?php
    }
}   