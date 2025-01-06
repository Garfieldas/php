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
        Programa 1
    </h1>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form id="" action="hello.php" method="POST">
                            <div class="form-group">
                                <label>
                                    Vardas
                                </label>
                                <input name="name"
                                       class="form-control" 
                                       placeholder="Vardas" required />
                            </div>
                            <div class="form-group">
                                <label>
                                    Pavardė
                                </label>
                                <input  name="surname"
                                       class="form-control" 
                                       placeholder="Pavardė"
                                    required />
                            </div>
                            <button class="btn btn-danger">
                                Paspausti
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>