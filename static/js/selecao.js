$(document).ready(function(){
	$('.check_invalidez').click(function(){
		bloqueia();
	});

})

function bloqueia(){
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