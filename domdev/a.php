<?php
$serials_per_page = 20;

$rowstart = (isset($_GET['rowstart']) && isnum($_GET['rowstart']) ? $_GET['rowstart'] : 0);

$wynik = dbquery("SELECT * FROM usery serial ORDER BY page_id DESC LIMIT $rowstart,$serials_per_page");
$countr = dbcount("(page_id)", "serial");
if(dbrows($wynik) != 0) {
while($r = dbarray($wynik)) {
if($r['page_cat'] == 1) {
echo "<table><tr><td height='100'>
<h4><a href='../viewserial.php?page_id=".$r['page_id']."'>".$r['page_title']."</a></h4>
<a href='../viewserial.php?page_id=".$r['page_id']."'>";
if($r['page_foto'] != "") {
echo "<img src='../images/seriale/".$r['page_foto']."' style='margin:5px;' align='left'>";
} else {
echo "<img src='../images/brak_zdjecia.jpg' style='margin:5px;' align='left'>";
}
echo "</a><img src='../images/ico-1.jpg' style='margin:5px;' align='left'><b>Opis:</b> ".$r['page_content']."<br>
<b>Dodał:</b> <a href='".BASEDIR."profile.php?lookup=".$r['user_id']."' target='_blank'>".$r['user_name']."</a><br>
<img src='../images/ico-5.jpg' style='margin:2px;' align='left'><b>Data dodania:</b> ".showdate("longdate", $r['page_datestamp'])."</td></tr><tr><td><hr></td></tr></table>";
}
}
if($countr > $serials_per_page) echo "<div align='center' style='margin-top:5px;'>\n".makepagenav($rowstart,$serials_per_page,$countr,3, "?page_id=".$_GET['page_id']."&")."\n</div>\n";
}
?>
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

