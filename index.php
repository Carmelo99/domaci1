<?php

require "kon_db.php";

session_start();
if (isset($_POST['ime']) && isset($_POST['sifra'])) {
    $korime= $_POST['ime'];
    $sif= $_POST['sifra'];


$kveri = "SELECT * FROM korisnik WHERE korisnicko_ime='$korime' AND sifra='$sif'";

$rezultat = mysqli_query($kon, $kveri);

if($rezultat->num_rows==1){
    $row = mysqli_fetch_assoc($rezultat);
        $_SESSION['korisnik_id']=$row['id'];
      
    header('Location: novi_zahtev.php');
    exit();
    
}else{
    $poruka="Pogresno ime/sifra!";
    echo "<script>alert('$poruka');</script>";
   
}

}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prijava korisnika</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <form method="post">
        <h2>PRIJAVI SE NA SISTEM</h2>
    <label for="ime">Korisncko ime</label>
    <input type="text" name="ime" id="ime">

    <label for="sifra">Sifra</label>
    <input type="password" name="sifra" id="sifra">

    <button type="submit">Uloguj se</button>
    </form>
</body>
</html>