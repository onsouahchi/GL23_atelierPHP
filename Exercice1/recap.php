<?php
require_once "../header.php";
$prix=0;
if ($_POST["nb"]>10)
    $prix=0.9* ($_POST["nb"]*4);
else $prix=$_POST["nb"]*4;

$_FILES["cin"]["name"]= uniqid() . ".png";
move_uploaded_file($_FILES["cin"]["tmp_name"],__DIR__.'/upload/'.$_FILES["cin"]["name"]);
?>
</head>
<body>
<div class="bg-black p-2 text-white">Merci de commander sur notre site</div>
<div class="bg-black p-2 text-white" style="--bs-bg-opacity: .5;">
    <h5><?php echo strip_tags($_POST["nom"])." ".strip_tags($_POST["prenom"]);?></h5>
    <p>Vous avez commandez <?php echo $_POST["nb"]?> sandwichs de <?php echo strip_tags($_POST["type"])?></p>
    <p>Votre commande sera livrée à l'adresse <?php echo strip_tags($_POST["adresse"])?></p>
    <p>Le prix total de la commande est <?php echo $prix?> dinars</p>
</div>
</body>
</html>