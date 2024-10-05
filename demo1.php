<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(isset($_GET["Error"])){ ?>
    <p style="background-color: red;color: aliceblue"> <?php echo $_GET["Error"];?> </p>
    <?php } ?>
    <?php if(isset($_GET["success"])){ ?>
    <p style="background-color: green;color: white"> <?php echo $_GET["success"];?></p>
    <?php } ?>
    <?php if(isset($_GET["EmptyFields"])){ ?>
    <p style="background-color: red;color: aliceblue">Complete your fields</p>
    <?php } ?>
    <form action="output.php" method="POST">
        <div>
        <label for="username">Username</label>
        <input type="username" name="username" id="username">
        </div>

        <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        </div>

        <div>
        <label for="password">Password</label>
        <input type="password" name="password1" id="password1">
        </div>

        <div>
        <label for="confirm-password">Confirm Password</label>
        <input type="password" name="password" id="password">
        </div>

        <div>
        <input type="submit" value="Register">
        </div>

    </form>


</body>
</html>