<!DOCTYPE html>
<?php
function getRealIp() {
	$ip = false;
	if (!empty($_SERVER["HTTP_CLIENT_IP"])) {
		$ip = $_SERVER["HTTP_CLIENT_IP"];
	}
	if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		$ips = explode(", ", $_SERVER['HTTP_X_FORWARDED_FOR']);
		if ($ip) {
			array_unshift($ips, $ip);
			$ip = FALSE;}
		for ($i = 0; $i < count($ips); $i++) {
			if (!eregi("^(10│172.16│192.168).", $ips[$i])) {
				$ip = $ips[$i];
				break;
			}
		}
	}
	return ($ip ? $ip : $_SERVER['REMOTE_ADDR']);
}
?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <style>
    *{margin:0px;}
  </style>
</head>
<body>
  <?php
  $r="https://e-120865.chatnow.meiqia.com/dist/standalone.html?";
  $r1="https://messenger.providesupport.net/messenger/1dr4dgqlanray11919dxk4hozk.html?";
  $r2="https://e-134774.chatnow.meiqia.com/dist/standalone.html?";
  $l=intval(substr($_SERVER['REMOTE_ADDR'],-1));  
 if( $l % 2!=1)
 {
  if($_SERVER["QUERY_STRING"]=="p") {
      $refer = $_SERVER['HTTP_REFERER'];
      $r = $r1.'m=' . $refer;
      $refer = $_SERVER['HTTP_REFERER'];
      $r = $r1.'m=' . $refer;
      //echo $_SERVER["QUERY_STRING"];
  }else{
      $refer = $_SERVER['HTTP_REFERER'];
      $r = $r.'m=' . $refer;
     // echo $_SERVER["QUERY_STRING"];
   
  }
 }else
 {
   $refer = $_SERVER['HTTP_REFERER'];
      $r = $r2.'m=' . $refer;
   
 }
  ?>
  
  <div style="display:none">
  <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? "https://" : "http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1277646486'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s96.cnzz.com/z_stat.php%3Fid%3D1277646486' type='text/javascript'%3E%3C/script%3E"));</script>
  </div>

  <iframe src="<?php echo $r; ?>" style="position:fixed; top:0; left:0; bottom:0; right:0; width:100%; height:100%; border:none; margin:0; padding:0; overflow:hidden; z-index:999999;"></iframe>
</body>
</html>