<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>honeypot</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">
</head>
<body class="bg-light">
    <div class="container pt-5">

        <form method="POST" action="/save">
            <!-- Anti spam hide div | the robot will find and fill this field -->
            <div class="d-none">
                <input type="text" name="antispam" value="">
                <input type="text" name="microtime" value="<?=microtime(true)?>">
            </div>
    
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="title">
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">Text</label>
                <input type="text" name="text" class="form-control" id="text">
            </div>
    
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</body>
</html>