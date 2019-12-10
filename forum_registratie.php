<!DOCTYPE html>

<html>

<head>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <h1>
        Forum Registratie
    </h1>
    <div>
        <form class="form" action="./registratie_handler.php" method="post" autocomplete="off">
            <div>
                <input type="text" id="name" name="name" required>
                <label for="name">Username</label>
            </div>
            <div>
                <input type="email" id="email" name="email" required>
                <label for="email">Email</label>
            </div>
            <div>
                <input type="number" name="age" id="age" min="1" required>
                <label for="age">Age</label>
            </div>
            <div>
                <input type="submit" value="Submit">
            </div>
            </form>
    </div>
   
    </div>
</body>
</html>