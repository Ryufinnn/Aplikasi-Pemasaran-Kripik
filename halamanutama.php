<html>
<head><title>TokoOnline.com</title>
<script language="javascript" src="./include/klik.js"></script>
</head>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<body background="./img/background.jpg">
<p>&nbsp;</p>

<table width="1001" height="300" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
<tr valign="top">
	<td height="10" colspan="7" align="center"><? include "./include/banner.php"; ?></td>
</tr>


<tr>
	<td width="13" valign="top" align="left"  background="./img/b-kiri.jpg">&nbsp;</td>
	<td width="38" valign="top" colspan="0" rowspan="0">
		<? include "menu1.php";?>
		<? include "menu2.php";?><br>
		<? include "counter.php"; ?><br>
		<? include "jam.php"; ?><br>
	</td>
	
	<td width="23" valign="top" align="right" background="./img/b-kanan.jpg">&nbsp;</td>
	<td width="730" valign="top" align="center"><? include "isi.php" ?>	</td>		
	<td width="12" valign="top" align="right" background="./img/b-kiri.jpg">&nbsp;</td>
	<td width="166" valign="top" align="center"><br>
	<? 
	
	if (session_is_registered('user_id'))
	{
		include "status.php";
	}else{
		include "login.php";
	} 
	
	?>
	<br>
	<? include "voting.php"; ?><br>
	<? //include "./include/slide.php"; ?>
	<br><br>
	<a href="ymsgr:sendIM?izar"><img border="0" src="./img/ym.jpg" title="YM : izar"> </a><br><br>
	<a href="http://www.facebook.com/izar" target="_blank"><img border="0" src="./img/fb.jpg" title="FB : n_izar@yahoo.com"> </a> <br><br>
	<a href="http://izar.ac.id" target="_blank"><img src="./img/gundar.jpg" width="114" height="115" border="0" title="Universitas Putra Indonesia"> </a>	<br><br></td>
	<td width="19" valign="top" align="right" background="./img/b-kanan.jpg">&nbsp;</td>
</tr>

<tr valign="top">
	<td height="18" colspan="7" align="center"><? include "./include/footer.php"; ?></td>
</tr>
</table>
<p>&nbsp;</p>
</body>
</html>