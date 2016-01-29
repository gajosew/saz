<?php
session_start();
/**
 * Created by Joe of ExchangeCore.com
 */
if(isset($_POST['username']) && isset($_POST['password'])){

    $adServer = "ldap://172.31.16.44";
	
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
		
            $userDn = $info[$i]["distinguishedname"][0]; 
			$login_dn = $info[$i]["samaccountname"][0];
			$mail_dn = $info[$i]["mail"][0];
			//$mail      = 'daniel.golebiewski@bsb.com.pl';
			echo $login_dn,$mail_dn,$f; 
			$subject = 'SAZ - Nowy Wniosek o Dostep';
$message = "Wygenerowano nowy wniosek od ".$mail_dn."\nNie odpowiadaj na tego maila";
$headers = 'From: robot@saz.bsb.com.pl' . "\r\n" .
    
    'X-Mailer: PHP/' . phpversion();

mail($f, $subject, $message, $headers);
        }
        @ldap_close($ldap);
    } else {
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
