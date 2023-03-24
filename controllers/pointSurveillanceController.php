<?php
$action = $_GET['action'];
switch($action){
    case 'list' :
        // traitement du formulaire de recherche
        $nom="";
        $zoneSel="Tous";
        if(!empty($_POST['nom']) || !empty($_POST['zone'])){
            $nom= $_POST['nom'];
            $zoneSel= $_POST['zone'];
        }
        $lesZones=Zone::findAll();
        $getPS=PointSurveillance::findAll($nom, $zoneSel);
        include('views/point_surveillance/pointSurveillance.php');
        break;
    case 'add' :
        $mode="Ajouter";
        $lesZones=Zone::findAll();
        include('views/point_surveillance/ajoutSurveillance.php');
        break;
    case 'update' :
        $mode="Modifier";
        $lesZones = Zone::findAll();
        $ps = PointSurveillance::findById($_GET['id']);
        include('views/point_surveillance/ajoutSurveillance.php');
        break;
    case 'delete' :
        $nb=PointSurveillance::delete($_GET['id']);
        if($nb==1){
            $_SESSION['message']=["success"=>"Le point de surveillance a bien été supprimé"];
        }else{
            $_SESSION['message']=["danger"=>"Le point de surveillance n'a pas été supprimé"];
        }
        header('location: accueil.php?url=pointSurveillance&action=list');
        exit();
        break;

    case 'validerForm' :
        $ps= new PointSurveillance();
        if(empty($_POST['idPs'])){ // cas d'une création
            $ps->setNomPs($_POST['nomPs']);
            $ps->setIdZone($_POST['idZone']);
            $nb=PointSurveillance::add($ps);
            $message = "ajouté";
        }else{ //  cas d'une modif
            $ps->setIdPs($_POST['idPs']);
            $ps->setNomPs($_POST['nomPs']);
            $ps->setIdZone($_POST['idZone']);
            $nb=PointSurveillance::update($ps);
            $message = "modifié";
        }
        if($nb==1){
            $_SESSION['message']=["success"=>"Le point de surveillance a bien été $message"];
        }else{
            $_SESSION['message']=["danger"=>"Le point de surveillance a bien été $message"];
        }
        header('location: accueil.php?url=pointSurveillance&action=list');
        exit();
        break;
}
