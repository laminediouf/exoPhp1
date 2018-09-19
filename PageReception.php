<?php
/*
if (isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['mesage']))
{
    $prenom = $_POST['prenom'];
    $nom=$_POST['nom'];
    $email=$_POST['email'];
    $mesage=$_POST['mesage'];

    echo $prenom.'  '.$nom.'  '.$email.'  '.$mesage;
}
*/
if (isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['mesage']))
{
    $prenom = $_POST['prenom'];
    $nom=$_POST['nom'];
    $email=$_POST['email'];
    $message=$_POST['mesage'];

    $recepteur="alamineahad28@gmail.com";
    $objet="message";
    $entete = 'Content-type: text/html; charset=iso-8859-1' . "\n";

    if(mail($recepteur,$objet,$message,$entete)){
        echo '<h1> Message envoyer </h1>';
    }
}
