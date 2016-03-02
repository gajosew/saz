<?php
session_start();
if (isset($_SESSION['login_dn']))
{
  $login_dn = $_SESSION['login_dn'];
	$cn_dn = $_SESSION['cn_dn'];   
        $department_dn = $_SESSION['department_dn'];
        $mail_dn = $_SESSION['mail_dn'];
        $manager_dn = $_SESSION['manager_dn'];
}
else header('Location:l2.php');
?>
<?php
        require_once "login.php";
?>
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
    <title>Expand table rows with jQuery - jExpand plugin - JankoAtWarpSpeed demos</title>
    <style type="text/css">
        body { font-family:Arial, Helvetica, Sans-Serif; font-size:0.8em;}
        #report { border-collapse:collapse;}
        #report h4 { margin:0px; padding:0px;}
        #report img { float:right;}
        #report ul { margin:10px 0 10px 40px; padding:0px;}
        #report th { background:#7CB8E2 url(tablica/header_bkg.png) repeat-x scroll center left; color:#fff; padding:7px 15px; text-align:left;}
        #report td { background:#C7DDEE none repeat-x scroll center left; color:#000; padding:7px 15px; }
        #report tr.odd td { background:#fff url(tablica/row_bkg.png) repeat-x scroll center left; cursor:pointer; }
        #report div.arrow { background:transparent url(tablica/arrows.png) no-repeat scroll 0px -16px; width:16px; height:16px; display:block;}
        #report div.up { background-position:0px 0px;}
    </style>
    <script src="https://saz/auto/tablica/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">  
        $(document).ready(function(){
            $("#report tr:odd").addClass("odd");
            $("#report tr:not(.odd)").hide();
            $("#report tr:first-child").show();
            
            $("#report tr.odd").click(function(){
                $(this).next("tr").toggle();
                $(this).find(".arrow").toggleClass("up");
            });
            //$("#report").jExpand();
        });
    </script>        
</head>
<body>
        <p>Up do </p>
    <table id="report">
        <tr>
            <th>Do</th>
            <th>Tresc</th>
            <th>Wystapil</th>
            <th>Wygenerowano</th>
            <th></th>
        </tr>
        
        <?php
        
        
        $query = "SELECT * FROM stan ORDER BY stan_id ";
        $result = mysql_query($query) or die (mysql_error());
        
        while($row = mysql_fetch_array($result)){
              
            
            //echo $row['up_do'];
               // echo $row['co'];
               // echo "<hr>";
        $nr = $row['numerek'];
                echo '<tr>
            <td>'.$row['up_do'].'</td>
            <td>'.$row['co'].'</td>
            <td>'.$row['kto'].'</td>
            <td>'.$row['data_generacji'].'</td>
            <td><div class="arrow"></div></td>
        </tr>';
       
        echo'<tr>';
        
        //echo $nr;
         
        
        
            echo'<td colspan="5">
                <h5>Uprawnienia dla</h5>
                <ul>
                    //tutaj tresc
                    
                 </ul>   
            </td>';
        
       echo' </tr>';
         }
        
        
        
    echo '</table>';
    echo '<em>*kliknij na strzalke dla szczegołów</em>';
                ?>
</body>
</html>


