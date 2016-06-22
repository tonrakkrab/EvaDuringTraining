<html>
	<head>
		<title>Laravel</title>
		<!--
		{!! Html::style('bootstrap/css/bootstrap.min.css') !!}
		-->		
		<link rel="stylesheet" href="{{ URL::asset('assets/bootstrap/css/bootstrap.min.css') }}">

		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #B0BEC5;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
			}

			.container {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
			}

			.content {
				text-align: center;
				display: inline-block;
			}

			.title {
				font-size: 96px;
				margin-bottom: 40px;
			}

			.quote {
				font-size: 24px;
			}
		</style>
	</head>
	<body>
		<!--
		{!! Html::script('js/jquery.min.js') !!}
		{!! Html::script('bootstrap/js/bootstrap.min.js') !!}		
		-->
		<script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
		<script type="text/javascript" src="{{ URL::asset('bootstrap/js/bootstrap.min.js') }}"></script>

		<div class="container">
			<!--
			<div class="content">
				<div class="title">Laravel 5</div>
				<div class="quote">{{ Inspiring::quote() }}</div>
			</div>
			-->
			<!--
			<div class="quote">Test Bootstrap</div>
			<br>
			<div>
				<div class="col-sm-12 col-md-6 col-lg-3" style="background-color:red;">Red</div>
				<div class="col-sm-12 col-md-6 col-lg-3" style="background-color:green;">Green</div>
				<div class="col-sm-12 col-md-6 col-lg-3" style="background-color:blue;">Blue</div>
				<div class="col-sm-12 col-md-6 col-lg-3" style="background-color:yellow;">Yellow</div>
			</div>
			-->
			<div><h1>วันนี้คุณคิดว่า ...</h1></div>
			<div>
				<div class="col-sm-12"><h3>(กรุณาเลือกตัวเลือกที่ตรงใจท่านที่สุด)</h3></div>				
				<hr>				
				<div class="col-sm-12"><h4>1. ท่านเข้าใจเนื้อหาบทเรียนประมาณ</h4></div>
				<div class="col-sm-12">
					<h5><div class="col-sm-1"></div>
					&nbsp;<div class="col-sm-2"><input checked="checked" name="g1" type="radio" value="1">&nbsp;ไม่เข้าใจเลย</div>
    				&nbsp;<div class="col-sm-2"><input checked="checked" name="g1" type="radio" value="2">&nbsp;ไม่ค่อยเข้าใจ</div>
    				&nbsp;<div class="col-sm-2"><input checked="checked" name="g1" type="radio" value="3">&nbsp;พอเข้าใจ</div>
    				&nbsp;<div class="col-sm-2"><input checked="checked" name="g1" type="radio" value="4">&nbsp;เข้าใจ</div>
    				&nbsp;<div class="col-sm-2"><input checked="checked" name="g1" type="radio" value="5">&nbsp;เข้าใจดี</div>
    				&nbsp;<div class="col-sm-1"></div>
    				</h5>
				</div>
				<hr>				
				<div class="col-sm-12"><h4>2. ความเร็วในการสอนของวิทยากร</h4></div>
				<div class="col-sm-12">
					<h5><div class="col-sm-1"></div>
					&nbsp;<div class="col-sm-2"><input checked="checked" name="g2" type="radio" value="1">&nbsp;ช้ามาก</div>
    				&nbsp;<div class="col-sm-2"><input checked="checked" name="g2" type="radio" value="2">&nbsp;ช้า</div>
    				&nbsp;<div class="col-sm-2"><input checked="checked" name="g2" type="radio" value="3">&nbsp;พอดี</div>
    				&nbsp;<div class="col-sm-2"><input checked="checked" name="g2" type="radio" value="4">&nbsp;เร็ว</div>
    				&nbsp;<div class="col-sm-2"><input checked="checked" name="g2" type="radio" value="5">&nbsp;เร็วมาก</div>
    				&nbsp;<div class="col-sm-1"></div>
    				</h5>
				</div>
				<hr>				
				<div class="col-sm-12"><h4>3. ท่านต้องการให้วิทยากรสอน</h4></div>
				<div class="col-sm-12">
					<h5><div class="col-sm-1"></div>
					&nbsp;<div class="col-sm-2"><input checked="checked" name="g3" type="radio" value="1">&nbsp;ช้าลงให้มาก</div>
    				&nbsp;<div class="col-sm-2"><input checked="checked" name="g3" type="radio" value="2">&nbsp;ช้าลง</div>
    				&nbsp;<div class="col-sm-2"><input checked="checked" name="g3" type="radio" value="3">&nbsp;ดีแล้ว</div>
    				&nbsp;<div class="col-sm-2"><input checked="checked" name="g3" type="radio" value="4">&nbsp;เร็วขึ้น</div>
    				&nbsp;<div class="col-sm-2"><input checked="checked" name="g3" type="radio" value="5">&nbsp;เร็วขึ้นให้มาก</div>
    				&nbsp;<div class="col-sm-1"></div>
    				</h5>
				</div>
				<hr>				
				<div class="col-sm-12"><h4>4. ข้อเสนอแนะทั่วไป</h4></div>
				<div class="col-sm-12">
					<h5><div class="col-sm-1"></div>
					&nbsp;<div class="col-sm-10"><input type="text" class="form-control"  name="g4_txt"></div>
					&nbsp;<div class="col-sm-1"></div>
    				</h5>
				</div>
				<hr>				
				<div>&nbsp;</div>
				<div class="col-md-12">
					<input type="submit" class="" name="g5_btn" value="ส่งแบบประเมิน">
					<a href="{{action('FormController@summarize')}}">Link name/Embedded Button</a>
				</div>
				<?php echo "<br><br><br>"; ?>
			</div>
		</div>
	</body>
</html>
