<!doctype html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">    <title>Procenten Rekenen</title>
    <link rel="stylesheet" href="style.css">
</head>
<html lang="en">
<body>

    <?php 
    include "../header.html";
    require "../db/dbconnection.class.php";
    $db = new dbconnection();

    $sql = "SELECT * FROM sommen";

    $query = $db->prepare($sql);

    $query->execute();

    $recset = $query -> fetchAll(PDO::FETCH_ASSOC);

    $chosenindex = random_int(0, 10)
    ?>

<div class="container">

            <div class="row">
                <div class="col-8">
                    <h5>Inleiding</h5>
                    <div id="som">
                        <?= $recset[0]["Inleiding"]; ?>
                    </div>
                    <h5>Vraag</h5>
                    <div id="vraag">
                        <?= $recset[0]["Vraag"]; ?>
                    </div>
                </div>
                <div class="col-4">
                    <div class="col-4">
                        <img src="../img/<?= $recset[0]["afbeelding"] ?>" style="width:100%; height:100%">
                    </div>
                </div>
                    <div class="row">
                        <div class="col-3">
                            <div id="antwoord">
                                <input id="antwoord" class="form-control" is-invalid>
                            </div>
                        </div>
                        <div class="col-3">

                        </div>
                    </div>
                </div>

            </div>


    <div class="row" style="margin: 0 auto">
        <div class="col">
            <div class="card" style="margin-top: 145px;">
                            <div class="card-header">Oud</div>
                            <p>Denk ook aan:</p>
                        <ol>
                            <li>Zonder BTW</li>
                            <li>Zonder Korting</li>
                        </ol>
                            <div class="card-footer">
                                <input id="waardevoor" class="form-control">
                            </div>
            </div>
        </div>
        <div class="col">
            <select id="soort" style="width: 100%;" aria-label="Default select example">
                <option selected>Kies *</option>
                <option value="1">van</option>
                <option value="2">toename</option>
                <option value="3">afname</option>
            </select>
            <div class="input-group" style="margin-top: 5%; margin-bottom: 5%;">
                <div class="input-group-prepend">
                    <span class="input-group-text">Percentage</span>
                </div>
                <input type="text" id="percentage" class="form-control" aria-label="">
                <div class="input-group-append">
                    <span class="input-group-text">%</span>
                </div>
            </div>
            <div style="margin-top: 5%; margin-bottom: 5%;" class="input-group input-group-sm">
                <div class="input-group-prepend">
                    <span class="input-group-text">Vermenigvuldigingsfactor: x</span>
                </div>
                <input id="keerfactor" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" disabled>
            </div>
            <div>
                <img src="arrow.webp" style="width: 75%; height: 25%;">
                <img src="arrow.webp" style="width: 75%; height: 25%; rotate:180deg">
            </div>
            <div style="margin-top: 5%; margin-bottom: 5%;" class="input-group input-group-sm">
                <div class="input-group-prepend">
                    <span class="input-group-text">Delingsfactor: /</span>
                </div>
                <input id="deelfactor" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" disabled>
            </div>
            <button class="btn btn-success" id="losop" onclick="Solve()" style="width: 100%; margin-top: 5%; margin-bottom: 5%; align-self: flex-start;" disabled>Los Op</button>
        </div>
        <div class="col">
            <div class="card" style="margin-top: 145px;">
                <div class="card-header">Nieuw</div>
                <p>Denk ook aan:</p>
                <ol>
                    <li>Zonder BTW</li>
                    <li>Zonder Korting</li>
                </ol>
                <div class="card-footer">
                    <input id="waardena" class="form-control" is-invalid>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="script.js" type="text/javascript"></script>
</body>
</html>