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
                <b>Rules</b>
                <ul>
                    <li>You are on a trip to break some ice in order to clear the area to build a new vacation resort in Antarctica. The area contains magically floating ice blocks in a 6x6 grid. The ice block can only float if it is in a row or column that has all the ice blocks intact. In addition, there is a group of endangered polar bears sitting in a 2x2 ice block somewhere on the grid (player 1 gets to choose that location). Since they are protected animals, you must not disturb the bears; otherwise, you go to jail! The polar bear will move away if the 2x2 falls. Luckily, your arch-nemesis is also there to help you clear the ice for the resort. You both decide to have a "friendly" wager that will send the loser to jail. Each person will take turns knocking down the ice blocks. You can either hit only one block, or hit the intersections of blocks in order to knock some or all of them down (you can choose between 1 to 4 blocks based on the intersections). Both of you have perfect accuracy in terms of hitting the ice because you both went to NYU on an ice-breaking scholarship, courtesy of the Global Warming Group, and got your PhD in ice breaking. Good luck!</li>
                </ul>
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
