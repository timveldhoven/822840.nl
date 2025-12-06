<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Foto's - Sport Gallerij</title>
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="../stylesimage.css">
</head>

<body>
    <!--logo website Linksboven-->
    <a class="logo" href="../index.html">
        <img src="../infologo.png" alt="Logo" class="logo">
    </a>

    <br>
    <h1>Sport Foto's Gallerij</h1>
    <br>

    <!--directie anderen pagina's-->
    <nav>
        <a href="../index.html">Hoofdpagina</a>
        <a class="voetbal" href="../voetbal.html">Voetbal</a>
        <a class="basketbal" href="../basketbal.html">Basketbal</a>
        <a class="tennis" href="../tennis.html">Tennis</a>
        <a class="hockey" href="../hockey.html">Hockey</a>
        <a class="volleybal" href="../volleybal.html">Volleybal</a>
        <a class="ckv" href="../ckv.html">Ckv</a>
    </nav>

    <div class="center-container">
        <p>Welkom bij de foto gallerij! Hier vind je foto's over verschillende sporten.</p>
        
        <?php
        // Display current date
        echo "<p>Laatste update: " . date("d-m-Y") . "</p>";
        ?>
    </div>

    <footer>
        <p>
            <strong>Naam:</strong> Tim Veldhoven |
            <strong>Email:</strong> 822840@student.lmc-vo.nl |
            <strong>Telefoonnummer:</strong> 06-25237527 |
            <strong>School:</strong> Lyceum Kralingen |
            <strong>Locatie:</strong> Witte Hertstraat 1, Rotterdam
        </p>
    </footer>
</body>
</html>
