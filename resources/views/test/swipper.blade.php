<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Formula 1 Vietnam</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="{{asset('/public/dist/swipper/css/swiper.min.css')}}">
  <!-- Latest compiled and minified CSS & JS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
 

  <!-- Demo styles -->
  <style>
    html, body {
      position: relative;
      height: 100%;
    }
    body {
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color:#000;
      margin: 0;
      padding: 0;
    }
    .swiper-container {
    	width: 100%;
    	height: 90%;
    	margin-top: 10px;
    }
    .container{
    	padding: 0px;
    	background: #eee;
    	margin-top: 350px; 
    	height: 35%;
    	width: 100%;
    }
    .swiper-slide {
      text-align: center;
      font-size: 18px;
      /*background: #fff;*/
      width: 200px;
      padding-top: 65px;
      /* Center slide text vertically */
      border-right: 2px solid #f7f7f7;
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: block;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
      cursor: pointer;
    }
   /* .swiper-slide:nth-child(2n) {
      width: 60%;
    }
    .swiper-slide:nth-child(3n) {
      width: 40%;
    }*/
    .img-country img{
    	height: 50px;
    	width: 80px;
    }
    .img-country{
    	margin-bottom: 5px;
    }
    .name-country{
    	margin-bottom: 50px;
    }
    .time-race{
    	font-size: 20px;
    	font-weight: bold;
    }
	.active-slider{
		width:400px;
	}
  </style>
</head>
<body>
  <!-- Swiper -->
  <div class="container">
  	<div class="swiper-container">
  		<div class="swiper-wrapper">
  			@foreach($races as $race)
  			<?php $data = json_decode($race->country,true);?>
  			<div class="swiper-slide" data-slide-id="{{$race->id}}">
  				<div class="img-country">
  					<img src="https://www.formula1.com/<?php echo $data['image']; ?>">
  				</div>
  				<div class="name-country"><?php echo $data['name']; ?></div>
  				<div class="time-race">
  					 {{$race->date_to}}
  				</div>
  			</div>
  			@endforeach
  		</div>
  		<!-- Add Pagination -->
  		<!-- <div class="swiper-pagination"></div> <--></-->
  	</div>
  </div>
  	
  

  <!-- Swiper JS -->
  <script src="{{asset('/public/dist/swipper/js/swiper.min.js')}}"></script>
  <script src="//code.jquery.com/jquery.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  <!-- Initialize Swiper -->
  <script>
  	var races = <?php echo json_encode($races); ?>;
  	var lastRace = <?php echo json_encode($lastRace); ?>;
  	console.log(lastRace.id);
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 'auto',
      spaceBetween: 0,
      pagination: {
      	el: '.swiper-pagination',
      	clickable: true,
      },on: {
      	init: function () {
      		$('[data-slide-id="'+lastRace.id+'"]').addClass('active-slider');
      		this.slideTo(lastRace.id-5);
      	},
      	click:function(){	
      		var index = swiper.clickedIndex+1;
      		$(".swiper-slide").removeClass("active-slider");
      		$('[data-slide-id="'+index+'"]').addClass('active-slider');
      		swiper.slideTo(swiper.clickedIndex-4);

      	},
      	
      }
    });
    

  </script>
</body>
</html>