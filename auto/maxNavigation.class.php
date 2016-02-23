<?php
	// Main menu items
	$mainMenu['Home']      = 'index.php';
	$mainMenu['Zlecenia']  = 'projects.php';
	$mainMenu['Szukaj']  = 'about.php';
	$mainMenu['Wyloguj']  = 'wyloguj.php';
	// Sub menu items
	$subMenu['Zlecenia']['Aktualne'] = 'product1.php';
	$subMenu['Zlecenia']['Oczekujace'] = 'product2.php';
        $subMenu['Zlecenia']['Wystaw..'] = 'product3.php';
	
	$subMenu['About us']['Staff-1']   = 'staff1.php';

?>

<?php
class maxNavigation{
   
   function showMenu(){
      global $mainMenu,$subMenu;
      
      $actualPage = $_SERVER['PHP_SELF'];
      $actualPath = $_SERVER['REQUEST_URI'];
      
      $actualPageName = basename($actualPage);
      //echo $page;
      
      //echo "$actualPage <br/> $actualPath";
      $actMenu = '';
   	foreach ($mainMenu as $menu => $link) {
		    if ($link == $actualPageName) $actMenu = $menu;		
		    if (isset($subMenu[$menu])){
		       foreach ($subMenu[$menu] as $menuSub => $linkSub) {
 		   	     if ($linkSub == $actualPageName) $actMenu = $menu;		
		       }
		    }
	    }
	
	
	    // Now display the menu
	    foreach ($mainMenu as $menu => $link) {
	      $class = ' class="mainMenuLink" '; 
	      if ($actualPageName == $link) $class=' class="mainMenuLinkSelected" '; 
	      
		   echo '<a'.$class.'href="'.$link.'">'.$menu.'</a>';
		   
		   if ( ($actMenu == $menu) && (isset($subMenu[$menu])) ){
		       foreach ($subMenu[$menu] as $menuSub => $linkSub) {
                 $class = ' class="subMenuLink" '; 
	              if ($actualPageName == $linkSub) $class=' class="subMenuLinkSelected" '; 
 		   	     echo '<a'.$class.'href="'.$linkSub.'">'.$menuSub.'</a>';
		       }
		    }
	  }
      
      
   }

}

$navi = new maxNavigation();
$navi->showMenu();

?>