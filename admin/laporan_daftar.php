<?php
session_start();
if (empty($_SESSION['user_id']) AND empty($_SESSION['pass'])){
////header ('location:home.php');
}
else {

}	

include ("fungsi.php");
if ($_GET['act']=="del") hapus_daftar();		  
				  
?>
				  
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>.: Laporan Daftar :.</title>
<script type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
<style type="text/css">
<!--
#Layer1 {
	position:absolute;
	left:113px;
	top:434px;
	width:797px;
	height:41px;
	z-index:1;
}
.style1 {color: #FFFFFF}
.style2 {color: #FFFFFF; font-weight: bold; }
.style3 {font-size: 24px}
.style4 {font-size: 18px}
.style5 {font-family: Arial, Helvetica, sans-serif}
-->
</style>
</head>

<body onLoad="MM_preloadImages('gbr/image2.png','gbr/home2.jpg','gbr/guru2.jpg','gbr/nilai2.jpg','gbr/pengumuman.jpg','gbr/komentar2.jpg','gbr/logout2.jpg')" tracingsrc="" tracingopacity="80">
<table width="100%" height="100%" border="0" align="center" background="gbr/image1.jpg"  >
  <tr>
    <td background="gbr/BRULERK01 (38).jpg"><table width="100%" border="0" align="center">
      <tr>
        <th height="457" scope="col">
		<?php
		///////include ("header.php");
		?>
          <table width="100%" border="0" align="center" bordercolor="#000000">
            <tr>
              <th bgcolor="#FFFFFF" scope="col">
			  <?php
			  /////include ("laporan-daftar.php");
			  ?>
			  </th>
            </tr>
          </table>
          <table width="100%" height="304" border="0" align="center">
            <tr>
              <td bgcolor="#6666666">
			  <table width="100%" border="0">
  <tr>
    <td><div align="center" class="style2">
      <p class="style5"><span class="style3">Laporan semua Pemesan</span> <br/>
   
</table>

			  
			  <table width="100%" border="0" align="center">
                <tr>
                  <td width="10%" bgcolor="#0000FF"class="style1"><div align="center">id pemesanan</div></td>
                  <td width="15%" bgcolor="#0000FF" class="style1"><div align="center">Nama pemesan</div></td>
                  <td width="10%" bgcolor="#0000FF" class="style1"><div align="center">tanggal pemesann</div></td>
				  <td width="10%" bgcolor="#0000FF" class="style1"><div align="center">kota pemesan</div></td>
				  <td width="15%" bgcolor="#0000FF" class="style1"><div align="center">Alamat pemesan</div></td>
                  <td width="10%" bgcolor="#0000FF" class="style1"><div align="center">telpon pemesan</div></td>
                  <td width="7%" bgcolor="#0000FF" class="style1"><div align="center">keterangan</div></td>
				  <td width="7%" bgcolor="#0000FF" class="style1"><div align="center">Hapus</div></td>
				  <td width="7%" bgcolor="#0000FF" class="style1"><div align="center">Edit</div></td>
			
                </tr>
				<?php
					list_daftar();
				?>
              
          </table>
		
		 
      </tr>
    </table>
	  <table width="600" border="0" align="center">
        
      </table>
    <p align="right"><a href="nama_kepsek.php" >Cetak Laporan &nbsp; </a></p></td>
  </tr>
</table>
</body>
</html>