<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sudoku - 1</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
      <link rel="stylesheet" href="style.css">
</head>
  <body>
    <?php 
    include "../header.html";

    ?>
    <section class="container mt-5">
        <div class="row">
            <div class="col-10">
                <main id="sudoku">
                </main>  
            </div>
            <div class="col-2">
                <button class="btn btn-success" onclick="generateSudoku()">Genereer Sudoku</button>
                <table class="table mt-5">
                  <tr>
                    <td><button class="btn btn-light" style="font-size: 42px" onclick="selectCijfer(1)">1</button></td>
                    <td><button class="btn btn-light" style="font-size: 42px" onclick="selectCijfer(2)">2</button></td>
                    <td><button class="btn btn-light" style="font-size: 42px" onclick="selectCijfer(3)">3</button></td>
                  </tr>
                  <tr>
                    <td><button class="btn btn-light" style="font-size: 42px" onclick="selectCijfer(4)">4</button></td>
                    <td><button class="btn btn-light" style="font-size: 42px" onclick="selectCijfer(5)">5</button></td>
                    <td><button class="btn btn-light" style="font-size: 42px" onclick="selectCijfer(6)">6</button></td>
                  </tr>
                  <tr>
                    <td><button class="btn btn-light" style="font-size: 42px" onclick="selectCijfer(7)">7</button></td>
                    <td><button class="btn btn-light" style="font-size: 42px" onclick="selectCijfer(8)">8</button></td>
                    <td><button class="btn btn-light" style="font-size: 42px" onclick="selectCijfer(9)">9</button></td>
                  </tr>
                </table>

                <div id="0" style="color: white;"></div>
              </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="script.js"></script>
  </body>
</html>