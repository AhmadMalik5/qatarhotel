<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Qatar Hotel</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" type="image/x-icon" href="images/trans.png">
<link rel="stylesheet" href="css/style1.css">
<link rel="stylesheet" href="_bootstrap/css/bootstrap.css" class="css" />
<link href='custom.css' rel='stylesheet' type='text/css'>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
 <link rel="stylesheet" type="text/css" media="screen" href="http://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.css" />
<style>


.vip11
{
  margin-top: 40px;

}

@media screen and (max-width: 844px){

  .vip11
  {
    margin-top: 0px;
  }
}

    a.fancybox img {
        border: none;
        box-shadow: 0 1px 7px rgba(0,0,0,0.6);
        -o-transform: scale(1,1); -ms-transform: scale(1,1); -moz-transform: scale(1,1); -webkit-transform: scale(1,1); transform: scale(1,1); -o-transition: all 0.2s ease-in-out; -ms-transition: all 0.2s ease-in-out; -moz-transition: all 0.2s ease-in-out; -webkit-transition: all 0.2s ease-in-out; transition: all 0.2s ease-in-out;
    } 
   
</style>
</head>
<body>
<?php require_once'navbar.php';?>
<img src="images/6151704.jpg" class="img-responsive" alt="">

<div class="container">
	<div class="row" style="margin-bottom: 5px">
	<div class="col-sm-12">
		<h3 style="font-family:LucidaBright;margin-top: 45px; " class="shadow new1  ">❏&nbsp;&nbsp;&nbsp;&nbsp;QATAR HOTEL BAHAWALPUR RESTAURANTS</h3>
		<p align="justify" style="font-size: 17px">The restaurants in the Qatar banquet hotel bahawalpur serve local and international favourites from the hearty Super Breakfast Buffet to mouth-watering dinner, our on-site dining venues serve a variety of fare. </p>
		<p align="justify" style="font-size: 17px">The Qatar banquet hotel bahawalpur offers a variety of the best restaurants for a diverse & memorable dining experience. </p>
	</div>
	</div>
	<div class="row" style="margin-bottom: 10px">
		<div class="col-sm-4"><img src="images/food1.jpg" alt="" class="img-responsive fancybox"></div>
		<div class="col-sm-4"><img src="images/food2.jpg" alt="" class="img-responsive fancybox"></div>
		<div class="col-sm-4"><img src="images/food3.jpg" alt="" class="img-responsive fancybox"></div>
	</div>
		<div class="row">
		<div class="col-sm-4"><img src="images/food4.jpg" alt="" class="img-responsive fancybox"></div>
		<div class="col-sm-4"><img src="images/food5.jpg" alt="" class="img-responsive fancybox"></div>
		<div class="col-sm-4"><img src="images/food6.jpg" alt="" class="img-responsive fancybox"></div>
	</div>
</div>
		
<br>





<?php require_once'footer.php';?>	


	<script type="text/javascript" src="_bootstrap/js/jquery-3.1.1.js"></script>
	<script type="text/javascript" src="_bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.pack.min.js"></script>
<script type="text/javascript">
    $(function($){
        var addToAll = false;
        var gallery = true;
        var titlePosition = 'inside';
        $(addToAll ? 'img' : 'img.fancybox').each(function(){
            var $this = $(this);
            var title = $this.attr('title');
            var src = $this.attr('data-big') || $this.attr('src');
            var a = $('<a href="#" class="fancybox"></a>').attr('href', src).attr('title', title);
            $this.wrap(a);
        });
        if (gallery)
            $('a.fancybox').attr('rel', 'fancyboxgallery');
        $('a.fancybox').fancybox({
            titlePosition: titlePosition
        });
    });
    $.noConflict();
</script>
   <script src="validator.js"></script>
        <script src="contact.js"></script>
</body>
</html>