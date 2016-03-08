
<?php
/**
 * Created by Joe of ExchangeCore.com
 */
if(isset($_POST['username']) && isset($_POST['password'])){

    $adServer = "ldap://192.168.0.35";
	
    $ldap = ldap_connect($adServer);
    $username = $_POST['username'];
    $password = $_POST['password'];

    $ldaprdn = 'bsb' . "\\" . $username;

    ldap_set_option($ldap, LDAP_OPT_PROTOCOL_VERSION, 3);
    ldap_set_option($ldap, LDAP_OPT_REFERRALS, 0);

    $bind = @ldap_bind($ldap, $ldaprdn, $password);


    if ($bind) {
        $filter="(sAMAccountName=$username)";
        $result = ldap_search($ldap,"dc=bsb,dc=com,dc=pl",$filter);
        ldap_sort($ldap,$result,"sn");
        $info = ldap_get_entries($ldap, $result);
        for ($i=0; $i<$info["count"]; $i++)
        {
            if($info['count'] > 1)
                break;
            echo "<p>You are accessing <strong> ". $info[$i]["sn"][0] .", " . $info[$i]["givenname"][0] .", ". $info[$i]["manager"][0] ."</strong><br /> (" . $info[$i]["samaccountname"][0] .")</p>\n";
            //echo '<pre>';
            //var_dump($info);
            //echo '</pre>';
			$a=$info[$i]["manager"][0];
			//$b=strstr($a, "CN="); 
			//$b=strchr($a, "="); 
			$b=substr($a, 3);
			
$c = substr($b, 0, strpos($b, ","));
$d = str_replace(" ", ".", $c);	
$zamiana=explode(".",$d);
for($x=0;$x<count($zamiana);$x++){  // pętelka ...
   //print $zamiana[$x]." ";  // wywal to co wyszło  :ok: ;)
}
$g = $zamiana[1].".".$zamiana[0];
$e = '@bsb.com.pl';
$f = $g.$e;
		
            $cn_dn = $info[$i]["cn"][0]; 
			$login_dn = $info[$i]["samaccountname"][0];
			$mail_dn = $info[$i]["mail"][0];
			$department_dn = $info[$i]["department"][0];
			$manager_dn = $info[$i]["manager"][0];
                        $dn_dn = $info[$i]["dn"];
			//$mail      = 'daniel.golebiewski@bsb.com.pl';
			echo $login_dn,$mail_dn,$f; 
			$subject = 'SAZ - Nowy Wniosek o Dostep';
$message = "Wygenerowano nowy wniosek od ".$mail_dn."\nNie odpowiadaj na tego maila";
$headers = 'From: robot@saz.bsb.com.pl' . "\r\n" .
   // session_register("mail_dn");
   //session_register("gracz");
  
		header('Location:jestes.php');
    'X-Mailer: PHP/' . phpversion();

mail($mail_dn, $subject, $message, $headers);

    session_start();
		
		$_SESSION['login_dn'] = $login_dn;
		$_SESSION['cn_dn'] = $cn_dn;
		$_SESSION['department_dn'] = $department_dn;
		$_SESSION['manager_dn'] = $manager_dn;
		$_SESSION['mail_dn'] = $mail_dn;
                $_SESSION['dn_dn'] = $dn_dn;
		header('Location:seconlogin.php');
		//header('Location:2.php');

        }
        @ldap_close($ldap);
		
		
    } 
	
	
	
	else {
        $msg = "Invalid email address / password";
        echo $msg;
    }

}else{
?>
    <form action="#" method="POST">
        <label for="username">Użytkownik: </label><input id="username" type="text" name="username" /> 
        <label for="password">Hasło: </label><input id="password" type="password" name="password" />        <input type="submit" name="submit" value="Zaloguj" />
    </form>
<?php } ?> 
