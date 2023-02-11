<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="UTF-12">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
    <form method="POST">
        <fieldset>
            <div class="row gy-3 gx-5">
                <div class="col-12 col-sm-6">
                    <label for="textInput" class="form-label">Adınız</label>
                    <input type="text" name="name" id="TextInput" class="form-control">
                </div>
                <div class="col-12 col-sm-6">
                    <label for="textInput" class="form-label">Soyadınız</label>
                    <input type="text" name="last-name" id="TextInput" class="form-control">
                </div>
                
                <div class="form-check ms-4">
                    <input class="form-check-input" name="is-admin" value="1" type="checkbox" id="FieldsetCheck">
                    <label class="form-check-label" for="FieldsetCheck">Admin</label>
                </div>
                <button type="submit" class="btn btn-primary col-sm-3 mx-auto">Click me</button>
            </div>
        </fieldset>
    </form>
    </div>
<script src="scripts/louise.js"></script>
</body>
</html>