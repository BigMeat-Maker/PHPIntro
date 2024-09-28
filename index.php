<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
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
        <input type"submit" value="Register">
        </div>

    </form>


    <?php
    $day = "Monday";

    switch ($day) {
        case "Monday":
            echo "Weekdays";
            break;
        
        case "Tuesday":
            echo "Weekdays";
            break;
        
        case "Wednesday":
            echo "Weekdays";
            break;

        case "Thursday":
            echo "Weekdays";
            break;

        case "Friday":
            echo "Weekdays";
            break;

        case "Saturday":
            echo "Weekends";
            break;

        case "Sunday":
            echo "Weekends";
            break;
        
        default:
            echo "Not Included";
            break;
    }
    ?>

</body>
</html>