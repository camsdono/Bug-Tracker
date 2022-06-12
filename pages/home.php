<?php


?>
<!DOCTYPE html>
<html>

<head>
    <title>Bug Tracker</title>
    <?php include("../universal/scripts/head.php"); ?>
</head>

<body>
    <div class="app">
        <div class="content">
            <div class="nav-bar">
                <div class="title">

                </div>
                <div class="button-grid">
                    <button class="material-icons">
                        dashboard
                    </button>
                    <button class="material-icons">
                        confirmation_number
                    </button>
                    <button class="material-icons" onclick="location = 'orgs.php'">
                        business
                    </button>
                </div>
            </div>
            <div class="home">
                <button onclick="menu()" class="material-icons" id="menu-btn">menu</button>
                <h3>Welcome back!</h3>
            </div>
        </div>

    </div>

    <script>
    var open = true;

    function menu() {
        if (open) {
            console.log("switched")
            open = false
            $(".content").css("grid-template-columns", "0px calc(100% - 0px)")
        } else {
            console.log("switched")
            open = true
            $(".content").css("grid-template-columns", "70px calc(100% - 70px)")
        }
    }
    </script>


</body>

</html>
<style>
#menu-btn {
    position: fixed;
    left: 0;
    top: 0;
    z-index: 3;
    width: 70px;
    height: 70px;
    background: none;
    color: var(--text);
}

.title button {
    width: 100%;
    height: 100%;
    color: var(--text);
    background: none;
}

.home {
    text-align: center;
    padding: 20px;
}

.content {
    display: grid;
    grid-template-columns: 70px calc(100% - 70px);
    transition: grid-template-columns 0.4s;
    height: 100%;
}

.nav-bar {
    overflow: hidden;
    position: relative;
    z-index: 2;
    background-color: var(--light);
    height: 100%;
    display: grid;
    grid-template-rows: 70px calc(100% - 50px);
}

.button-grid {
    display: grid;
    height: 100%;
    grid-auto-rows: 70px;
}

.button-grid button {
    background: none;
    margin: 5px;
    color: var(--accent);
    border-radius: 100%;
    transition: background 0.4s;
}

.button-grid button:hover {
    background: var(--bg);
}

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