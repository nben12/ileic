<?php
include 'conexion.php';
session_start();
$keyy = $_SESSION["favcolor"];
$stmt ="SELECT * FROM user WHERE id =\"$keyy\" ";
$result = mysqli_query($conn, $stmt);

$row = mysqli_fetch_assoc($result);
$usty=$row["nom"];
$ust1=$row["Prenom"];
$ust2=$row["Email"];
$ust3=$row["C.I.N"];
$ust4=$row["Date de nisssance"];
$ust5=$row["Class"];
$ust6=$row["N° telephone"];
$ust7=$row["Centre de formation"];
 

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style/std.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
        <link rel="stylesheet" type="text/css" href="style/lightslider.css"/>
        <link rel="preconnect" href="https://fonts.gstatic.com">
       <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    </head>
    <body>
    
    <nav class="navstd">
        
  <div id="fir">
    <a href=""><img src="images/ileic.png" alt=""></a>
  </div>
  <div id="sec">
  <h1 style="color:white;">  <?php echo $usty ; ?> </h1>
  </div>
</nav>
<div class="all">
<div class="main-muni">
<div onclick="myFunction()" id="btn1" class="da-co">
Accueillir
    </div>
    <div onclick="myFunction1()" class="da-co">
        Résultats
    </div>
    <div onclick="myFunction2()" class="da-co">
        Emploit
    </div>
    <div onclick="myFunction3()" class="da-co">
        cours
    </div>
    <div onclick="myFunction4()" class="da-co">
        convocation
    </div>
    <div onclick="myFunction5()"  class="da-co">
        statu
    </div>
    <div id="wdt" class="da-co">
     <a href="index.php">   Deconnecter</a>
    </div>

</div>
<div id="per-in" class="affch">
    <div class="bot-i">
<label class="per-in">NOM :</label><label><?php echo $usty ; ?></label><br>
<label class="per-in">Prenom :</label><label><?php echo $ust1 ; ?></label><br>
<label class="per-in">C.I.N :</label><label><?php echo $ust3 ; ?></label><br>
<label class="per-in">Date de nisssance :</label><label><?php echo $ust4 ; ?></label><br>
<label class="per-in">Email :</label><label><?php echo $ust2 ; ?></label><br>
<label class="per-in">Class :</label><label><?php echo $ust5 ; ?></label><br>
<label class="per-in">N° telephone :</label><label><?php echo $ust6 ; ?></label><br>
<label class="per-in">Centre de formation :</label><label><?php echo $ust7 ; ?></label><br>

</div>

</div>
<div id="rusl" class="affch">


    
    <ul>
        <li>c</li>
        <li>algo</li>
        <li>francai</li>
        <li>log</li>
        <li>instalation</li>
        <li>anglais</li>
    </ul>
    <?php 
    $stm ="SELECT * FROM results WHERE usercin ='j34256'";
    $resul = mysqli_query($conn, $stm);
   
    while($ro = $resul->fetch_assoc()) {

    $C=$ro["C"]; 
    $algo=$ro["algo"]; 
    $englais=$ro["englais"]; 
    $francai=$ro["francai"]; 
    $logiciel=$ro["logiciel"]; 
    $instalation=$ro["instalation"];
    ?>
    <ul>
        <li><?php echo $C ; ?></li>
        <li><?php echo $algo ; ?></li>
        <li><?php echo $englais ; ?></li>
        <li><?php echo $francai ; ?></li>
        <li><?php echo $logiciel ; ?></li>
        <li><?php echo $instalation ; ?></li>
    </ul>
    <?php } ?>
</div>

<div id="emp" class="affch">
    

</div>
<div id="cour" class="affch">
    

</div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</body>
           </html>