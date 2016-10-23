
/**
 * get models
 */
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


/**
 * generate MVC
 */
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

/**
 * Generate components...
 */
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

/**
 * get selected model
 * @return {[type]} [description]
 */
function getSelectedModel(){

	return $('#selectModel').val();
}

/**
 * get component name
 * @return {[type]} [description]
 */
function getGenerateComponentName(){

	return $('#generate-c-name').val().trim();
}


/**
 * clear console
 * @return {[type]} [description]
 */
function clearConsole(){

	$('.console').html("");

}

/**
 * show console log
 */
function consoleLog(input){

	$('.console').html(input);

}


/**
 * click on generate button
 */
$('.generate').click(function(){

	clearConsole();
	generate($(this).data('action'));

});


/**
 * click on generate c button
 */
$('.generate-c').click(function(){

	if(getGenerateComponentName() != ''){
		clearConsole();
		generateComponent($(this).data('action'));
	
	}else{

		consoleLog("Nothing to bake...");
	}


});


/**
 * getting models 
 */
getModels();