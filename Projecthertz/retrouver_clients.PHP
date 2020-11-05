 <?php 
  $db = new PDO('mysql:host=localhost;dbname=voiture', 'root', '');

  
  $lister = $db->prepare('SELECT * FROM client
     INNER JOIN louer ON client.id = louer.id_client
     INNER JOIN vehicule ON louer.id_vehicule= voiture.id 
     WHERE client.id = 1');
  
  
    $lister = $lister->fetchAll(PDO::FETCH_ASSOC);
   
    foreach($lister as $info){
        echo "<br/>".$info['prenom']." ".$info['nom_client']." a loué ".$info['nom_film']." du ".$info['date_dbt_location']." au ".$info['date_fin_location'];
    }
?>