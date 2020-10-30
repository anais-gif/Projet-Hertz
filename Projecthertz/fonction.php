<?php
function bdd(){
    try {
        $db = new PDO('mysql:host=localhost;dbname=voiture', 'root', '');
    return $db;
        }
    catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage(). "<br/>";
        die();
    }
}
function afficher_client(){
    
$pdoStat =$db->prepare('SELECT * FROM client');
$executeIsOk=$pdoStat->execute();
$client=$pdoStat->fetchAll();

}
function afficher_liste(){

    $pdoStat =$db->prepare('SELECT * FROM vehicule');
$executeIsOk=$pdoStat->execute();
$vehicule=$pdoStat->fetchAll();

}

function ajouter(){

    $ajouter=bdd()->prepare('INSERT INTO vehicule (modele_voiture,prix_voiture,annee_voiture) VALUES (:modele, :prix, :annee)');
    $ajouter->bindParam(':modele', $_GET['modele'], 
    PDO::PARAM_STR);
    $ajouter->bindParam(':prix', $_GET['prix'], 
    PDO::PARAM_INT);
    $ajouter->bindParam(':annee', $_GET['annee'], 
    PDO::PARAM_INT);
    $plus= $ajouter->execute();

        if($plus){
            echo 'votre enregistrement a été ajouté';
        } else {
            echo 'Une erreur est survenue';
        }
}

function ajouter_client(){

    $ajouter = bdd()->prepare('INSERT INTO client (adresse_clients,nom_clients,prenom_clients,ville_clients,cp_cliens) VALUES (:adresse, :nom, :prenom, :ville, :cp)');
    $ajouter->bindParam(':adresse', $_GET['adresse'], 
    PDO::PARAM_STR);
    $ajouter->bindParam(':nom', $_GET['nom'], 
    PDO::PARAM_STR);
    $ajouter->bindParam(':prenom', $_GET['prenom'], 
    PDO::PARAM_STR);
    $ajouter->bindParam(':ville', $_GET['ville'], 
    PDO::PARAM_STR);
    $ajouter->bindParam(':cp', $_GET['cp'], 
    PDO::PARAM_INT);
    $plus= $ajouter->execute();

        if($plus){
            echo 'votre enregistrement a été ajouté';
        } else {
            echo 'Une erreur est survenue';
        }
}

function modifier(){

    $modifier =  bdd()->prepare('UPDATE vehicule SET modele_voiture = :modele,prix_voiture=:prix,annee_voiture=:annee WHERE id_voiture =:id');
        $modifier->bindParam(':id', $_GET['id'], PDO::PARAM_STR);
        $modifier->bindParam(':modele', $_GET['modele'], PDO::PARAM_STR);
        $modifier->bindParam(':prix', $_GET['prix'], PDO::PARAM_STR);        
        $modifier->bindParam(':annee', $_GET['annee'], PDO::PARAM_STR);      


        
        $modifier = $modifier->execute();
      
            if($modifier){
                echo 'votre enregistrement a bien été modifié';
                
            
            } else {
                echo 'Veuillez recommencer svp, une erreur est survenue';
            }
}

function supprimer(){
    $supprimer =  bdd()->prepare('DELETE FROM vehicule WHERE id_voiture = :id');
        $supprimer->bindParam(':id', $_GET['id'],PDO::PARAM_STR);


        $supprimer = $supprimer->execute();
            if($supprimer){
                echo 'votre enregistrement a bien été supprimé';
                
            
            } else {
                echo 'Veuillez recommencer svp, une erreur est survenue';
            }
}

?>