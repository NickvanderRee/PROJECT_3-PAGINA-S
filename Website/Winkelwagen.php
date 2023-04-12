<html>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="winkelwagen.css">
    </head>
    <body>
        <header>
            <?php
                include("nav.php");
            ?>
        </header>
        <main>
            <section class = "winkelwagen">
            <section class="bestellen">
                <p>Totale prijs:</p><br>

                <p>Betaalmethode:</p>
                <form>
                <input type="radio" id="PayPal" name="betaal_methode" value="PayPal">
                <label for="PayPal">PayPal</label><br>
                <input type="radio" id="IDeal" name="betaal_methode" value="IDeal">
                <label for="IDeal">IDeal</label><br>
                <input type="radio" id="CreditCard" name="betaal_methode" value="CreditCard">
                <label for="CreditCard">Creditcard</label><br>
                <input type="radio" id="QRcode" name="betaal_methode" value="QRcode">
                <label for="QRcode">QR code</label><br>
                
                <button class = "bestelknop">Bestellen</button>
                </form>
            </section>
                <p>Producten:</p><br>
            </section>
        </main>
        
    </body>
</html>