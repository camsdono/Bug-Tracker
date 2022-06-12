<?php


?>
<!DOCTYPE html>
<html>

<head>
    <title>Bug Tracker | Signup</title>
    <?php include("../universal/scripts/head.php"); ?>
    <style>
    :root {
        --bg: #181818;
        --light: #252525;
        --accent: #984bc5;
        --err: #D65A31;
        --text: #eddaf1;
    }

    .backlight {
        color: #ffffff75;
        font-size: 75%;
    }

    .app svg {
        position: fixed;
        bottom: 0;
        z-index: -1;
    }

    .error {
        font-size: 90%;
        color: var(--err);
    }

    * {
        padding: 0;
        margin: 0;
        border: none;
        outline: none;
        font-family: Arial, Helvetica, sans-serif;
        -webkit-box-sizing: border-box;
        /* Safari/Chrome, other WebKit */
        -moz-box-sizing: border-box;
        /* Firefox, other Gecko */
        box-sizing: border-box;
    }

    a {
        text-decoration: none;
        color: var(--accent);
    }

    .login button {
        background-color: var(--accent);
        color: var(--text);
        padding: 10px;
        margin: 20px;
        position: relative;
        width: 80%;
        border-radius: 5px;
    }

    .login button:hover {
        background-color: var(--text);
        color: var(--accent);
    }

    .login input {
        background-color: var(--light);
        color: var(--text);
        padding: 10px;
        width: 100%;
        border-radius: 5px;
        margin: 5px;
    }

    .login button .material-icons {
        position: absolute;
        left: 10px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 150%;
    }

    .login {
        width: 80%;
        text-align: center;

        position: fixed;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
    }

    .app {
        position: fixed;
        left: 0;
        top: 0;
        height: 100vh;
        width: 100vw;
        color: var(--text);
        background-color: var(--bg);
    }
    </style>
</head>

<body>
    <div class="app">
        <div class="login">
            <div class="col no-gutters">
                <form action="process.php" method="post">
                    <input type="text" placeholder="Username" class="txt" name="username" required><br>
                    <input type="text" placeholder="Firstname" class="txt" name="firstname" required><br>
                    <input type="text" placeholder="Surname" class="txt" name="surname" required><br>
                    <input type="password" placeholder="Password" class="txt" name="password" required><br>
                    <input type="password" placeholder="Confirm Password" class="txt" name="cpassword" required><br>
                    <input type="email" placeholder="Email" class="txt" name="email" required><br>
                    <input type="date" placeholder="Date of birth" class="txt" name="dob" required><br>
                    <button type="submit" class="btn" name="btn-signup">Sign up</button>
                    <p class="backlight">Already have an account? <a href="login.php">Sign in</a></p>
                </form>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="var(--light)" fill-opacity="1"
                d="M0,256L80,213.3C160,171,320,85,480,64C640,43,800,85,960,128C1120,171,1280,213,1360,234.7L1440,256L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
            </path>
        </svg>
    </div>




</body>

</html>