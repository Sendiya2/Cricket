<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cricket World</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #0b6623;
            color: white;
            padding: 15px;
            text-align: center;
        }
        nav {
            background-color: #333;
            padding: 10px;
            text-align: center;
        }
        nav a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
            font-weight: bold;
        }
        nav a:hover {
            color: yellow;
        }
        .container {
            padding: 20px;
        }
        .card {
            background: white;
            padding: 15px;
            margin: 10px 0;
            border-radius: 8px;
            box-shadow: 0 0 5px rgba(0,0,0,0.2);
        }
        footer {
            background-color: #0b6623;
            color: white;
            text-align: center;
            padding: 10px;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<header>
    <h1>🏏 Cricket World</h1>
    <p>Your Ultimate Cricket Hub</p>
</header>

<nav>
    <a href="#">Home</a>
    <a href="#">Matches</a>
    <a href="#">Teams</a>
    <a href="#">News</a>
    <a href="#">Contact</a>
</nav>

<div class="container">

    <div class="card">
        <h2>Latest Match</h2>
        <?php
            $team1 = "Sri Lanka";
            $team2 = "India";
            $score = "SL 245/8 (50) vs IND 246/5 (48.2)";
            $result = "India won by 5 wickets";

            echo "<p><strong>$team1 vs $team2</strong></p>";
            echo "<p>Score: $score</p>";
            echo "<p>Result: $result</p>";
        ?>
    </div>

    <div class="card">
        <h2>Top Players</h2>
        <?php
            $players = ["Virat Kohli", "Joe Root", "Kane Williamson", "Babar Azam"];

            echo "<ul>";
            foreach($players as $player) {
                echo "<li>$player</li>";
            }
            echo "</ul>";
        ?>
    </div>

    <div class="card">
        <h2>Latest News</h2>
        <p>🔥 World Cup preparations are underway!</p>
        <p>🏏 Young talents are emerging in international cricket.</p>
    </div>

</div>

<footer>
    <p>&copy; <?php echo date("Y"); ?> Cricket World | All Rights Reserved</p>
</footer>

</body>
</html>
