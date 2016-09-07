<div id="market">

<div id="qyubixMarket" >

</div>

<div id="qyubixBooking" >

</div>

</div>

<style>
#market{
	height:20%;
	width:29%;
	background:#F2F1F1;
	position:absolute;
	top:7%;
	left:27.2%;
	display:none;
	
	}
	
#qyubixMarket{
	height:100%;
	float:right;
	width:50%;
	background:#F10808;
	}
	
#qyubixBooking{
	height:100%;
	width:50%;
	background:#0831F1;
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
	
$('#dropMenu').mouseover(function () {$('#menuCategory').show();});
$('#dropMenu').mouseout(function () {$('#menuCategory').hide();});

$('#menuCategory').mouseover(function () {$('#menuCategory').show();});
$('#menuCategory').mouseout(function () {$('#menuCategory').hide();});
</script>
