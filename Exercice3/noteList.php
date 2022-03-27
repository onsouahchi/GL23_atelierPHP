<?php
require "../header.php";
session_start();

if (isset($_POST["titre"])) {
    $contenu = strip_tags($_POST["contenu"]) ?? "";
    $_SESSION[strip_tags($_POST["titre"])]=$contenu.date("Y-m-d H:i:s");
    header("Refresh:0");
}

?>
</head>
<body>
<div class="alert alert-warning" role="alert">
    Cliquez <a href="addNote.php" class="alert-link">ici</a> pour créer ou modifier une note.
</div>
<div class="bg-primary p-2 text-white">
    <h5>Notes enregistrées</h5></div>
<div class="bg-primary p-2 text-dark bg-opacity-10">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php
            foreach ($_SESSION as $key => $value){
                $contenu=substr($value,0,-19);
                $date= substr($value,-19);

            echo "<div class='col'>
                <div class='card'>
                <div class='card-body'>
                    <h5 class='card-title'>". $key. " </h5>
      <p class='card-text'>" . $contenu . "</p>
      <p class='card-text'><small class='text-muted'>Modifiée le " . $date . "</small></p>
    </div>
    </div>
  </div>";
        }

        ?>
    </div>
</div>

</body>
</html>

