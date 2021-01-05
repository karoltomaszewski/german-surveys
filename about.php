<!DOCTYPE html>
<html>

<head>
    <title>Sondaże</title>
    <meta charset="utf-8">
    <link href="about.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- chart.js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

    <link rel="icon" type="image/png" href="./favicon.ico" />
</head>

<body>
    <div class="container-xl pt-3">
        <div class="row">
            <div class="col-sm-12">
                <a href="./index.php">Wróć do strony głównej</a>
            </div>
            <div class="col-sm-12" id="data">
                <hr />
                <h3>
                    Źródło danych
                </h3>
                <p>Wyniki sondażów pobierane są ze strony <a href="https://dawum.de/">DAWUM</a> na licencji <a href="https://opendatacommons.org/licenses/odbl/1-0/">ODC-ODbL</a>.
                </p>
            </div>
            <div class="col-sm-12" id="map">
                <hr />
                <h3>
                    Źródło mapy
                </h3>
                <p>Mapa pochodzi ze strony <a href="https://mapsvg.com/maps/germany">mapsvg</a> na <a href="https://creativecommons.org/licenses/by/4.0/"> licencji</a>.
                    <br><br>
                    Wprowadzony został szereg zmian:
                <ul>
                    <li>Zmieniono kolorystykę</li>
                    <li>Wprowadzono linki na ścieżkach grafiki</li>
                    <li>Zmieniono rozmiar mapy oraz wprowadzono skalowanie jej</li>
                </ul>
                </p>
            </div>
            <div class="col-sm-12">
                <hr />
                <h3>
                    Średnia wyników z wybranych sondaży
                </h3>
                <p>
                    Brane pod uwagę są tylko te sondaże, które spełniają kryteria narzucone przez użytkownika poprzez filtry <strong>Data początkowa</strong> oraz <strong>Sondażownia</strong>.
                </p>
                <p>
                    Wyniki mogą być zaniżone, gdyż w niektórych sondażach dana partia jest uwzględniana, a w innych nie, wówczas automatycznie partia otrzymuje 0%, co wpływa na średnią. W takiej sytuacji przy nazwie partii zostanie wyświetlone odpowiednie ostrzeżenie.
                </p>
            </div>
            <div class="col-sm-12">
                <hr />
                <h3>
                    Wykres
                </h3>
                <p>Wykres <strong>średnie poparcie partii w czasie</strong> pokazuje średnie poparcie ugrupowania w danym miesiącu.

                </p>
                <p>
                    Wyniki mogą być zaniżone, gdyż w niektórych sondażach dana partia jest uwzględniana, a w innych nie, wówczas automatycznie partia otrzymuje 0%, co wpływa na średnią.
                </p>
                <p>
                    Jeżeli w danym miesiącu nie był przeprowadzony żaden sondaż to wartość przydzielona temu miesiącowi jest równa wartości z poprzedzającego miesiąca.
                </p>
                <p>
                    Jeżeli ustawiony jest filtr <strong>Sondażownia</strong> to na wykresie wartości będą bazować jedynie na sondażach wybranej sondażowni.
                </p>
            </div>
            <div class="col-sm-12">
                <hr />
                <h3>
                    Użyte technologie
                </h3>
                <p>
                    Do stworzenia strony zostały użyte następujące technologie: <strong>PHP</strong>, <strong>JavaScript</strong>, <strong>HTML5</strong>, <strong>CSS</strong>, <strong>Bootstrap</strong> oraz <strong>Chart.js</strong>.
                </p>.

            </div>
            <div class="col-sm-12">
                <hr />
                <h3>
                    Autor
                </h3>
                <p>
                    Autorem strony jest <strong>Karol Tomaszewski</strong>, a to mój <a href="https://github.com/karoltomaszewski">profil na GitHubie</a>
                    <br>W razie potrzeby można się kontaktować poprzez e-mail: <strong>karoltomaszewskiit@gmail.com</strong>.
                </p>.

            </div>
        </div>
    </div>
</body>

</html>