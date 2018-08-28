<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Formula 1 Vietnam</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <link rel="apple-touch-icon" sizes="57x57" href="/public/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/public/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/public/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/public/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/public/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/public/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/public/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/public/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/public/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="/public/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/public/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="/public/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/public/favicon/favicon-16x16.png">
  <link rel="manifest" href="/public/favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="{{asset('/public/dist/swipper/css/swiper.min.css')}}">
  <!-- Latest compiled and minified CSS & JS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
 

  <!-- Demo styles -->
  <link rel="stylesheet" type="text/css" href="{{asset('/public//css/swiper.css')}}">
</head>
<body>
  <!-- Swiper -->

  <div class="container">
  	<div class="swiper-container">
  		<div class="swiper-wrapper">
  			@foreach($races as $race)
  			<?php 
  			date_default_timezone_set('Asia/Ho_Chi_Minh');
  			$calendarOfRace = [];
  			foreach ($calendars as $value) {
  				if($race->id == $value->id_race){
  					$calendarOfRace[] = $value;
  				}
  			}
  			// echo  date('d.m.Y H:i:s', $calendarOfRace[0]->start+$calendarOfRace[0]->difference*3600);die;
  			?>
  			<?php $data = json_decode($race->country,true);?>
  			<div class="swiper-slide" data-slide-id="{{$race->id}}">
  				<div class="img-country">
  					<img src="https://www.formula1.com/<?php echo $data['image']; ?>">
  				</div>
  				<div class="name-country"><?php echo $data['name']; ?></div>
  				<div id="content-race">
  					<div class="name-race"><a href="https://www.formula1.com/{{$race->url_detail_race}}">{{$race->name_race}}</a></div>
  					<div class="time-race">{{$race->date_from}} -  {{$race->date_to}}</div>
  					<div class="calendar-race">
						<?php  ?>
  						<ul class="practice-race">
  							<li>
  								<span class="race-type">Practice 1</span>
  								<time class="day" datetime="Aug 24 2018 11:00">
  									Fri
  								</time>
  								<span class="race-time">
  									<time class="clock-24" datetime="Aug 24 2018 11:00">
  										<?php  echo date('H:i',$calendarOfRace[0]->start + $calendarOfRace[0]->difference*3600); ?>
  									</time>
  									–
  									<time class="clock-24" datetime="Aug 24 2018 12:30">
  										<?php echo date('H:i',$calendarOfRace[0]->end + $calendarOfRace[0]->difference*3600); ?>
  									</time>
  								</span>
  							</li>
  							<li>
  								<span class="race-type">Practice 2</span>
  								<time class="day" datetime="Aug 24 2018 11:00">
  									Fri
  								</time>
  								<span class="race-time">
  									<time class="clock-24" datetime="Aug 24 2018 11:00">
  										<?php echo date('H:i',$calendarOfRace[1]->start + $calendarOfRace[1]->difference*3600); ?>
  									</time>
  									–
  									<time class="clock-24" datetime="Aug 24 2018 12:30">
  										<?php echo date('H:i',$calendarOfRace[1]->end + $calendarOfRace[1]->difference*3600); ?>
  									</time>
  								</span>
  							</li>
  							<li>
  								<span class="race-type">Practice 3</span>
  								<time class="day" datetime="Aug 24 2018 11:00">
  									Fri
  								</time>
  								<span class="race-time">
  									<time class="clock-24" datetime="Aug 24 2018 11:00">
  										<?php echo date('H:i',$calendarOfRace[2]->start + $calendarOfRace[2]->difference*3600); ?>
  									</time>
  									–
  									<time class="clock-24" datetime="Aug 24 2018 12:30">
  										<?php echo date('H:i',$calendarOfRace[2]->end + $calendarOfRace[2]->difference*3600); ?>
  									</time>
  								</span>
  							</li>
  						</ul>
  						<ul class="main-race">
  							<li>
  								<span class="race-type">Qualifying</span>
  								<time class="day" datetime="Aug 24 2018 11:00">
  									Sat
  								</time>
  								<span class="race-time">
  									<time class="clock-24" datetime="Aug 24 2018 11:00">
  										<?php echo date('H:i',$calendarOfRace[3]->start + $calendarOfRace[3]->difference*3600); ?>
  									</time>
  									–
  									<time class="clock-24" datetime="Aug 24 2018 12:30">
  										<?php echo date('H:i',$calendarOfRace[3]->end + $calendarOfRace[3]->difference*3600); ?>
  									</time>
  								</span>
  							</li>
  							<li>
  								<span class="race-type">Main race</span>
  								<time class="day" datetime="Aug 24 2018 11:00">
  									Sun
  								</time>
  								<span class="race-time">
  									<time class="clock-24" datetime="Aug 24 2018 11:00">
  										<?php echo date('H:i',$calendarOfRace[4]->start + $calendarOfRace[4]->difference*3600); ?>
  									</time>
  									–
  									<time class="clock-24" datetime="Aug 24 2018 12:30">
  										<?php echo date('H:i',$calendarOfRace[4]->end + $calendarOfRace[4]->difference*3600); ?>
  									</time>
  								</span>
  							</li>
  							<div class="container-clock">
  								<article class="clock">
  									<div class="hours-container">
  										<div class="hours" style="transform: rotateZ(458.5deg);"></div>
  									</div>
  									<div class="minutes-container" data-second-angle="306">
  										<div class="minutes" style="transform: rotateZ(102deg);"></div>
  									</div>
  									<div class="seconds-container">
  										<div class="seconds" style="transform: rotateZ(306deg);"></div>
  									</div>
  								</article>
  							</div>
  						</ul>
  					</div>
  				</div>
  				<div class="time-main-race">
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
  	var calendars = <?php echo json_encode($calendars); ?>;

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
      		var country = JSON.parse(lastRace.country);

      		$(".swiper-slide #content-race").hide();
      		$(".active-slider .time-main-race").hide();
      		$(".active-slider #content-race").show();

      		// $('.active-slider').html(html);
      		
      	},
      	click:function(){	
      		var index = swiper.clickedIndex+1;
      		$(".swiper-slide").removeClass("active-slider");
      		$(".swiper-slide .time-main-race").show();
      		$('[data-slide-id="'+index+'"]').addClass('active-slider');
      		swiper.slideTo(swiper.clickedIndex-4);

      		$(".swiper-slide #content-race").hide();
      		$(".active-slider .time-main-race").hide();
      		$(".active-slider #content-race").show();

      	},
      	
      }
     
    });
    

  </script>
  <script type="text/javascript">
	
	this.initLocalClocks();
	function initLocalClocks() {	
		var date = new Date;
		var seconds = date.getSeconds();
		var minutes = date.getMinutes();
		var hours = date.getHours();
		var hands = [
		{
			hand: 'hours',
			angle: (hours * 30) + (minutes / 2)
		},
		{
			hand: 'minutes',
			angle: (minutes * 6)
		},
		{
			hand: 'seconds',
			angle: (seconds * 6)
		}
		];
		for (var j = 0; j < hands.length; j++) {
			var elements = document.querySelectorAll('.' + hands[j].hand);
			for (var k = 0; k < elements.length; k++) {
				elements[k].style.webkitTransform = 'rotateZ('+ hands[j].angle +'deg)';
				elements[k].style.transform = 'rotateZ('+ hands[j].angle +'deg)';
				if (hands[j].hand === 'minutes') {
					elements[k].parentNode.setAttribute('data-second-angle', hands[j + 1].angle);
				}
			}
		}
	}
</script>
</body>
</html>