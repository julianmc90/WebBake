
function getModels(){

	$.ajax({
		url: baseUrl +'web-bake/bake/getModels',
		type: 'get',
		dataType:'json',
		success: function (data) {
			for (var i = 0; i < data.length; i++) {
	
				$('#selectModel').append("<option value='"+data[i]+"'>"+data[i]+"</option>");
			}
		}
	});
}


function generate(type){

	$.ajax({
		url: baseUrl +'web-bake/bake/generate',
		type: 'post',
		data:{type: type, name: getSelectedModel()},
		dataType:'json',
		success: function (data) {

			consoleLog(data.res);

		}

	});

}

function generateComponent(type){

	$.ajax({
		url: baseUrl +'web-bake/bake/generate',
		type: 'post',
		data:{type: type, name: getGenerateComponentName()},
		dataType:'json',
		success: function (data) {
					
			consoleLog(data.res);

		}

	});

}

function getSelectedModel(){

	return $('#selectModel').val();
}

function getGenerateComponentName(){

	return $('#generate-c-name').val().trim();
}


function clearConsole(){

	$('.console').html("");

}

function consoleLog(input){

	$('.console').html(input);

}


$('.generate').click(function(){

	clearConsole();
	generate($(this).data('action'));

});


$('.generate-c').click(function(){

	if(getGenerateComponentName() != ''){
		clearConsole();
		generateComponent($(this).data('action'));
	
	}else{

		consoleLog("Nothing to bake...");
	}


});



getModels();