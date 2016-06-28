<html>
	<head>
		<title>Laravel</title>
		{!! Html::style('bootstrap/css/bootstrap.min.css') !!}

		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

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

		{!! Html::script('js/jquery.min.js') !!}
		{!! Html::script('bootstrap/js/bootstrap.min.js') !!}

		<div class="container">			
			<div class="content">
				<div class="col-md-12">					
					<input type="button" id="btnUser" value="ข้อมูลผู้ใช้" onclick="location.href='{{action("UserController@summarize")}}'" />
					<input type="button" id="btnFormSum" value="ข้อมูลแบบสอบถาม" onclick="location.href='{{action("LinkController@form_dur_tra_sum")}}'" />
					<input type="button" id="btnForm" value="แบบสอบถามระหว่างอบรม" onclick="location.href='{{action("LinkController@form_dur_tra_index")}}'" />
				</div>
			</div>
			<div><h1>วันนี้คุณคิดว่า ...</h1></div>
			<div>				
				{!! Form::open(['url'=>'form/dur_train']) !!}
					<div class="col-md-12"><h3>(กรุณาเลือกตัวเลือกที่ตรงใจท่านที่สุด)</h3></div>
					<div class="col-md-3">
						<div class="col-md-12"><h4>1. ท่านเข้าใจเนื้อหาบทเรียนประมาณ</h4></div>
						<div class="col-md-4"></div>
						<div class="col-md-8">
							<h5>
							<div class="col-md-12 text-left"><input checked="checked" name="g1" id="g11" type="radio" value="1">&nbsp;ไม่เข้าใจเลย</div>
		    				<div class="col-md-12 text-left"><input checked="checked" name="g1" id="g12" type="radio" value="2">&nbsp;ไม่ค่อยเข้าใจ</div>
		    				<div class="col-md-12 text-left"><input checked="checked" name="g1" id="g13" type="radio" value="3">&nbsp;พอเข้าใจ</div>
		    				<div class="col-md-12 text-left"><input checked="checked" name="g1" id="g14" type="radio" value="4">&nbsp;เข้าใจ</div>
		    				<div class="col-md-12 text-left"><input checked="checked" name="g1" id="g15" type="radio" value="5">&nbsp;เข้าใจดี</div>
		    				</h5>
						</div>
					</div>					
					<div class="col-md-3">
						<div class="col-md-12"><h4>2. ความเร็วในการสอนของวิทยากร</h4></div>
						<div class="col-md-4"></div>
						<div class="col-md-8">
							<h5>
							<div class="col-md-12 text-left"><input checked="checked" name="g2" id="g21" type="radio" value="1">&nbsp;ช้ามาก</div>
		    				<div class="col-md-12 text-left"><input checked="checked" name="g2" id="g22" type="radio" value="2">&nbsp;ช้า</div>
		    				<div class="col-md-12 text-left"><input checked="checked" name="g2" id="g23" type="radio" value="3">&nbsp;พอดี</div>
		    				<div class="col-md-12 text-left"><input checked="checked" name="g2" id="g24" type="radio" value="4">&nbsp;เร็ว</div>
		    				<div class="col-md-12 text-left"><input checked="checked" name="g2" id="g25" type="radio" value="5">&nbsp;เร็วมาก</div>
		    				</h5>
						</div>
					</div>
					<div class="col-md-3">
						<div class="col-md-12"><h4>3. ท่านต้องการให้วิทยากรสอน</h4></div>
						<div class="col-md-4"></div>
						<div class="col-md-8">
							<h5>
							<div class="col-md-12 text-left"><input checked="checked" name="g3" id="g31" type="radio" value="1">&nbsp;ช้าลงให้มาก</div>
		    				<div class="col-md-12 text-left"><input checked="checked" name="g3" id="g32" type="radio" value="2">&nbsp;ช้าลง</div>
		    				<div class="col-md-12 text-left"><input checked="checked" name="g3" id="g33" type="radio" value="3 text-left">&nbsp;ดีแล้ว</div>
		    				<div class="col-md-12 text-left"><input checked="checked" name="g3" id="g34" type="radio" value="4">&nbsp;เร็วขึ้น</div>
		    				<div class="col-md-12 text-left"><input checked="checked" name="g3" id="g35" type="radio" value="5">&nbsp;เร็วขึ้นให้มาก</div>
		    				</h5>
						</div>
					</div>					
					<div class="col-md-3">
						<div class="col-md-12"><h4>4. ข้อเสนอแนะทั่วไป</h4></div>
						<div class="col-md-12">
							{!! Form::text('g4_txt',null,array(
								'id' => 'g4_txt',
								'placeholder' => 'ข้อเสนอแนะทั่วไป',
								'class' => 'form-control displaymax'
							))!!}
						</div>
					</div>					
					<div class="col-md-12">
						<div class="text-center" style="margin-top:25px;">
                        	{!!Form::submit('ส่งแบบประเมิน',['class'=>'btn btn-md btn-info'])!!}
                            {!!Form::reset('ล้าง',['class'=>'btn btn-md btn-info'])!!}
                        </div>                       
					</div>
				{!!Form::close()!!}
			</div>			
		</div>
	</body>
</html>
