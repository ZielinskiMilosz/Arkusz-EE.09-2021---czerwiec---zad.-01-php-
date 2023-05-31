<!DOCTYPE html>
<html lang="pl">
<head>
    <link rel="stylesheet" href="styl.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista przyjaciół</title>
</head>
<body>
    <div class="baner">
        <h1>Portal Społecznościowy - moje konto</h1>
    </div>
    <div class="glowny">
        <h2>Moje zainteresowania</h2>
        <ol>
            <li>muzyka</li>
            <li>film</li>
            <li>komputery</li>
        </ol>
        <h2>Moi znajomi</h2>
        <?php
            $serverek = new mysqli("127.0.0.1","root","","dane");
            $dik = "SELECT imie,nazwisko,opis,zdjecie FROM osoby WHERE Hobby_id=1 or Hobby_id=2 or Hobby_id=6;";
            $con = $serverek->query($dik);
            $con1 = $con->fetch_all();

            for($i=0;$i<count($con1);$i++)
            {
                echo "<img class='obraz' src=".$con1[$i][3]." alt='przyjaciel'>";
                echo "<h3>".$con1[$i][0]." ".$con1[$i][1]."</h3>";      
                echo "<p class='blokopis'>Ostatni wpis: ".$con1[$i][2]."</h3></p>";
                echo "<hr class='bloklinia'>";
            }
        ?>
    </div>
    <div class="stopka">Stronę wykonał: m.z.</div>
    <div class="stopka"><a href="mailto: ja@portal.pl">odnośnik pocztowy</a></div>
</body>
</html>