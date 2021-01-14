<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Željoteka</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=La+Belle+Aurore&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/fc2794d205.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css?v=<?php echo time(); ?>">
</head>

<body class="background-img">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 offset-sm-1 col-sm-4">
                <div class="d-flex flex-row justify-content-end">
                    <img src="img/deda-mraz.png" alt="deda mraz" class="santa-styling animacija">
                </div>
            </div>
            <!-- Korisnik prvo vidi ekran na kom mora pritisnuti dugme kako bi se stranica sa formom učitala -->
            <!-- Čitav div se zatim krije JS-om, a prikazuje se forma -->
            <div class="col-12 col-sm-5 d-flex flex-column align-items-center text-center" id="btn-div">
                <h1 class="uvodni-tekst glavni-naslov kurziv">Odabrao/la si poklon za Novu Godinu?</h1>
                <button onclick="showScreen();" class="btn btn-lg btn-red btn-intro mt-5">Piši Deda Mrazu! <i class="fas fa-gift"></i></button>
            </div>
            <div class="col-12 col-sm-5 d-none" id="forma-div">
                <div class="forma w-75 mt-3">
                    <h1 class="kurziv glavni-naslov w-full animacija">Dragi Deda Mraze,</h1>
                    <h4 class="mb-4 kurziv manji-tekst animacija-tekst">Zovem se...</h4>
                    <form action="sacuvaj_zelju.php" method="post" class="animacija-tekst">
                        <input type="text" name="ime" placeholder="Unesi ime" class="form-control mb-3">
                        <input type="text" name="prezime" placeholder="Unesi prezime" class="form-control mb-3">
                        <select name="grad" class="form-control mb-3 animacija-tekst">
                            <option value="" disabled selected>Izaberi grad</option>
                            <!-- Gradovi se ubacuju dinamički -->
                            <?php
                            $gradovi = [
                                "Podgorica", "Nikšić", "Pljevlja", "Bijelo Polje", "Cetinje", "Bar", "Herceg Novi", "Berane", "Ulcinj",
                                "Tivat", "Rožaje", "Kotor", "Danilovgrad", "Mojkovac", "Plav", "Kolašin", "Žabljak", "Plužine", "Andrijevica", "Šavnik"
                            ];
                            foreach ($gradovi as $grad) {
                                $grad_izbor = "<option value=$grad>$grad</option>";
                                echo $grad_izbor;
                            }
                            ?>
                        </select>
                        <div class="form-check mb-2 mt-1 animacija-tekst">
                            <label for="provjera" class="kurziv najmanji-tekst">Ove godine sam bio dobar/bila dobra.</label>
                            <input type="checkbox" name="provjera" value="da" class="form-check-input">
                        </div>
                        <div class="radio-div animacija-tekst mt-1">Pol:
                            <input type="radio" name="pol" value="muski">
                            <label for="muski">Muški</label>
                            <input type="radio" name="pol" value="zenski">
                            <label for="zenski">Ženski</label>
                        </div>
                        <h4 class="mb-4 mt-4 kurziv manji-tekst animacija-tekst">A kao poklon mi donesi</h4>
                        <textarea name="zelja" cols="30" rows="5" placeholder="Napiši šta želiš od Deda Mraza" class="form-control mb-3 animacija-tekst"></textarea>

                        <button class="btn btn-red btn-lg mb-5 animacija-tekst">Pošalji <i class="far fa-paper-plane"></i></button>

                    </form>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="app.js"></script>
</body>

</html>