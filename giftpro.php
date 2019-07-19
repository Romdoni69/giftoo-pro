<?php
$bander= "
\033[92m╔══╗───╔═╗─╔╗─────────  \033[1;36m╔══╗───────
\033[92m║╔╗║───║╔╝╔╝╚╗────────  \033[1;36m║╔╗║───────
\033[92m║╚╝║╔╗╔╝╚╗╚╗╔╝╔══╗╔══╗  \033[1;36m║╚╝║╔═╗╔══╗
\033[92m╚═╗║─╣╚╗╔╝─║║─║╔╗║║╔╗║  \033[1;36m║╔═╝║╔╝║╔╗║
\033[92m╔═╝║║║─║║──║╚╗║╚╝║║╚╝║  \033[1;36m║║──║║─║╚╝║
\033[92m╚══╝╚╝─╚╝──╚═╝╚══╝╚══╝  \033[1;36m╚╝──╚╝─╚══╝";
echo $bander."\n\n";



echo "email Coinbase ?\nInput : ";
$akun = trim(fgets(STDIN));
echo "Password ?\nInput : ";
$pass = trim(fgets(STDIN));
///////////////////////////////////////////
$login = "https://giftoopro.xyz/app/api/v1/userLogin.php";
$ua    = array('User-Agent: Dalvik/2.1.0 (Linux; U; Android 7.0; 5061 Build/NRD90M)');
$data  = "email=".$akun."&password=".$pass;
$ch = curl_init ();
	curl_setopt ($ch, CURLOPT_URL, $login);
	curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt ($ch, CURLOPT_POST, 1);
	curl_setopt ($ch, CURLOPT_HTTPHEADER, $ua);
	curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt ($ch, CURLOPT_POSTFIELDS, $data);
$result = curl_exec ($ch);
curl_close($ch);
$json  = json_decode($result);
$id    = ($json->id);
$email = ($json->email);
$hash  = ($json->hash);
$spin  = "https://giftoopro.xyz/app/api/v1/user_data.php?email=".$email."&hash=".$hash."&column=token";
$bal = "https://giftoopro.xyz/app/api/v1/user_data.php?email=".$email."&hash=".$hash;
$ch = curl_init ();
        curl_setopt ($ch, CURLOPT_URL,$bal);
        curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt ($ch, CURLOPT_HTTPHEADER, $ua);
        curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
$result = curl_exec ($ch);
curl_close($ch);
$json = json_decode($result,true);
$nama = $json["datas"][0]["fname"];
$poin = $json["datas"][0]["point"];
echo "\033[92m[\033[1;37m-\033[92m]\033[1;37m".$nama."  \033[92m[\033[1;37m+\033[92m]\033[1;37mPoint: ".$poin."\n";
sleep(10);
		while(True){
$ch = curl_init ();
        curl_setopt ($ch, CURLOPT_URL,$spin);
        curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt ($ch, CURLOPT_HTTPHEADER, $ua);
        curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
$result = curl_exec ($ch);
curl_close($ch);
$json = json_decode($result);
$t    = ($json->token);
sleep(15);
$claim = "https://giftoopro.xyz/app/api/v1/ckdata.php?email=".$email."&hash=".$hash."&t=".$t;
$ch = curl_init ();
        curl_setopt ($ch, CURLOPT_URL,$claim);
        curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt ($ch, CURLOPT_HTTPHEADER, $ua);
        curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
$result = curl_exec ($ch);
curl_close($ch);
$json = json_decode($result);
$mes = ($json->message);
echo "\033[1;37m[\033[1;31m+\033[1;37m]\033[92m".$mes."\n";
sleep(5);
}















?>
