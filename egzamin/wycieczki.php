<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl4.css">
    <title>Wycieczki po Europie</title>
    
</head>
<body>
   <header>
    <h1>BIURO TURYSTYCZNE</h1>
   </header>
    <nav>
        <h3>„Wycieczki, na które są wolne miejsca”</h3>
        <ul>
              <?php
            $servername = "localhost";
            $host = "root";
            $passwd = "";
            $database = "biuro";
            $conn = mysqli_connect($servername,$host,$passwd,$database);
            $sql = 'SELECT id,dataWyjazdu,cel,cena FROM wycieczki WHERE dostepna = 1';
              $result = mysqli_query($conn,$sql);
             $wynik = mysqli_fetch_row($result);
            
           
           

           
            


            
           $conn->close(); 
        ?>
            
            
        </ul>
</nav>
<main>
    <section id="lewy">
        <h2>„Bestselery”</h2>
        <table>
            <tr>
                <td>Wenecja</td>
                <td>Kwiecień</td>
            </tr>
            <tr>
                <td>Londyn</td>
                <td>lipiec</td>
                
            </tr>
            <tr>
                <td>Rzym</td>
                <td>wrzesień</td>
            </tr>
        </table>
    </section>
    <section id="srodkowy">
        <h2>Nasze zdjęcia</h2>
        <?php 
        
         $servername = "localhost";
            $host = "root";
            $passwd = "";
            $database = "biuro";
            $conn = mysqli_connect($servername,$host,$passwd,$database);
            $sql = "SELECT nazwaPliku,podpis from zdjecia ORDER BY podpis DESC";
           $result = mysqli_query($conn,$sql);
             $wynik = mysqli_fetch_row($result);
             
            
            
           

            
           
            



            $conn->close();
        
        ?>

    </section>
    <section id="prawy">
        <h2>Skontaktuj się</h2>
        <a href="e-mail turysta@wycieczki.pl">Napisz do nas</a>
        <p>telefon:111222333</p>
    </section>
</main>

    <footer>
        <p>
            Stronę wykonał:Mateusz
        </p>
    </footer>
</body>
</html>