function Department(){
	$('#departmentddl').empty();
	$('#departmentddl').append("<option>Loading....</option>");
	$('#courseddl').append("<option value='0' disabled>--Select Course---</option>");
	
	
	$.ajax({
		type:"POST",
		url:"depart_dropdown.php",
		contentType:"application/json; charset=utf-8",
		dataType:"json",
		success: function(data){
			$('#departmentddl').empty();
			$('#departmentddl').append("<option value='0'>--Select Department--</option>");
			$.each(data,function(i,item){
				$('#departmentddl').append('<option value="'+data[i].id+'">'+data[i].name+'</option>');
			});
		},
		complete: function(){
		}
	});
	
	
	
}
function Course(did){
	$('#courseddl').empty();
	$('#courseddl').append("<option>Loading....</option>");
	$.ajax({
		type:"POST",
		url:"course_dropdown.php?did="+did,
		contentType:"application/json; charset=utf-8",
		dataType:"json",
		success: function(data){
			$('#courseddl').empty();
			$('#courseddl').append("<option value='0'>--Select Course--</option>");
			$.each(data,function(i,item){
				$('#courseddl').append('<option value="'+data[i].id+'">'+data[i].name+'</option>');
			});
		},
		complete: function(){
		}
	});
}


function getPath(coucode,week,lecture){
	$('#path').val('');
	$('#fram').attr("src","https://google.com");
	$.ajax({
		type: "POST",
		url:"load_Content.php?code="+coucode+"&week="+week+"&lecture="+lecture,
		contentType:"application/json; charset=utf-8",
		dataType:"json",
		success: function(data){
			$.each(data,function(i,item){
				$('#path').val();
				$('#fram').attr("src","");
				$('#path').val(data[i].name);
				if (data[i].name!=0) {
					$('#fram').attr("src",data[i].name);
				}else{
					$('#fram').attr("src","https://google.com");
				}
			});
		},
		complete: function(){
		}
	});
}
$(document).ready(function(){
	Department();
	$('input[name=week]','#weekSel').prop("checked",false);
	$('input[name=lecture]','#lecSel').prop("checked",false);
	var lim = 8;
	var a = "depe";
	var b = "cour";
	for (var i = 1; i <=lim; i++) {
		var d = a.concat(i);
		var c = b.concat(i);
		$('#'+d).val('');
		$('#'+c).val('');
	}
	$('#fram').val('');
	$('#path').val('');
	$('#course').val('');
	$('#text1').val('');
	$('#text2').val('');
	var week =$('input[name=week]:checked','#weekSel').val();
	$('#text1').val(week);
	var lecture = $('input[name=lecture]:checked','#lecSel').val();
	$('#text2').val(lecture);
	$('#departmentddl').change(function(){
		var deptid = $('#departmentddl').val();
		Course(deptid);
		for (var i = 1; i <=lim; i++) {
			var d = a.concat(i);
			$('#'+d).val(deptid);
		}
	});
	$('#courseddl').change(function(){
		var course_code = $('#courseddl').val();
		for (var i = 1; i <=lim;i++){
			var c = b.concat(i);
			$('#'+c).val(course_code);
			$('#course').val(course_code);
		}
		
		$.post('student.php',{cn:course_code},function(data){
    alert(data);
		}
}));

    
		$('#weekSel input').change(function(){
		var week =$('input[name=week]:checked','#weekSel').val();
		$('#text1').val(week);
	});	
	$('#lecSel input').change(function(){
		var lecture = $('input[name=lecture]:checked','#lecSel').val();
		$('#text2').val(lecture);
		var course_code= $('#course').val();
		var week = $('#text1').val();
		var lec = $('#text2').val();
		getPath(course_code,week,lec);
	});
	$('#lecSel input').click(function(){
		var course_code= $('#course').val();
		var week = $('#text1').val();
		var lec = $('#text2').val();
		getPath(course_code,week,lec);
	});
});