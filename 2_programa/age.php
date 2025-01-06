<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" 
          content="width=device-width, 
                   initial-scale=1,
                   shrink-to-fit=no" />
    <link rel="stylesheet" 
          href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <title>1 programa</title>
</head>

<body>
    <h1 class="text-success text-center">
        Programa 2
    </h1>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form id="" action="age.php" method="">
                            <div class="form-group">
                                <label>
                                    Jūsų amžius yra
                                </label>
                                <?php
                                $person_data = new DateTime($_POST['birth_date']);
                                $today_date = new DateTime();
                                $age = $today_date->diff($person_data)->y;
                                ?>
                                <input name="birth_date"
                                       class="form-control" 
                                       disabled
                                       value="<?php echo htmlspecialchars($age);
                                       
                                       
                                       ?>"/>
                                       Metai
                            </div>
                            <a class="btn btn-danger" href="index.php">
                                Grįžti
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>