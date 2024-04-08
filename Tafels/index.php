<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Tafelapp</title>
</head>

<body>
    <!-- Include header -->
    <?php 
    include "../header.html"
    ?>
    <!-- Website Contents -->

        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <form class="row g-3 mb-3">
                    <div class="col-4">
                        <label for="inputTafelVan" class="form-label">Welke tafel?</label>
                        <input type="number" class="form-control" id="inputTafelVan">
                    </div>
                    <div class="col-4">
                        <label for="inputTafelLengte" class="form-label">Lengte tafel</label>
                        <input type="number" class="form-control" id="inputTafelLengte" value="10">
                    </div>
                    <div class="col-4" style="margin-top: 48px;">
                        <button type="button" class="btn btn-success" onclick="displaytafel()">GO</button>
                    </div>
                </form>
                <div class="card text-center">
                    <div id="tafelheader" class="card-header">
                        Tafel van ...
                    </div>
                    <div id="tafel" class="card-body">

                    </div>
                    <div class="card-footer text-body-secondary">
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="script.js" type="text/javascript"></script>
</body>

</html>