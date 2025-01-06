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
        Pasisveikinimas
    </h1>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form id="" action="hello.php" method="">
                            <div class="form-group">
                                <label>
                                    Labas
                                </label>
                                <input
                                 class="form-control"
                                disabled value="<?php echo $_POST["name"];?>" />
                            </div>
                            <div class="form-group">
                                <label>
                                </label>
                                <input 
                                       class="form-control"
                                       value="<?php echo $_POST["surname"];?>" 
                                       disabled />
                            </div>
                            <a class="btn btn-danger" href="index.php" >
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