<?php
    include_once("sqlcon.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bs/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Home</title>
</head>
<body>
    <header>

    </header>
    <main>
        <form class="" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <div class="form-width">
                <div class="form-group">
                    <label>Username:</label>
                    <input class="form-control"type="text" name="username" value="">
                </div>
                <div class="form-group">
                    <label>Password:</label>
                    <input class="form-control"type="text" name="password" value="">
                </div>
                <div class="form-group">
                    <button class="btn btn-dark form-control" type="button" name="">Register</button>
                </div>
                <div class="form-group">
                    <button class="btn btn-dark form-control" type="button" name="">Login</button>
                    <span><a href="">forgot password?</a></span>
                </div>
            </div>
        </form>
    </main>
    <footer>

    </footer>
</body>
</html>
