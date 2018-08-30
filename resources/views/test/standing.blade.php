<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>standings</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<style type="text/css">
	td {
		padding: 14px 10px 13px;
		vertical-align: middle;
	}
	.position {
		font-weight: 700;
		width: 55px;
		text-align: center;
		-ms-font-feature-settings: normal;
	}
	 .team-number {
		font-size: 14px;
		font-size: 1.4rem;
		line-height: 14px;
		font-weight: 700;
		background: #b0b0b0;
		color: #fff;
		display: inline-block;
		padding: 7px 10px 7px 0;
		width: 40px;
		text-align: center;
		-webkit-transform: skew(-30deg);
		-moz-transform: skew(-30deg);
		-o-transform: skew(-30deg);
		-ms-transform: skew(-30deg);
		transform: skew(-30deg);
		position: relative;
	}
	.team-number .text {
		display: inline-block;
		-webkit-transform: skew(30deg);
		-moz-transform: skew(30deg);
		-o-transform: skew(30deg);
		-ms-transform: skew(30deg);
		transform: skew(30deg);
	}
	.team-number .color {
		width: 10px;
		position: absolute;
		right: 0;
		top: 0;
		height: 100%;
		background: #000;
	}
	.name .last-name {
		text-transform: uppercase;
		font-weight: 700;
	}

	.name {
		text-transform: none;
		padding-left: 6px;
		font-family: 'F1BoldRegular',Helvetica,sans-serif;
		font-size: 13px;
		font-size: 1.3rem;
		color: #15151e;
	}
	.name .tla {
		display: none;
	}
	.country {
		text-transform: uppercase;
		color: gray;
	}
	.team {
		font-weight: 600;
		color: gray;
		text-transform: uppercase;
	}
	.car {
		padding-top: 10px;
		padding-bottom: 10px;
	}
	.car img {
		width: 126px;
	}
	.standings .points {
		font-weight: 700;
		text-align: right;
	}

	</style>
</head>
<body>

	<?php echo $data; ?>
	
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script type="text/javascript">
	$.each($('.car img'),function(key, value){
		var src= $(value).attr('src');
		$(value).attr('src','https://www.formula1.com'+src);

	});
</script>
</body>
</html>