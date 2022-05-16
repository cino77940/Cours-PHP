<?php 
    require_once('connect.php');
    $message = null;

    if(isset($_POST['submit'])){
    
        if(!empty($_POST['pre_client']) && !empty($_POST['nom_client']) && !empty($_POST['num_client'])){
            $prenom = $_POST['pre_client'];
            $nom = $_POST['nom_client'];
            $num = $_POST['num_client'];
            $adresse=$_POST ['adr_client'];
            $ddr=$_POST['ddr_client'];
            $nombre=$_POST['nbr_client'];

    
        
            $sql = "SELECT pre_client FROM clients WHERE num_client=?";
            $prepare = mysqli_prepare($bdd, $sql);
            mysqli_stmt_bind_param($prepare, "i", $num);
            mysqli_stmt_execute($prepare);
            mysqli_stmt_store_result($prepare);   

            if(mysqli_stmt_num_rows($prepare) > 0){
                $message = "Le client existe déjà";
            } else {
                $sql = "INSERT INTO clients(pre_client, nom_client, num_client, adr_client,nbr_client,ddr_client) VALUES(?, ?, ?, ?, ?, ?)";
                $prepare = mysqli_prepare($bdd, $sql);
                mysqli_stmt_bind_param($prepare, "ssisii", $prenom, $nom, $num, $adresse, $nombre, $ddr);

                if(mysqli_stmt_execute($prepare) == true){
                    $message = "Le client a été enregistré";
                } else {
                    $message = "Le client n'a pas été enregistré";
                }
            }
        } else {
            $message = "Vous devez renseigner toutes les données";
        }
    }


    $sql = "SELECT * FROM residences";
    $all_categories = mysqli_query($bdd,$sql);
    $message2 = null;
    
    if(isset($_POST['residences'])  ){
        $residences = $_POST['nom_res'];
        $adresse2 = $_POST['adr_res'];
        
        $message2 = "";
    }
    $sql = "SELECT nom_res, adr_res FROM residences WHERE id_res=?";
    
    ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création de données utilisateur</title>
</head>
<body>
    <h1>GESTIONNAIRE RESIDENCES</h1>
    <form action="#" method="post">
        <input type="text" name="pre_client" placeholder="Prénom">
        <input type="text" name="nom_client" placeholder="Nom">
        <input type="number" name="num_client" placeholder="Numéro de téléphone">
        <input type="text" name="adr_client" placeholder="Adresse">
        <input type="number" name="ddr_client" placeholder="Nombre de nuit">
        <input type="number" name="nbr_client" placeholder="Nombre de personnes">

        <select name="residences">
<?php

while ($residences = mysqli_fetch_array(
    $all_categories,MYSQLI_ASSOC)):; 
?>
<option value="<?php echo $residences["id_res"];

?>">
<?php echo $residences["nom_res"] ;

?>
</option>
<?php 
endwhile; 

?>
        </select>

        <input type="submit" name="submit" value="Reserver">
    </form>

    <p><?php echo $message; ?></p>
    <!-- <p><a href="read.php">Afficher tous les utilisateurs</a></p> -->





</body>
</html>