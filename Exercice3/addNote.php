<?php
require "../header.php";

?>

</head>
<body>
<div class="alert alert-warning" role="alert">
    Cliquez <a href="noteList.php" class="alert-link">ici</a> pour voir vos notes.
</div>
<div class="bg-primary p-2 text-white">
<h5>Créer une nouvelle note</h5>
</div>
<div class="bg-primary p-2 text-dark bg-opacity-10">
<form method="post" action="noteList.php" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="titre" class="form-label">Titre</label>
        <input type="text" class="form-control" id="titre" name="titre" required>
    </div>
    <div class="form-floating pt-2 pb-3">
        <label for="contenu">Contenu</label>
        <textarea class="form-control" id="contenu" name="contenu"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Enregistrer Note</button>
</form>

</div>
</body>
</html>
