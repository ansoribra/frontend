<?php include("panggilLib.php"); ?>
  <link rel="stylesheet" href="lib/jquery-ui/smooth/jquery-ui.css">

<title>Sign Up</title>
</br>
<div align="center">

<form action="onePage/signUpSuccess.php" method="post">  
<md-whiteframe class="md-whiteframe-10dp"  flex-gt-md="50"  layout >
<div ng-app="amtApp" ><div ng-controller="registerController" layout="row" >
<div layout="column" style="width:100%"> <h2> Mendaftar hanya dalam 5 menit</h2>
<div style="background:#1FB322; width:100%; height:1px"></div><div style="background:#FFFFFF; height:50px;" ></div>

<form name="registerForm"><div layout="row">
<md-input-container><label>Nama Depan</label><input ng-model="user.firstName" id="firstName" name="firstName" required>
<div ng-if="registerForm.firstName.$touched" ng-messages="registerForm.firstName.$error"><div ng-message="required">
Nama depan harus diisi</div></div></md-input-container>

<md-input-container><label>Nama Belakang</label><input ng-model="user.lastName" id="lastName" name="lastName" required>
<div ng-if="registerForm.lastName.$touched" ng-messages="registerForm.lastName.$error"><div ng-message="required">
Nama belakang harus diisi</div></div></md-input-container>

<md-input-container ><label>Gender</label><md-select ng-model="user.gender" name="gender" md-selected="gender">
<md-option value="MALE" >Lelaki</md-option><md-option value="FEMALE">Perempuan</md-option>
</md-select></md-input-container></div>

<input  id="genderStore" name="genderStore" style="display:none" value="{{user.gender}}">

<div layout="row">
<md-input-container><label>Email</label><input ng-model="user.email" type="email" name="email" required>
<div ng-if="registerForm.email.$touched" ng-messages="registerForm.email.$error"><div ng-message="required">
Email harus diisi</div></div></md-input-container>

<md-input-container><label>Password</label><input ng-model="user.pass" type="password" name="pass" required>
<div ng-if="registerForm.pass.$touched" ng-messages="registerForm.pass.$error"><div ng-message="required">
Password harus diisi</div></div></md-input-container>
</div>

<div layout="row">
<md-input-container><label>Tanggal Lahir</label>
<input ng-model="user.birth" type="text" id="tanggal" type="date" name="birth" rows="5" required>
<div ng-if="registerForm.birth.$touched" ng-messages="registerForm.birth.$error"><div ng-message="required">
tanggal harus diisi</div></div></md-input-container>
</div>

<div layout="row">
<md-input-container><label>Alamat</label>
<textarea ng-model="user.address"   name="address" rows="5" required md-select-on-focus style="height:100; width:400px"></textarea>
<div ng-if="registerForm.address.$touched" ng-messages="registerForm.address.$error"><div ng-message="required">
Alamat harus diisi</div></div></md-input-container>
</div>
</form>
            
<div layout="row"><div flex offset="33">
</div><md-button flex>cancel</md-button>
<md-button onclick="kirim()" type="submit" flex class="md-raised md-primary" ng-disabled="registerForm.$invalid">Register</md-button></div></div></div></div></md-whiteframe></form></div>


<script>
var amtApp = angular.module('amtApp', ['ngAnimate','ngAria','ngMaterial','ngMessages','register']);   
angular.module('register', []);
amtApp.config(function($mdThemingProvider) {
$mdThemingProvider.theme('default').primaryPalette('teal').accentPalette('amber').backgroundPalette('grey').warnPalette('deep-orange');
});

angular.module('register').controller('registerController', registerController);
registerController.$inject = ['$scope'];

function registerController($scope){
 	init();
function init() {
	$scope.user = {gender : " "}}
}

    $( "#tanggal" ).datepicker({
      changeMonth: true,
      changeYear: true
    });


function kirim() {
	
<?php
$to = "baima@rocketmail.com, ansarimilah@gmail.com";
$subject = "HTML email";

$message = "<div style='background:#1FB322'> Hello ". $subject." </div>";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <qyubix@codewealth.com>' . "\r\n";
$headers .= 'Cc: ansoribra@gmail.com' . "\r\n";

mail($to,$subject,$message,$headers);
?> 
		
}
</script>

<style>
md-whiteframe {
  margin: 15px;
  padding: 25px;
}
</style>