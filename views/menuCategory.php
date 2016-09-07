<div id="menuCategory">
<div id="borderMenuCategory" style="background:#3B61DB; position:relative; height:100%; width:5%; float:right;"></div>

<div style="background:#FF0004" align="center"><span  style="font-size:24px"> Produk Katagori</span></div>

<a href="#">
<div id="FP" style="background:#3B61DB; color:#00E5FF"  onMouseOut=  this.style.background="#F2F1F1">
<span class="glyphicon glyphicon-star" aria-hidden="true" style="font-size:16px"> FAVORIT PRODUK
</span></div></a>

<a href="#">	
<div id="HKT" onMouseOut=  this.style.background="#F2F1F1">
<span class="glyphicon glyphicon-phone" aria-hidden="true" style="font-size:14px"> HP, Komputer & Tablet
</span></div></a>

<a href="#" >
<div id="PE" onMouseOut=  this.style.background="#F2F1F1">
<span class="glyphicon glyphicon-facetime-video" aria-hidden="true" style="font-size:14px"> Peralatan Elektronik 
</span></div></a>

<a href="#" >
<div id="PO" onMouseOut=  this.style.background="#F2F1F1">
<span class="glyphicon glyphicon-knight" aria-hidden="true" style="font-size:14px"> Permainan & Olahraga 
</span></div></a>

<a href="#">
<div id="PRT" onMouseOut=  this.style.background="#F2F1F1">
<span class="glyphicon glyphicon-home" aria-hidden="true" style="font-size:14px"> Perabotan Rumah tangga 
</span></div></a>

<a href="#" >
<div id="VGK" onMouseOut=  this.style.background="#F2F1F1">
<span class="glyphicon glyphicon-cd" aria-hidden="true" style="font-size:14px"> Vidio game & Konsol 
</span></div></a>

<a href="#">
<div id="KS" onMouseOut=  this.style.background="#F2F1F1">
<span class="glyphicon glyphicon-cutlery" aria-hidden="true" style="font-size:14px"> Kuliner & Snack
</span></div></a>

<a href="#">
<div id="BM" onMouseOut=  this.style.background="#F2F1F1">
<span class="glyphicon glyphicon-book" aria-hidden="true" style="font-size:14px"> Buku & Majalah
</span></div></a>

<a href="#">
<div id="IB" onMouseOut=  this.style.background="#F2F1F1">
<span class="glyphicon glyphicon-heart" aria-hidden="true" style="font-size:14px"> Ibu & Bayi 
</span></div></a>

<a href="#">
<div id="TV" onMouseOut=  this.style.background="#F2F1F1">
<span class="glyphicon glyphicon-credit-card" aria-hidden="true" style="font-size:14px"> Tiket & Voucher 
</span></div></a>

<a href="#">
<div id="KJA" onMouseOut=  this.style.background="#F2F1F1">
<span class="glyphicon glyphicon-sunglasses" aria-hidden="true" style="font-size:14px"> Kacamata, jam tangan, aksesoris
</span></div></a>

<a href="#">
<div id="KK" onMouseOut=  this.style.background="#F2F1F1">
<span class="glyphicon glyphicon-plus-sign" aria-hidden="true" style="font-size:14px"> Kesehatan & Kecantikan 
</span></div></a>

<a href="#" >
<div id="F" onMouseOut=  this.style.background="#F2F1F1">
<span class="glyphicon glyphicon-user" aria-hidden="true" style="font-size:14px"> Fashion 
</span></div></a>

<a href="#">
<div id="O" onMouseOut=  this.style.background="#F2F1F1">
<span class="glyphicon glyphicon-wrench" aria-hidden="true" style="font-size:14px"> Otomotif 
</span></div></a>

</div>



<style>
#menuCategory{
	height:92%;
	width:20%;
	background:#F2F1F1;
	position:fixed;
	top:6.5%;
	left:4.5%;
	display:none;
	z-index:10000;
	}

#FP, #HKT, #PO, #PE, #VGK, #F, #TV, #KK, #O, #KS, #IB, #KJA, #PRT, #BM{
	height:30px; padding-top:8px; padding-left:8px;
	}
	
#HKT:hover, #PO:hover, #PE:hover, #VGK:hover, #F:hover, #TV:hover, #KK:hover, #O:hover, #KS:hover, #IB:hover, #KJA:hover, #PRT:hover, #BM:hover{
	color: #FFFFFF;
	}
</style>



<script>
$('#FP').mouseover(function () {
	$(this).css("background", "#3B61DB");
	$(borderMenuCategory).css("background", "#3B61DB");
	});

$('#HKT').mouseover(function () {
	$(this).css("background", "#DC08F9");
	$(borderMenuCategory).css("background", "#DC08F9");
	});
	
$('#PE').mouseover(function () {
	$(this).css("background", "#A306B8");
	$(borderMenuCategory).css("background", "#A306B8");
	});
	
$('#PO').mouseover(function () {
	$(this).css("background", "#FDA3F4");
	$(borderMenuCategory).css("background", "#FDA3F4");
	});
	
$('#PRT').mouseover(function () {
	$(this).css("background", "#D400BE");
	$(borderMenuCategory).css("background", "#D400BE");
	});
	
$('#VGK').mouseover(function () {
	$(this).css("background", "#6BF9F7");
	$(borderMenuCategory).css("background", "#6BF9F7");
	});
	
$('#KS').mouseover(function () {
	$(this).css("background", "#2FD9D7");
	$(borderMenuCategory).css("background", "#2FD9D7");
	});
	
$('#BM').mouseover(function () {
	$(this).css("background", "#88FBA7");
	$(borderMenuCategory).css("background", "#88FBA7");
	});
	
$('#IB').mouseover(function () {
	$(this).css("background", "#07E844");
	$(borderMenuCategory).css("background", "#07E844");
	});
	
$('#TV').mouseover(function () {
	$(this).css("background", "#AFF881");
	$(borderMenuCategory).css("background", "#AFF881");
	});
	
$('#KJA').mouseover(function () {
	$(this).css("background", "#60E60C");
	$(borderMenuCategory).css("background", "#60E60C");
	});
	
$('#KK').mouseover(function () {
	$(this).css("background", "#F7F679");
	$(borderMenuCategory).css("background", "#F7F679");
	});
	
$('#F').mouseover(function () {
	$(this).css("background", "#ECEB0E");
	$(borderMenuCategory).css("background", "#ECEB0E");
	});
	
$('#O').mouseover(function () {
	$(this).css("background", "#F9890B");
	$(borderMenuCategory).css("background", "#F9890B");
	});
	
$('#dropMenu').mouseover(function() {$('#menuCategory').show();});
$('#dropMenu').mouseout(function () {$('#menuCategory').hide();});

$('#menuCategory').mouseover(function() {$('#menuCategory').show();});
$('#menuCategory').mouseout(function () {$('#menuCategory').hide();});
</script>