<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/homestyle.css">
    <title>Nikahan Fabio</title>
</head>
<body>
<?php 
    session_start();
	if($_SESSION['status']!="login"){
		header("location:index.php?pesan=belum_login");
	}
	?>
    <center>
    <img src="images/nikah.jpeg" alt="" srcset="" width="200px">
    <h2>Pernikahan Fabio dengan saudari sarah dan sirih. Semoga sakinah mawadah warohmah.</h2>
    <p>    Lionel Andrés Messi juga dikenal sebagai Leo Messi[5] (lahir 24 Juni 1987) adalah seorang pemain sepak bola profesional asal Argentina yang akan bermain sebagai penyerang untuk klub Major League Soccer Inter Miami CF dan merupakan kapten tim nasional Argentina. Sering dianggap sebagai pemain terbaik di dunia dan sering dianggap sebagai pemain terhebat sepanjang masa.[6][7][8][9] Messi telah memenangkan tujuh penghargaan Ballon d'Or, enam Sepatu Emas Eropa, dan pada tahun 2020 dinobatkan sebagai Ballon d'Or Dream Team. Ia menghabiskan seluruh karier profesionalnya bersama Barcelona, di mana ia memenangkan 34 piala, termasuk sepuluh gelar La Liga, tujuh gelar Copa del Rey dan empat Liga Champions UEFA. Seorang pencetak gol yang produktif dan playmaker kreatif, Messi memegang rekor sebagai pencetak gol terbanyak sepanjang masa di La Liga (474 gol), gol terbanyak di La Liga dan Eropa dalam satu musim (50 gol), trigol terbanyak di La Liga (36) dan Liga Champions UEFA (8), serta umpan gol terbanyak di La Liga (192), umpan gol terbanyak La Liga dan Eropa selama satu musim (21)[10] dan umpan gol terbanyak di Copa América (17). Ia telah mencetak lebih dari 750 gol selama karier seniornya untuk klub dan negara, dan gol terbanyak yang pernah dibuat oleh seorang pemain yang bermain hanya untuk satu klub.
</p>
<a href="tabel_tamu.php"><button class="button button 1">Daftar Tamu</button></a>

<a href="profile(sentra).html"><h2>cek Profil pembuat disini</h2></a>
    </center>
   
	
<a href="proses/logout.php">LOGOUT</a>
</body>
</html>