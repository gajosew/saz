<?php
$ilosc = mysql_result(mysql_query("SELECT
                                       COUNT(idklienta)
                                   FROM
                                       klienci"),0);
if($ilosc){
 
    //określamy ilość wyników wyświetlanych na stronie
    $liczba_pozycji = 10;
 
    //obliczmy ilość stron
    $max = ceil($ilosc/$liczba_pozycji);
 
    //sprawdzamy czy wybrano jakiś numer strony
    //jeśli nie ustawiamy na pierwszą stronę
    if($_GET['nrstr'] == '')
        $_GET['nrstr'] = 1;
 
    //sprawdzamy czy wybrany numer strony nie jest większy
    //od największego możliwego numeru strony
    if($_GET['nrstr'] > $max)
 
        //jeśli jest ustawiamy go na największy możliwy
        $_GET['nrstr'] = $max
 
    //jeśli numer strony równy jest jeden oznacza to
    //że przycisk wstecz jest nieaktywny...
    if($_GET['nrstr'] == '1' )
 
        //...dlatego do zmiennej wpisujemy tylko treść
        $prev = '« Poprzednia';
 
    //w przeciwnym wypadku przycisk jest aktywny i wprowadzamy link
    else
        $prev = '<a href="index.php?nrstr='.($_GET['nrstr'] -1) .'">« Poprzednia</a>';
 
    //Jeśli numer strony jest równy aktualnemu numerowi strony
    if($_GET['nrstr'] == $max )
 
        //oznacza to że nie ma już kolejnej strony
        //i przycisk nie jest aktywny
        $next = 'Następna »';
 
    //w przeciwnym wypadku do zmiennej wpisujemy link
    //do kolejnej strony
    else
        $next = '<a href="index.php?nrstr='.($_GET['nrstr'] + 1).'">Next »</a>';
 
    $start = ($_GET['nrstr'] - 1) * $liczba_pozycji;
    echo '<table>';
    echo '<tr>';
        echo '<th>Imie</th>';
        echo '<th>Nazwisko</th>';
        echo '<th>Email</th>';
    echo '</tr>';
    $zapytanie = mysql_query("  SELECT 
                                    imie,
                                    nazwisko,
                                    email
                                FROM
                                    klienci
                                LIMIT
                                    $start, $liczba_pozycji");
    while($dane = mysql_fetch_assoc($zapytanie)){
        echo '<tr>';
            echo '<td>'.$dane['imie'].'</td>';
            echo '<td>'.$dane['nazwisko'].'</td>';
            echo '<td>'.$dane['email'].'</td>';
        echo '<tr>';
    }
    echo $prev.' '.$_GET['nrstr'].'/'.$max.' '.$next;
}else{
    echo '<h2>Brak pozycji w bazie</h2>';
}

?>