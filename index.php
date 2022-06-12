<!DOCTYPE html>
<html>

<head>
    <title>Bug Tracker</title>
    <?php include("universal/scripts/head.php"); ?>
</head>

<body>
    <div class="app">
        <div class="main-content">
            <h1>Bug Tracker</h1>
            <button onclick="location = 'pages/login.php'">
                <p class="material-icons">login</p> Sign in
            </button>
            <p class="backlight">
                Dont have an account yet? <a href="pages/signup.php">Sign up</a>
            </p>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="var(--light)" fill-opacity="1"
                d="M0,256L80,213.3C160,171,320,85,480,64C640,43,800,85,960,128C1120,171,1280,213,1360,234.7L1440,256L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
            </path>
        </svg>
    </div>

</body>

</html>
<style>
:root {
    --bg: #181818;
    --light: #252525;
    --accent: #984bc5;

    --text: #eddaf1;
}

.backlight {
    color: #ffffff75;
    font-size: 75%;
}

.app svg {
    position: fixed;
    bottom: 0;
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

.main-content button {
    background-color: var(--accent);
    color: var(--text);
    padding: 10px;
    margin: 20px;
    position: relative;
    width: 80%;
    border-radius: 5px;
}

.main-content button:hover {
    background-color: var(--text);
    color: var(--accent);
}

.main-content button .material-icons {
    position: absolute;
    left: 10px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 150%;
}

.main-content {
    text-align: center;

    position: fixed;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
}

.app {
    height: 100vh;
    width: 100vw;
    color: var(--text);
    background-color: var(--bg);
}
</style>