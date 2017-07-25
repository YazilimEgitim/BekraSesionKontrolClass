<?php 
class sesionkontrol{
//-------------------------------------------------------------------------\\\  
	public function Login_kontrol() {
      session_start();
 if(!isset($_SESSION['login'])){
  return false;
 }
else
{
 return true;
}
//-------------------------------------------------------------------------\\ 
 } 
}
?>

//-------------Bu mimariyi sayfalarınızda kullanacaksınız-----------------------//
<?php              
include_once '../sayfaguvenlik.php';
$ysf_gvnk = new sayfaguvenlik();
$ysf_gvnk1 = $ysf_gvnk->sesionkontrol();
if($ysf_gvnk1==true)
{
//Burada yapmak istediklerinizi yazıyorsunuz.Çünkü kullanıcı girişi yapılmış oluyor.	
}
else{
//Burada kullanıcı girişi yapılmamış oluyor.
//Yönlendirme yapabilirsiniz.Benim tavsiyem login girişine yapınız.Yetkisiz tarzı sayfalara yönlendirirseniz hackerlar için biraz daha saldırın demiş olursunuz.
//Çünkü Hackerlar yetkisiz girişleri sever ve girmek için bu sefer siteyi detaylı tararmaya başlayabilirler.	
}
?>
//-------------Bu mimariyi sayfalarınızda kullanacaksınız-----------------------//