<?php

if (isset($_POST["submit"])) {
    if (!isset($_COOKIE["vote"])) {
        setcookie("vote", $_POST["inlineRadioOptions"], time() + 120);
    } else {
        echo '<div class="alert alert-danger" role="alert">
                Vous avez déja choisi '.$_COOKIE["vote"].'</div>';
    }
}

require "../header.php";
?>
</head>
<body>
<h1>Evaluer ce cours</h1>
<form name="rating" method="post">
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="BON">
        <label class="form-check-label" for="inlineRadio1">BON</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="MOYEN">
        <label class="form-check-label" for="inlineRadio2">MOYEN</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="MAUVAIS">
        <label class="form-check-label" for="inlineRadio3">MAUVAIS</label>
    </div>
    <div>
        <button type="submit" name="submit" class="btn btn-primary">confirmer</button>
    </div>
</form>

</body>
</html>