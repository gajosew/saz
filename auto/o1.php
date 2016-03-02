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
  
       <?php 
        echo'<table id="report">';
        echo'<tr>
            <th>Do</th>
            <th>Tresc</th>
            <th>Wystapil</th>
            <th>Data</th>
            <th></th>
        </tr>';
        echo'<tr>
            
            
            
            
            <td>United States of America</td>
            <td>306,939,000</td>
            <td>9,826,630 km2</td>
            <td>English</td>
            <td><div class="arrow"></div></td>
        </tr>';
        echo'<tr>
            <td colspan="5">
                
                <h4>Uprawnienia dla</h4>
                <ul>
                    <li><a href="http://en.wikipedia.org/wiki/Usa">USA on Wikipedia</a></li>
                    <li><a href="http://nationalatlas.gov/">National Atlas of the United States</a></li>
                    <li><a href="http://www.nationalcenter.org/HistoricalDocuments.html">Historical Documents</a></li>
                 </ul>   
            </td>
        </tr>';
                
    echo'</table>';
                ?>
    <em>* Information taken from Wikipedia</em>
</body>
</html>


