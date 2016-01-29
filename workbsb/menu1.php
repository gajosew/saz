<?php @session_start();?>
<!DOCTYPE html>
 
<html lang="pl">
    <head>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
       <title>eMagazyn środków trwałych</title>
       <meta name="Keywords" content="inwentaryzacja, magazyn, online, porządek" />
        
       <link rel="stylesheet" type="text/css" href="style.css">
      
        
    </head>
    <body>
             
        <div id="cointainer">
             
            <div id="logo">
                <h1>e-Magazyn środków trwałych - Twoja inwentaryzacja</h1>           
            </div>
             
            <div id="navigation">
                <ul id="menu">
                     
                    <li><a href='?page=start'>Strona główna</a></li>               
                    <li><a href='?page=galeria'>Galeria</a></li>
                    <li><a href="?page=magazyn">Magazyn</a></li>
                    <li><a href="?page=logowanie">Logowanie</a></li>
                    <li><a href="?page=kontakt">Kontakt</a></li>
                    <li><a href="?page=ofirmie">O firmie</a></li>
                     
                </ul>
            </div>
             
        <div id='content'>
             
            <?php
                if(isset($_GET['page'])){
                    $_SESSION['page'] = $_GET['page'];
                }else{
                    $_SESSION['page'] = "";
                }
 
             
                include './strony/case.php';
             
            ?>
             
        </div>
            <div id="footer" >
               
            </div>
         
        </div>
             
         
        
 
    </body>
</html>


