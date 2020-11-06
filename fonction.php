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
    return $db;
}
function afficher_client(){
    
$pdoStat =bdd()->prepare('SELECT * FROM client');
$executeIsOk=$pdoStat->execute();
$client=$pdoStat->fetchAll();

}
function afficher_liste(){

    $pdoStat =bdd()->prepare('SELECT * FROM vehicule');
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

    $ajouter_client = bdd()->prepare('INSERT INTO client (adresse_clients,nom_clients,prenom_clients,ville_clients,cp_cliens,pseudo,mdp) VALUES (:adresse, :nom, :prenom, :ville, :cp ,:pseudo ,:mdp)');
    $ajouter_client->bindParam(':adresse', $_GET['adresse'], 
    PDO::PARAM_STR);
    $ajouter_client->bindParam(':nom', $_GET['nom'], 
    PDO::PARAM_STR);
    $ajouter_client->bindParam(':prenom', $_GET['prenom'], 
    PDO::PARAM_STR);
    $ajouter_client->bindParam(':ville', $_GET['ville'], 
    PDO::PARAM_STR);
    $ajouter_client->bindParam(':cp', $_GET['cp'], 
    PDO::PARAM_INT);
    $ajouter_client->bindParam(':pseudo', $_GET['pseudo'], 
    PDO::PARAM_STR);
    $ajouter_client->bindParam(':mdp', $_GET['mdp'], 
    PDO::PARAM_STR);
    $plus_client= $ajouter_client->execute();

        if($plus_client){
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

function supprimer($idvoiture){
    $supprimer =  bdd()->prepare('DELETE FROM vehicule WHERE id_voiture=:id');
        $supprimer->bindParam(':id', $idvoiture,PDO::PARAM_INT);


        $supprimer = $supprimer->execute();
            if($supprimer){
                echo 'votre enregistrement a bien été supprimé';
                
                $filename='Admin.php#Tatable';
                if (!headers_sent())
                header('Location: '.$filename);
                else {
                echo '<script type="text/javascript">';
                echo 'window.location.href="'.$filename.'";';
                echo '</script>';
                echo '<noscript>';
                echo '<meta http-equiv="refresh" content="0;url='.$filename.'" />';
                echo '</noscript>';
                }
                
            
            } else {
                echo 'Veuillez recommencer svp, une erreur est survenue';
            }
}

function modifier_louer(){

    $modifier_louer =  bdd()->prepare('UPDATE louer SET id_cliens=:id_cliens, id_voiture=:id_voiture, 
    date_de_location=:date_de_location, date_fin_de_location=:date_fin_de_location, disponible=:disponible WHERE id=:id');
    $modifier_louer->bindParam(':id', $_GET['id'], PDO::PARAM_INT); 
    $modifier_louer->bindParam(':id_cliens', $_GET['id_cliens'], PDO::PARAM_INT);
    $modifier_louer->bindParam(':id_voiture', $_GET['id_voiture'], PDO::PARAM_INT);
    $modifier_louer->bindParam(':date_de_location', $_GET['date_de_location'],PDO::PARAM_STR);
    $modifier_louer->bindParam(':date_fin_de_location', $_GET['date_fin_de_location'],PDO::PARAM_STR);
    $modifier_louer->bindParam(':disponible', $_GET['disponible'], PDO::PARAM_INT);
    $plus_modifier=$modifier_louer->execute();
        if($plus_modifier){
            echo 'votre enregistrement a été ajouté';
        } else {
            echo 'Une erreur est survenue';
        }
}

function historique(){
   
    $nom_cliens = $_GET['nom_clients'];
    $prenom_clients = $_GET['prenom_clients'];
    $client = $_GET['id_cliens'];

    $recup= bdd()->prepare('SELECT client.id_cliens, client.nom_clients, prenom_clients, modele_voiture, date_de_location, 
    date_fin_de_location FROM client INNER JOIN louer ON client.id_cliens = louer.id_cliens INNER JOIN vehicule ON 
    louer.id_voiture = vehicule.id_voiture WHERE client.id_cliens = :client');
    $recup->bindParam(':client', $client);
    $recup->execute();
    
    
    while($donnees = $recup->fetch())
    {
    echo '</td><td>'.$donnees['modele_voiture'].'</td><td>'.$donnees['date_de_location'].'</td><td>'.$donnees['date_fin_de_location'].'</td></tr>';
    }{
    echo'</tbody></table></div>';
    }
}


                                                        // AJOUTER LOCATION//
function ajouter_louer_voiture(){
    $ajouter_louer =  bdd()->prepare('INSERT INTO louer (id_cliens,id_voiture,date_de_location,date_fin_de_location,disponible) VALUES ( :cliens, :modele, :date_de_location, :date_fin_de_location,:disponible)');
    $ajouter_louer->bindParam(':cliens', $_GET['cliens'], PDO::PARAM_INT);
    $ajouter_louer->bindParam(':modele', $_GET['modele'], PDO::PARAM_INT);
    $ajouter_louer->bindParam(':date_de_location', $_GET['date_de_location'], PDO::PARAM_STR);
    $ajouter_louer->bindParam(':date_fin_de_location', $_GET['date_fin_de_location'], PDO::PARAM_STR);
    $ajouter_louer->bindParam(':disponible', $_GET['disponible'], PDO::PARAM_INT);
    $plus_louer=$ajouter_louer->execute();
        if($plus_louer){
            echo 'votre enregistrement a été ajouté';
        } else {
            echo 'Une erreur est survenue';
        }
}
?>

