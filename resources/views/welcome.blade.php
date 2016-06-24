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
			<br>
			<div class="content">
				<div class="col-md-12">					
					<input type="button" id="btnUser" value="ข้อมูลผู้ใช้" onclick="location.href='{{action("UserController@summarize")}}'" />
					<input type="button" id="btnFormSum" value="ข้อมูลแบบสอบถาม" onclick="location.href='{{action("LinkController@form_dur_tra_sum")}}'" />
					<input type="button" id="btnForm" value="แบบสอบถามระหว่างอบรม" onclick="location.href='{{action("LinkController@form_dur_tra_index")}}'" />
				</div>
			</div>
			<br>
			<hr>			
			<br>			
			<div><h1>วันนี้คุณคิดว่า ...</h1></div>
			<div>
				<form method="post" action="logpage">
					<div class="col-sm-12"><h3>(กรุณาเลือกตัวเลือกที่ตรงใจท่านที่สุด)</h3></div>				
					<hr>				
					<div class="col-sm-12"><h4>1. ท่านเข้าใจเนื้อหาบทเรียนประมาณ</h4></div>
					<div class="col-sm-12">
						<h5><div class="col-sm-1"></div>
						&nbsp;<div class="col-sm-2"><input checked="checked" name="g1" id="g11" type="radio" value="1">&nbsp;ไม่เข้าใจเลย</div>
	    				&nbsp;<div class="col-sm-2"><input checked="checked" name="g1" id="g12" type="radio" value="2">&nbsp;ไม่ค่อยเข้าใจ</div>
	    				&nbsp;<div class="col-sm-2"><input checked="checked" name="g1" id="g13" type="radio" value="3">&nbsp;พอเข้าใจ</div>
	    				&nbsp;<div class="col-sm-2"><input checked="checked" name="g1" id="g14" type="radio" value="4">&nbsp;เข้าใจ</div>
	    				&nbsp;<div class="col-sm-2"><input checked="checked" name="g1" id="g15" type="radio" value="5">&nbsp;เข้าใจดี</div>
	    				&nbsp;<div class="col-sm-1"></div>
	    				</h5>
					</div>
					<hr>				
					<div class="col-sm-12"><h4>2. ความเร็วในการสอนของวิทยากร</h4></div>
					<div class="col-sm-12">
						<h5><div class="col-sm-1"></div>
						&nbsp;<div class="col-sm-2"><input checked="checked" name="g2" id="g21" type="radio" value="1">&nbsp;ช้ามาก</div>
	    				&nbsp;<div class="col-sm-2"><input checked="checked" name="g2" id="g22" type="radio" value="2">&nbsp;ช้า</div>
	    				&nbsp;<div class="col-sm-2"><input checked="checked" name="g2" id="g23" type="radio" value="3">&nbsp;พอดี</div>
	    				&nbsp;<div class="col-sm-2"><input checked="checked" name="g2" id="g24" type="radio" value="4">&nbsp;เร็ว</div>
	    				&nbsp;<div class="col-sm-2"><input checked="checked" name="g2" id="g25" type="radio" value="5">&nbsp;เร็วมาก</div>
	    				&nbsp;<div class="col-sm-1"></div>
	    				</h5>
					</div>
					<hr>				
					<div class="col-sm-12"><h4>3. ท่านต้องการให้วิทยากรสอน</h4></div>
					<div class="col-sm-12">
						<h5><div class="col-sm-1"></div>
						&nbsp;<div class="col-sm-2"><input checked="checked" name="g3" id="g31" type="radio" value="1">&nbsp;ช้าลงให้มาก</div>
	    				&nbsp;<div class="col-sm-2"><input checked="checked" name="g3" id="g32" type="radio" value="2">&nbsp;ช้าลง</div>
	    				&nbsp;<div class="col-sm-2"><input checked="checked" name="g3" id="g33" type="radio" value="3">&nbsp;ดีแล้ว</div>
	    				&nbsp;<div class="col-sm-2"><input checked="checked" name="g3" id="g34" type="radio" value="4">&nbsp;เร็วขึ้น</div>
	    				&nbsp;<div class="col-sm-2"><input checked="checked" name="g3" id="g35" type="radio" value="5">&nbsp;เร็วขึ้นให้มาก</div>
	    				&nbsp;<div class="col-sm-1"></div>
	    				</h5>
					</div>
					<hr>				
					<div class="col-sm-12"><h4>4. ข้อเสนอแนะทั่วไป</h4></div>
					<div class="col-sm-12">
						<h5><div class="col-sm-1"></div>
						&nbsp;<div class="col-sm-10"><input type="text" class="form-control"  id="g4_txt"></div>
						&nbsp;<div class="col-sm-1"></div>
	    				</h5>
					</div>
					<hr>				
					<div>&nbsp;</div>
					<div class="col-md-12">
						<input type="submit" class="" id="btnSendEvaluationForm" value="ส่งแบบประเมิน">
					</div>
				</form>
			</div>			
		</div>

<!--<script>
		$(document).ready(function() {
		    $('#btnSendEvaluationForm').click(function() {
		    	//alert("click Button SendEvaluationForm");

		    	$g1_val = $('input[name=g1]:checked', '#myForm').val();
		    	$g2_val = $('input[name=g2]:checked', '#myForm').val();
		    	$g3_val = $('input[name=g3]:checked', '#myForm').val();

		    	alert("g1_val: " + $g1_val);
		    	alert("g2_val: " + $g2_val);
		    	alert("g3_val: " + $g3_val);

		        var ids = [$g1_val, $g2_val, $g3_val];
		        $.ajax("form/insert", {
		            type: 'POST',
		            dataType: 'json', 
					url: '',
		            data: {ids:ids},
		            success: function(result){
		            	alert("sent data post complete");
		            }		            
		        });
		    });
		    $('#myForm input').on('change', function() {
   				alert($('input[name=g3]:checked', '#myForm').val()); 
			});			
		});
</script>-->

	</body>
</html>
