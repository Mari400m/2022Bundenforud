<?php
require "settings/init.php";

if(!empty($_POST["data"])){
    $data = $_POST["data"];

    $sql = "INSERT INTO produkter (prodNavn, prodbeskrivelse, prodPris) VALUES (:prodNavn, :prodbeskrivelse, :prodPris)";
    $bind = ("prodNavn"=> $data["prodNavn"]. ":prodbeskrivelse" => $data["prodbeskrivelse"]. ":prodPris" => $data["prodPris"]);

    $db->sql(sql, bind, false);

    echo "Produktet er nu indsat. <a href='insert.php'>Indsæt et produkt mere</a>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Indsæt til database</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tiny.cloud/1/279c1minai7yqj1ycnsdjwhvvxau53msk07eitu6gn000tnw/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

</head>

<body>

<form method="post" action="insert.php">
    <div class="row">
        <div class="col-12 col-md-6">
            <div class="form-group">
                <label for="prodNavn">Produkt navn</label>
                <input class="form-control" type="text" name="data[prodNavn]" id="prodNavn" placeholder="Produkt navn" value="">
            </div>

        </div>
        <div class="col-12 col-md-6">
            <div class="form-group">
                <label for="prodPris">Produkt pris</label>
                <input class="form-control" type="number" step="0.1" name="data[prodPris]" id="prodPris" placeholder="Produkt pris" value="">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="prodbeskrivelse">Produkt beskrivelse</label>
                <textarea class="form-control" name="data[prodbeskrivelse]" id="prodbeskrivelse"></textarea>
            </div>
        </div>
        <div class="co-12 col-md-6 offset-md-6">
            <button class="form-control btn btn-primary" type="submit" id="btnSubmit">Opret produkt</button>
        </div>
    </div>

</form>



<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script>
    tinymce.init({
        selector: 'textarea',

    });
</script>

</body>
</html>
