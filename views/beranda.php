<br/><br/><br/>
<div class="row">
<div class="col-md-10">
<!-- ===============================TO HANDLE FORM MARKET=====================================-->
<div class="panel panel-default" style="background:#E2F2F5; height:150px; width:100%">
<div class="panel-body"><div class="owl-carousel" id="owl-carousel">
<?php include("connect.php");
$select_post = "select * from mart order by rand()";
$run_posts = mysql_query($select_post);
while ($row = mysql_fetch_array($run_posts)){
$mart_id = $row ['mart_id'];
$mart_description = $row ['mart_description'];
?>
<div style="padding-right:20px; padding-bottom:20px;">
<a href="#" style=" text-decoration:none;"><img src="imageManagement/mart/<?php echo $mart_id; ?>/profile.jpg" height="100px" width="100px"/>
<div style="background:#C9E7EC" align="center"><?php echo $mart_id; ?></div></a> <br/>
</div>	<?php } ?>  </div> </div></div>
<!-- ==========================================================================================-->

<div class="row">
<!-- ===============================TO HANDLE FORM GRAFIK======================================-->
<div class="col-md-2" style="height:400px;">
<a href="#" style=" text-decoration:none;"><div style="background:#C9E7EC; width:100%; padding:10px; font-family:Consolas;" >
Grafik Market</div></a><br/>
<a href="#" style=" text-decoration:none;"><div style="background:#C9E7EC; width:100%; padding:10px; font-family:Consolas;" >
Grafik Produk</div></a><br/>
<a href="#" style=" text-decoration:none;"><div style="background:#C9E7EC; width:100%; padding:10px; font-family:Consolas;" >
Grafik User</div></a><br/>
<a href="#" style=" text-decoration:none;"><div style="background:#C9E7EC; width:100%; padding:10px; font-family:Consolas;" >
Grafik Katagori</div></a><br/>
<a href="#" style=" text-decoration:none;"><div style="background:#C9E7EC; width:100%; padding:10px; font-family:Consolas;" >
Grafik Transaksi</div></a><br/>
<a href="#" style=" text-decoration:none;"><div style="background:#C9E7EC; width:100%; padding:10px; font-family:Consolas;" >
Grafik Status</div></a><br/>
<a href="#" style=" text-decoration:none;"><div style="background:#C9E7EC; width:100%; padding:10px; font-family:Consolas;" >
Grafik Kepuasan</div></a>
</div>
<!-- ==========================================================================================-->

<!-- ===============================TO HANDLE FORM BIG CAROUSEL================================-->
<div class="col-md-10" style=" height:400px;">
<div class="owl-carousel" id="owl-carousel2">
<a href="#"><img src="imageManagement/bigCarousel/1.jpg" height="400px" width="100px"/></a>
<a href="#"><img src="imageManagement/bigCarousel/2.jpg" height="400px" width="100px"/></a>
<a href="#"><img src="imageManagement/bigCarousel/3.jpg" height="400px" width="100px"/></a>
<a href="#"><img src="imageManagement/bigCarousel/4.jpg" height="400px" width="100px"/></a>
<a href="#"><img src="imageManagement/bigCarousel/5.jpg" height="400px" width="100px"/></a>
</a>
</div></div>
<!-- ==========================================================================================-->
</div>

<br/>
<!-- ===============================TO HANDLE FORM PRODUK HANDPHONE======================================-->
<div style="background:#4AF4F7; width:200px; font-size:24px; " align="center" >HANDPHONE</div>
<div style="background:#4AF4F7; width:100%; height:10px; font-size:24px; " align="center" ></div>
<div  style="display: -webkit-flex;  -webkit-flex-flow: row-reverse wrap; display: flex; flex-flow: row wrap; ">
<?php include("connect.php");
$select_post = "select * from product where product_category='hp' order by rand() limit 0,8";
$run_posts = mysql_query($select_post);
while ($row = mysql_fetch_array($run_posts)){
$product_name = $row ['product_name'];
$discount_after = $row ['discount_after'];
$discount = $row ['discount'];
$product_price = $row ['product_price'];
$product_description = $row ['product_description'];
$product_id = $row ['product_id'];
$product_martId = $row ['product_martId'];
$directory = 'imageManagement/mart/'.$product_martId.'/'. $product_martId.$product_id;
$images =  glob($directory.'.*'); 
foreach($images as $image){$image;} 
?>  
<a  id="prodBox" href="#"; style="padding:20px; padding-bottom:0; padding-top:0; ; text-decoration:none; ">
<div id="prodBorder">
<img src= "<?php echo $image; ?>" height="250px" width="220px"/>
<div id="prodText" style="word-wrap: break-word; width:220px;"><?php echo $product_name; ?></div> 
<div class="row">
<div class="col-md-9"> Rp <?php echo number_format($product_price,0,".","."); ?><br/>
<div style="font-size:12px"><strike>Rp <?php echo number_format($discount_after,0,".","."); ?></strike></div></div>
<div class="col-md-3" style="background:#F8A5A6; font-size:24px"><?php echo $discount; ?>% </div></div>
<div id="lihatDetail" style="background:#F737BA;font-size:24px; display:none;" align="center">LIHAT DETAIL</div>
</div></a><?php  } ?>  </div>
<!-- ==========================================================================================-->

<br/><br/><br/><br/><br/><br/>
<!-- ===============================TO HANDLE FORM PRODUK SEPATU======================================-->
<div style="background:#4AF4F7; width:200px; font-size:24px; " align="center" >SEPATU</div>
<div style="background:#4AF4F7; width:100%; height:10px; font-size:24px; " align="center" ></div>
<div  style="display: -webkit-flex;  -webkit-flex-flow: row-reverse wrap; display: flex; flex-flow: row wrap; ">
<?php include("connect.php");
$select_post = "select * from product where product_category='sepatu' order by rand() limit 0,8";
$run_posts = mysql_query($select_post);
while ($row = mysql_fetch_array($run_posts)){
$product_name = $row ['product_name'];
$discount_after = $row ['discount_after'];
$discount = $row ['discount'];
$product_price = $row ['product_price'];
$product_description = $row ['product_description'];
$product_id = $row ['product_id'];
$product_martId = $row ['product_martId'];
$directory = 'imageManagement/mart/'.$product_martId.'/'. $product_martId.$product_id;
$images =  glob($directory.'.*'); 
foreach($images as $image){$image;} 
?>
<a  id="prodBox" href="#"; style="padding:20px; padding-bottom:0; padding-top:0; ; text-decoration:none; ">
<div id="prodBorder">
<img src= "<?php echo $image; ?>" height="240px" width="220px"/>
<div id="prodText" style="word-wrap: break-word; width:220px;"><?php echo $product_name; ?></div> 
<div class="row">
<div class="col-md-9"> Rp <?php echo number_format($product_price,0,".","."); ?><br/>
<div style="font-size:12px"><strike>Rp <?php echo number_format($discount_after,0,".","."); ?></strike></div></div>
<div class="col-md-3" style="background:#F8A5A6; font-size:24px"><?php echo $discount; ?>% </div></div>
<div id="lihatDetail" style="background:#F737BA;font-size:24px; display:none;" align="center">LIHAT DETAIL</div>
</div></a><?php  } ?>  </div>
<!-- ==========================================================================================-->

<br/><br/><br/><br/><br/><br/>
<!-- ===============================TO HANDLE FORM PRODUK PERABOTAN======================================-->
<div style="background:#4AF4F7; width:200px; font-size:24px; " align="center" >PERABOTAN</div>
<div style="background:#4AF4F7; width:100%; height:10px; font-size:24px; " align="center" ></div>
<div  style="display: -webkit-flex;  -webkit-flex-flow: row-reverse wrap; display: flex; flex-flow: row wrap; ">
<?php include("connect.php");
$select_post = "select * from product where product_category='perabotan' order by rand() limit 0,8";
$run_posts = mysql_query($select_post);
while ($row = mysql_fetch_array($run_posts)){
$product_name = $row ['product_name'];
$discount_after = $row ['discount_after'];
$discount = $row ['discount'];
$product_price = $row ['product_price'];
$product_description = $row ['product_description'];
$product_id = $row ['product_id'];
$product_martId = $row ['product_martId'];
$directory = 'imageManagement/mart/'.$product_martId.'/'. $product_martId.$product_id;
$images =  glob($directory.'.*'); 
foreach($images as $image){$image;} 
?>
<a  id="prodBox" href="#"; style="padding:20px; padding-bottom:0; padding-top:0; ; text-decoration:none; ">
<div id="prodBorder">
<img src= "<?php echo $image; ?>" height="240px" width="220px"/>
<div id="prodText" style="word-wrap: break-word; width:220px;"><?php echo $product_name; ?></div> 
<div class="row">
<div class="col-md-9"> Rp <?php echo number_format($product_price,0,".","."); ?><br/>
<div style="font-size:12px"><strike>Rp <?php echo number_format($discount_after,0,".","."); ?></strike></div></div>
<div class="col-md-3" style="background:#F8A5A6; font-size:24px"><?php echo $discount; ?>% </div></div>
<div id="lihatDetail" style="background:#F737BA;font-size:24px; display:none;" align="center">LIHAT DETAIL</div>
</div></a><?php  } ?>  </div>
<!-- ==========================================================================================-->
</div>


<div class="col-md-2" >
<!-- ===============================TO HANDLE FORM SIGN UP======================================-->
<div style="position:fixed; width:15%; top:50px">
<div style="background:#C9E7EC; height:25px; font-size:12px; padding:5px;">Do not have account? Join now!</div>
<div style="background:#FB3535; height:1px;"></div>
<div style="background:#C9E7EC; height:60px; font-size:12px; padding:10px; "><a href="#">
<div type="button"  onclick="signUp()" style="background:#00D9FD; font-size:20px; padding:5px;" align="center">SIGN UP</div>
</a></div></div>
<br/><br/><br/><br/>
<!-- ===============================TO HANDLE FORM SOCIAL======================================-->
<?php include("connect.php");
$select_post = "select * from social order by rand() LIMIT 0,10";
$run_posts = mysql_query($select_post);
while ($row = mysql_fetch_array($run_posts)){
$post_id = $row ['post_id'];
$post_content = $row ['post_content'];
$post_author = $row ['post_author'];
$directory = 'imageManagement/user/'.$post_author.'/profile';
$images =  glob($directory.'.*'); 
$select_post2 = "select * from usermanagement where user_email='".$post_author."'";
$run_posts2 = mysql_query($select_post2);
$user_name = null;
while ($row2 = mysql_fetch_array($run_posts2)){ 
    $user_name= $row2 ['user_name'];	
}
foreach($images as $image){ $image;} 
?>
<div  style="background:#C9E7EC; font-size:14px; font-family:'Gill Sans'; padding:5px;">
<img src= "<?php echo $image; ?>" height="50px" width="50px"/> <?php echo ucwords($user_name); ?></div>
<div  style=" height:100%; border-color:#C9E7EC; border-style:solid; padding:10px; font-size:12px;" align="left">
<?php echo $post_content; ?></div> <br/>
<?php } ?>  </div></a>
<!-- ==========================================================================================-->
</div>


<script>	
$(" #prodBox").hover(function(){
        $(" #prodBorder",this).css("background-color","#AEB4ED");
		$(" #prodBorder",this).css("border","#AEB4ED");
		$(" #prodBorder",this).css("border-style","solid");
		$(" #lihatDetail",this).css("display","block");
        }, function(){
        $(" #prodBorder",this).css("background-color", "#FFFFFF");
		$(" #prodBorder",this).css("border","none");
		$(" #lihatDetail",this).css("display","none");
    });
	
$(document).ready(function(){
  $(".owl-carousel").owlCarousel();	
});

$('#owl-carousel').owlCarousel({
    margin:10,
    loop:true,
    autoWidth:false,
    items:7,
	autoplay:true,
    autoplayTimeout:2000,
	autoplayHoverPause:true,
});

$('#owl-carousel2').owlCarousel({
    margin:10,
    loop:true,
    autoWidth:false,
    items:1,
	autoplay:true,
    autoplayTimeout:5000,
	autoplayHoverPause:true,
	animateOut: 'fadeOut',
});

function signUp() {
    window.open("signUp.php");
}
</script>

<style>
a { color:#000000; }
a:link{ text-decoration:none; }
</style>
