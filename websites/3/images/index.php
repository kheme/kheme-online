<?require "../xpanel/conn.php";?>
<!--backandfront-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<script>
function ful(pic) {
if (pic.indexOf("preview.gif")==-1) {window.open("../gallery/full.php?img="+pic,'full','top=0,left=0')}
}
</script>
<meta http-equiv="Content-Language" content="en-us">
<title>Excalibur Benin Hotel - Excalibur Benin Hotel Photo Gallery - a beautiful 
expression of hospitality, a rear definition of elegance</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<meta name="description" content="Excalibur Benin Hotel Photo Gallery, screen shots of our luxurious hotel, inside and outside">
<meta name="keywords" content="photo,photo gallery,gallery,pictures,screenshots,previews">
<link rel="stylesheet" type="text/css" href="../style.css">
<script>
function load() {
images=new Array(<?
if (!isset($_GET['group'])) {$group="suit";}
else {$group=$_GET['group'];}
$dir=d("img/$group");
$string="";
if (is_dir($dir)) {
if ($dh = opendir($dir)) {
while (($file = readdir($dh))!==false) {
if (filetype($dir.$file)!="dir" && $file!=="index.php" && $file!=="." && $file!==".." && $file!=="_vti_cnf") {
$string=$string."'http://localhost/excalibur/img/$group/$file',";
}
}
closedir($dh);
}
}
$string=substr($string,0,strrpos($string,','));
echo $string;
?>)
Objs=new Array()
total=images.length
loaded=0
error=0
ul=new Array()
for (i=0; i<images.length; i++) {
Objs[i] = new Image();
Objs[i].onload = a;
Objs[i].onerror = b;
Objs[i].src = images[i];
}
function a() {
loaded++
bar.style.width=Math.round(loaded/total*100)+"%"
per.innerHTML=Math.round(loaded/total*100)+"% done!"
window.status="Loading images ["+Math.round(loaded/total*100)+"%] done"
if (total==loaded+error) {lo.style.display='none';page.style.display='block';setTimeout("window.status=''",2000);
if (error!=0) {alert('Unable to load '+error+' image(s)')}}
}
}
function b() {
error++
bar.style.width=Math.round(loaded/total*100)+"%"
per.innerHTML=Math.round(loaded/total*100)+"% done!"
window.status="Loading images ["+Math.round(loaded/total*100)+"%] done"
if (total==loaded+error) {lo.style.display='none';page.style.display='block';setTimeout("window.status=''",2000);
if (error!=0) {alert('Unable to load '+error+' image(s)')}}
}
setTimeout("load()",0)
</script>
</head>

<body onload="">
<table align=center id="lo" width="100%" cellspacing="3" cellpadding="3" style="font-family:Verdana;font-size:10pt;display:block" height="100%">
<tr>
<td width="100%" colspan="3">
<p align="center">Loading Photo gallery, please wait ...</td>
</tr>
<tr>
<td width="10%">Loading</td>
<td width="70%"><div style="border:1px outset black">
<div id=bar style="background:#cccccc;width:0px; height:0px"></div></div></td>
<td width="20%" id=per>&nbsp;</td>
</tr>
<tr>
<td width="100%" colspan="3">
<p align="center">
<a href="#" onclick="page.style.display='block';lo.style.display='none'">Skip 
loading</a></td>
</tr>
</table>

<div style="display:none" id=page>
<table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td><img src="top.jpg" width="761" height="140"></td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
</table>
<table width="760" height="235" border="0" align="center" cellpadding="0" cellspacing="5">
<tr>
<td width="172" rowspan="2" valign="top"><?=links();?></td>
<td width="433" height="5%" valign="top" bgcolor="#FFFFFF" class="around"><b>
<a name="head">:: 
Photo Gallery</a> &gt; <?=@$_GET['group'];?></b></td>
<td width="135" rowspan="2" bgcolor="#FFFFFF" class="around" align=center valign="top">
Please select an image to view below
<div style="overflow-y:scroll;height:300">
<?
if (!isset($_GET['group'])) {$group="suit";}
else {$group=$_GET['group'];}
$dir=d("img/$group");
if ($handle = @opendir($dir)) {
while (false !== ($file = readdir($handle))) { 
if (filetype($dir.$file)!="dir") {
if ($file==".." || $file=="." || $file=="index.php" || $file=="preview.gif") {echo "";}
else {echo "<img onclick='preview.src=this.src' style='cursor:hand' title='Excalibur Benin Hotel' src='../img/$group/$file' border=1 bordercolor=#4786B2 styl='width:100%' height=100><br><br>";}
}
}
closedir($handle); 
}
?>
</div>
</td>
</tr>
<tr>
<td width="433" height="95%" valign="top" bgcolor="#FFFFFF" class="around">
<div style="width:100%;height:100%">
<p align="center">
<img ondblclick='ful(this.src)' src="../img/preview.gif" style="height:300" id=preview align="middle" title='Double click for full-screen preview!'>
</div>
&nbsp;</tr>
<tr><td colspan="3">
<p align="center">Select Photo Group:
<select size="1" onchange="top.location='?group='+this.options[this.selectedIndex].value" name="group" style="font-family: Verdana; font-size: 8pt; border: 1px solid #C0C0C0">
<option <? if (isset($_GET['group'])) {if ($_GET['group']=="suit") {echo "selected";}}?> value="suit">Suits</option>
<option <? if (isset($_GET['group'])) {if ($_GET['group']=="cafe") {echo "selected";}}?> value="cafe">Cafe</option>
<option <? if (isset($_GET['group'])) {if ($_GET['group']=="gymnasium") {echo "selected";}}?> value="gymnasium">Gymnasium</option>
<option <? if (isset($_GET['group'])) {if ($_GET['group']=="inside") {echo "selected";}}?> value="inside">Inside Hotel</option>
<option <? if (isset($_GET['group'])) {if ($_GET['group']=="outside") {echo "selected";}}?> value="outside">Outside Hotel</option>
<option <? if (isset($_GET['group'])) {if ($_GET['group']=="jazz") {echo "selected";}}?> value="jazz">Live Jazz</option>
<option <? if (isset($_GET['group'])) {if ($_GET['group']=="berbeque") {echo "selected";}}?> value="barbeque">Barbeque</option>
</select></td></tr>
</table>
<?=lab();?>
</div>
</body>
</html>