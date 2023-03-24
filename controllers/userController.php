<?php
$action = $_GET['action'];
switch($action){

    case 'add' :
        include('views/user/ajoutUser.php');
        break;
   

    case 'validerForm' :
        $user= new User();
        
            $user->setNom($_POST['nom']);
            $user->setPrenom($_POST['prenom']);
            $user->setEmail($_POST['email']);
            $user->setPassword($_POST['password']);
           
            $nb=User::add($user);
            $message = "ajouté";
        
        if($nb==1){
            $_SESSION['message']=["success"=>"L'utilisateur a bien été $message"];
        }else{
            $_SESSION['message']=["danger"=>"L'utilisateur a bien été $message"];
        }
        header('location: acceuil.php');
        exit();
        break;
}
?>