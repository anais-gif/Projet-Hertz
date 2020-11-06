 <?php 
   $db  = new PDO('mysql:host=localhost;dbname=voiture', 'root', '');

function historique(){
    if(isset($_GET['action']) && $_GET['action']=="historique"){
    $nom_cliens = $_GET['nom'];
    $prenom_clients = $_GET['prenom'];
    $client = $_GET['id_cliens'];

    $recup= $db->prepare('SELECT client.id_cliens, client.nom_clients, prenom_clients, modele_voiture, date_de_location, date_fin_de_location FROM client INNER JOIN louer ON client.id_cliens = louer.id_cliens INNER JOIN vehicule ON louer.id_voiture = vehicule.id_voiture WHERE client.id_cliens = :client');
    $recup->bindParam(':client', $client);
    $recup->execute();
    
    
    while($donnees = $recup->fetch())
    {
    echo '</td><td>'.$donnees['modele_voiture'].'</td><td>'.$donnees['date_de_location'].'</td><td>'.$donnees['date_fin_de_location'].'</td></tr>';
    }
    echo'</tbody></table></div>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method='get'>
    <input type='text' name='nom' >
    <input type='text' name='prenom' >
    <input type='text' name='id_cliens' >
    <button type='submit' name='action' value='historique'>historique</button><div><table>
</form>
</body>
</html>
