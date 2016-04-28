<?php



$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$mob=$_POST['mob'];
$cname=$_POST['cname'];
$dname=$_POST['dname'];
$tname=$_POST['tname'];
$website=$_POST['website'];
$Address=$_POST['Address'];
$select=rand(1,10);
if($select<=5)
$img=imagecreatefromjpeg("sample.jpeg");
else
$img=imagecreatefromjpeg("sample2.jpg");

$clr = imagecolorallocate($img, 0, 0, 0);
$clrr=imagecolorallocate($img, 65, 65, 65);
$font_path = 'OpenSans-Regular.ttf';
$font_name= 'OpenSans-SemiBold.ttf';
$name=$fname.' '.$lname;
$mobile='Mobile: '.$mob;
imagettftext($img, 24, 0, 60, 50, $clr,$font_name, $name);
imagettftext($img, 12, 0, 60, 110, $clrr,$font_path, $tname);
imagettftext($img, 12, 0, 60, 135, $clrr,$font_path, $dname);
imagettftext($img, 12, 0, 60, 180, $clrr,$font_path, $email);
imagettftext($img, 12, 0, 60, 205, $clrr,$font_path, $website);
imagettftext($img, 12, 0, 60, 250, $clrr,$font_path, $mobile);
imagettftext($img, 12, 0, 60, 290, $clrr,$font_path, $cname);
imagettftext($img, 12, 0, 60, 315, $clrr,$font_path, $Address);
$pa=rand(1000,10000);
$path='upload/'.$pa.'.jpg';
imagejpeg($img,$path);
imagedestroy($img);

?>
<html>
<body>


	<img src="<?php echo $path; ?>">

</body>

</html>