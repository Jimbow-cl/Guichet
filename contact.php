<?php

class Contact
{
    public string $name;
    public string $firstname;
    public string $email;
    public int $tel;
    public string $mess;


    function __construct($name,$firstname,$email,$tel,$mess){
        $this -> name = $name;
        $this -> firstname = $firstname;
        $this -> email = $email;
        $this -> tel = $tel;
        $this -> mess = $mess;

    }
    public function displayForm()
    {
       ?>
       <div>
            <p>Votre Formulaire à bien été envoyé.
                L'assistance technique prendra contact avec vous dans un court délai.
            </p>
            <?php
    }
    public function setPDO(){
        $dbh = new PDO("mysql:dbname=form;host=127.0.0.1", "root", "root");

        $query = $dbh->prepare("INSERT INTO `form` (nom, prenom, email, tel, mess) VALUES (:nazme, :firstname,:email,:tel,:mess)");
        $query -> execute(array(":nazme"=>$this -> name, ":firstname"=>$this -> firstname,":email"=>$this -> email,":tel"=>$this ->tel,":mess"=> $this -> mess ));
    }
}