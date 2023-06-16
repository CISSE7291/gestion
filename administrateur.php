<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/styl.css">
    <title>Administrateur</title>
</head>
<body>
    <div class="container">
            <div class="main">  	
                <input type="checkbox" id="chk" aria-hidden="true">

                <div class="login">
                    <form class="form">
                        <label for="chk" aria-hidden="true">Log in</label>
                        <input class="input" type="email" name="email" placeholder="Email" required="">
                        <input class="input" type="password" name="pswd" placeholder="Password" required="">
                        <button>Log in</button>
                    </form>
                </div>

                <div class="register">
                    <form class="form">
                        <label for="chk" aria-hidden="true">Register</label>
                        <input class="input" type="text" name="txt" placeholder="Username" required="">
                        <input class="input" type="email" name="email" placeholder="Email" required="">
                        <input class="input" type="password" name="pswd" placeholder="Password" required="">
                        <button>Register</button>
                    </form>
                </div>
            </div>
    </div>
</body>
</html>
