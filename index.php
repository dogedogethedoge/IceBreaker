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
        <h1 id="gameName">FREE Ice Breaker</h1>
        <h3 id="groupName">Latin</h3>
        <h3>Instruction:</h3>
        <div id="gameDesc" class="jumbotron">
            <div>
                <em>
                - Player 1 will choose a 2x2 set of blocks for the polar bears. <br> <br />
                - Players will alternate turns choosing where to hit the blocks the bear is not resting on each turn, the intersections may be hit as well. <br> <br />
                - The game continues until a player knocks all four polar bears into the water.  They can hold each up until if only a few of them are knocked in. <br> <br />
                - Ice blocks will only stay up if it is in either a complete row or complete column. <br> <br />
                - Each player can click Confirm to finish their term, or double click their choice <br> <br />
                - Players can also turn on a hint mode, to show which blocks will fall with their current selection. <br> <br />
                </em>
                Good Luck!     
            </div>
        </div>

        <h3>Play game in pop up window:<h3>
        <form id="gameSettings" class="well"></form>
        <iframe src="games/IceBreaker/iframe.html" class="game" width="800" height="800"></iframe>

    </article>
    <?php include $base."footer.php"; ?>
</div>
<script type="text/javascript">
    newWindowBtn(1200,1200,"games/IceBreaker/iframe.html", []);
</script>
</body>
</html>
