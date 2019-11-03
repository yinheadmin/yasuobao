<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
<div style="display:none">
  <!-- 这里粘贴cnzz的js代码↓ -->
<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? "https://" : "http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1277384236'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s5.cnzz.com/z_stat.php%3Fid%3D1277384236' type='text/javascript'%3E%3C/script%3E"));</script>
  <!-- 这里粘贴cnzz的js代码↑ -->
</div>
  <?php
  $r="https://e-120865.chatnow.meiqia.com/dist/standalone.html?";
  $r1="https://messenger.providesupport.net/messenger/1dr4dgqlanray11919dxk4hozk.html?";
  
  if($_GET["kf"]) {
      $refer = $_SERVER['HTTP_REFERER'];
      $r = $r1.'m=' . $refer;
  }else{
      $refer = $_SERVER['HTTP_REFERER'];
      $r = $r.'m=' . $refer;
   
  }
  ?>
<script>
 	location.href = "<?php echo $r; ?>";
</script>
  
</body>
</html>