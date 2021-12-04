<?php
$header =[
    ['nom' => 'TCHANDA Ervan'],
    ['filiere' => 'Developpeur Web /Dev mobile'],
   ];
  $mon_nom=$header [0];
  $filiere=$header [1];
  
  $information = [
  
    [ 'naissance' => 'Née le 31 janvier 2001'],
    [ 'origine' => 'Originaire de lOuest cameroun'],
    [ 'matrimoniale' => 'Célibataire,0 enfant - Santé RAS'],
  ];
  $naissance = $information[0];
  $origine = $information[1];
  $matrimoniale = $information[2];
  
  $provenance = [
  ['quartier' => 'Résidence à Logpom'],
  ['VillePays' => 'Douala - Cameroun'],
  ['map' => 'Map :1.053276? 45885555'],
  ];
  $quartier = $provenance[0];
  $VillePays = $provenance[1];
  $map = $provenance[2];
  
  $adresse = [
  ['tel' => '(237) 699 899 263'],
  ['reseau' => 'Mobile, Telegram, Whatsapp'],
  ];
  $tel = $adresse[0];
  $reseau = $adresse[1];
  
  $electronique = [
    ['mail' => 'ervanjre@gmail.com'],
    ['lien' => 'Google+, Twitter, Linkedlin, Github'],
  ];
  $mail = $electronique[0];
  $lien = $electronique[1];
  

  //mes domaine d'etude
  $domaine = [ 
    ['DEVF' => 'Développement Front-End'],
    ['formation1' => 'HTML5, SASS, VueJS, Angular, JavaFX, ...'],
    ['DEVB' => 'Développement back-End'],
    ['formation2' => 'NodeJS, Drupal 8, Laravel, Kotlin, JavaEE 7, ...'],
    ['DEVM' => 'Développement mobile'],
    ['formation3' => 'Android Kotlin, IOS Swift, Cordova, Flutter, ...'],
    ['UI' => 'UI / UX Design'],
    ['formation4' => 'Photoshop CC, Adobe XD, Matérial Design, ...'],
    ['BD' => 'Base de données & Big Data'],
    ['formation5' => 'Oracle 11g, PostgreSQL, Hadoop, Talent DI, ...'],
    ['OUTIL' => 'Outils / Environnements'],
    ['formation6' => 'Visual Paradigm, Git, Docker, K8s, Linux, ...'],
 ];
 $DEVF= $domaine[0];
 $formation1 = $domaine[1];
 $DEVB = $domaine[2];
 $formation2 = $domaine[3];
 $DEVM = $domaine[4];
 $formation3 = $domaine[5];
 $UI = $domaine[6];
 $formation4 = $domaine[7];
 $BD = $domaine[8];
 $formation5 = $domaine[9];
 $OUTIL = $domaine[10];
 $formation6= $domaine[11];
  



 //EXPERIENCE 

 $experience = ['Expérience Professionnelle'];
$experience[0];
$expertise = ['Expertise en entreprise'];
$expertise[0];

$Gtitre = [
    ['titre1' => 'Chef des projets technologiques -'],
    ['titre2' => '>Fondateur & DT -'],
    ['titre3' => 'Enseignant -'],
    ['titre4' => 'Dévéloppeur en chef -'],
    ['titre5' => 'Responsable commercial -'],
    ['titre6' => 'stage realisé -'],

];
$titre1 = $Gtitre[0];
$titre2 = $Gtitre[1];
$titre3 = $Gtitre[2];
$titre4 = $Gtitre[3];
$titre5 = $Gtitre[4];
$titre6 = $Gtitre[5];

$Glien = [
    ['lien1' => 'De juillet 2019 à ce jour - http://mdem.cm'],
    ['lien2' => 'De juin 2015 à ce jour - http://chikdev.com'],
    ['lien3' => 'De octobre 2011 à ce jour - http://istdi.com'],
    ['lien4' => 'De Mai 2013 à juin 2015 - http://Khayroual.com'],
    ['lien5' => 'De Décembre 2012 à juin 2013 - http://bao-Sarl.com'],
    ['lien6' => 'De juin 2021 à aôut 2021 - http://creativesarl.com'],

];
$lien1 = $Glien[0];
$lien2 = $Glien[1];
$lien3 = $Glien[2];
$lien4 = $Glien[3];
$lien5 = $Glien[4];
$lien6 = $Glien[5];


$description = [
    ['description1' => ' Chef du projet annuaire -universel.cm de lART'],
    ['description2' => 'Réalisation de plusieurs site web et application mobile'],
    ['description3' => 'Analyse. UML & MERISE" ; "BD/SQL.ORACLE & MySQL ;"Dev. iOS & Android" ; "BI & Big Data Talend DI & Hadoop". 1 , 2 et 4 éme année'],
    ['description4' => 'Réalisation de multiples projets logiciels et web,infographie, ...'],
    ['description5' => 'Définition des stratégies commerciales, Contrôle de qualité, Suivi...'],
    ['description6' => 'maintenace, vente des appariel informatique...'],

];
$description1 = $description[0];
$description2 = $description[1];
$description3 = $description[2];
$description4 = $description[3];
$description5 = $description[4];
$description6 = $description[5];

//point interet et langue
$point_interet = ['point_interet' =>'point interet'];
$point_interet = $point_interet[0];

$langue = ['langue' =>'langue'];
$langue = $langue[0];


//cursus 
$cursus_academique = ['cursus' =>'cursus academique'];
$cursus = $cursus_academique[0];

$classe = [
    ['niveau1' => ' prepa 2 -'],
    ['niveau2' => 'prepa 1 -'],
    ['niveau3' => 'baccalaureat -'],
    ['niveau4' => 'probatoire -'],

];
$niveau1 = $classe[0];
$niveau2 = $classe[1];
$niveau3 = $classe[2];
$niveau4 = $classe[3];
 
?>
<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mon cv </title>
        <link rel="stylesheet" href="style.css">
     <!-- feuille de style bootstrap -->
     <link rel="stylesheet" href="bootstrap/dist/css/bootstrap..css">
     <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min..css">
     <link rel="stylesheet" href="bootstrap/dist/css/bootstrap-theme..css">
     <link rel="stylesheet" href="bootstrap/dist/css/bootstrap-theme.min..css">
    
</head>
<body>
    <section>
        
    <?php 
      require 'partie_gauche1.php';
      ?>

<?php 
      require 'partie_gauche2.php';
      ?>

                    
<?php 
      require 'partie_gauche3.php';
      ?>

                    
<?php 
      require 'partie_droite1.php';
      ?>

                       
                       
                       
                       
<?php 
      require 'partie_droite2.php';
      ?>




               <!--partie du cursus academique-->
                                           
 <?php 
      require 'partie_droite3.php';
      ?>

    </section>
</body>
</html> 