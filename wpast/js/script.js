jQuery(window).load(function(){
	$(".loader").delay(1500).fadeOut("slow");
	$("#conteudo").toggle("fast");
});



CKEDITOR.replace('editor1');

$('#uploadUniEnv').on('click', function(){
	$('#uploadUni').click();
});

$('#menuClickMobile').on('click', function(){
	$('#menuMobileInt').css('display', 'block');
	$('#menuMobileInt').css('height', '170px');
	$(this).css('display', 'none');
	$('#menuClickCloseMobile').css('display', 'block');
});

$('#menuClickCloseMobile').on('click', function(){
	$('#menuMobileInt').css('display', 'none');
	$('#menuMobileInt').css('height', '0');
	$(this).css('display', 'none');
	$('#menuClickMobile').css('display', 'block');
});