<?php 
if($_POST !=null){
    $db= new App\Database('post');
    $nom=$_POST['nom'];
    $email=$_POST['email'];
    $prenom=$_POST['prenom'];

    $datas=$db->query('INSERT INTO post(prenom, nom, mail) VALUES($prenom, $nom, $email)');
  /*   $datas->bindParam(':prenom', $_POST['prenom']);
    $datas->bindParam(':nom', $_POST['nom']);
    $datas->bindParam(':email',$_POST['email']);
    $datas->execute(); */
}



?>

<form action="../view/pages/single.php" method='post'>
    <input type="text"  name='nom' placeholder=' Votre nom' value="nom">
    <input type="text" name="prenom" placeholder=" Votre prenom" value="prenom" >
    <input type="text" name="email" placeholder="Votre email" value="email">
    <input type="submit" value="poster">

</form>

