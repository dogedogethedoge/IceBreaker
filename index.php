<!DOCTYPE html>
<html>
<head>
    <?php $base = "../../" ?>
    <base href="../../">
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/facebox.js"></script>
    <script src="js/gameSettings.js"></script>
    <link rel="stylesheet" type="text/css" href="css/facebox.css"/>
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $('a[rel*=facebox]').facebox()
        })
    </script>
</head>
<body>
<div class="container">
    <?php include $base."header.php"; ?>
    <nav>
        <ul>
        <li><a href="">Home</a></li>
        </ul>
        <?php include $base."leftMenuGame.php"; ?>
    </nav>
    <article>
        <h1 id="gameName">Safe Roving</h1>
        <h3 id="groupName">Team 442</h3>
        <h3>Instruction:</h3>
        <div id="gameDesc" class="jumbotron">
            <div>
                <b>Players</b>
                <ul>
                    <li>Player 1 plays first and choose four blocks in a box and places the bears at those locations. </li>
                    <li>Players alternate removing blocks until the bears all fall.</li>
                    <li>The winner is the player who forced their opponent to knock all the bears into the water</li>
                </ul>
            </div>
        </div>
	<h3>Leaderboard</h3>
        <div id="scoreArea", class="jumbotron">
            <?php
            include $base."getScore.php";
            /*
            * arg1: gameName, should be the same as the dir name
            * arg2: if your score is sortable, pass 1 if higher score is better, 0
            *       if smaller score is better. Otherwise no need to pass variable
            */
            getScore("Safe Roving", 0);
            ?>
        </div>
        <h3>Play game in pop up window:<h3>
        <form id="gameSettings" class="well"></form>
        <iframe src="games/iceBreaker/iceBreaker.html" class="game" width="800" height="800"></iframe>

    </article>
    <?php include $base."footer.php"; ?>
</div>
<script type="text/javascript">
    newWindowBtn(1200,1200,"games/iceBreaker/iceBreaker.html", []);
</script>
</body>
</html>
