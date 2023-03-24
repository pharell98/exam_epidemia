<?php
$action=$_GET['action'];
switch($action){
    case 'list':
        $getPays = Pays::findAll();
        include('views/pays/listPays.php');
        break;
    case 'add' :
        $mode="Ajouter";
        include('views/pays/ajoutPays.php');
        break;
    case 'update' :
        $mode="Modifier";
        $lePays=Pays::findById($_GET['id']);
        include('views/pays/ajoutPays.php');
        break;
    case 'delete' :
        $idPays = $_GET['id'];
        $nb=Pays::delete($idPays);
        if($nb==1){
            $_SESSION['message']=["success"=>"Le pays a bien été supprimé"];
        }else{
            $_SESSION['message']=["danger"=>"Le pays n'a pas été supprimé"];
        }
        header('location: accueil.php?url=pays&action=list');
        exit();
        break;

    case 'valideForm' :
        $pays= new Pays();
        if(empty($_POST['idP'])){ // cas d'une création
            $pays->setNomP($_POST['nomP']);
            $pays->setPopulation($_POST['population']);
            $nb=Pays::add($pays);
            $message = "ajouté";
        }else{ //  cas d'une modif
            $pays->setIdP($_POST['idP']);
            $pays->setNomP($_POST['nomP']);
            $pays->setPopulation($_POST['population']);
            $nb=Pays::update($pays);
            $message = "modifié";
        }
        if($nb==1){
            $_SESSION['message']=["success"=>"Le pays a bien été $message"];
        }else{
            $_SESSION['message']=["danger"=>"Le pays n'a pas été $message"];
        }
        header('location: accueil.php?url=pays&action=list');
        exit();
        break;
}
