$(document).ready(function(){
	$('.check_invalidez').click(function(){
		bloqueia_invalidez();
	});

})

function bloqueia_invalidez(){
	var numero=false;
	$('.check_invalidez').each(function(){
		if($(this).prop('checked')){
			numero=true;
		}
	});
	if(numero){
		$('.check_morte').prop("disabled",true);
		$('.check_sexo').prop("disabled",true);
		$('.check_produto').prop("disabled",true);
	}else{
		$('.check_morte').prop("disabled",false);
		$('.check_sexo').prop("disabled",false);
		$('.check_produto').prop("disabled",false);
	}
}

$(document).ready(function(){
	$('.check_morte').click(function(){
		bloqueia_morte();
	});

})

function bloqueia_morte(){
	var numero=false;
	$('.check_morte').each(function(){
		if($(this).prop('checked')){
			numero=true;
		}
	});
	if(numero){
		$('.check_invalidez').prop("disabled",true);
		$('.check_sexo').prop("disabled",true);
		$('.check_produto').prop("disabled",true);
	}else{
		$('check_invalidez').prop("disabled",false);
		$('.check_sexo').prop("disabled",false);
		$('.check_produto').prop("disabled",false);
	}
}

$(document).ready(function(){
	$('.check_sexo').click(function(){
		bloqueia_sexo();
	});

})

function bloqueia_sexo(){
	var numero=false;
	$('.check_sexo').each(function(){
		if($(this).prop('checked')){
			numero=true;
		}
	});
	if(numero){
		$('.check_invalidez').prop("disabled",true);
		$('.check_morte').prop("disabled",true);
		$('.check_produto').prop("disabled",true);
	}else{
		$('check_invalidez').prop("disabled",false);
		$('.check_morte').prop("disabled",false);
		$('.check_produto').prop("disabled",false);
	}
}

$(document).ready(function(){
	$('.check_produto').click(function(){
		bloqueia_produto();
	});

})

function bloqueia_produto(){
	var numero=false;
	$('.check_produto').each(function(){
		if($(this).prop('checked')){
			numero=true;
		}
	});
	if(numero){
		$('.check_invalidez').prop("disabled",true);
		$('.check_morte').prop("disabled",true);
		$('.check_sexo').prop("disabled",true);
	}else{
		$('check_invalidez').prop("disabled",false);
		$('.check_morte').prop("disabled",false);
		$('.check_sexo').prop("disabled",false);
	}
}