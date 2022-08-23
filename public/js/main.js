// удиления добавленя картики
$(function(){
	if($('#img0').length == 1){
		$('#txtImg0').css({'display' : 'none'});
	}
	if($('#img1').length == 1){
		$('#txtImg1').css({'display' : 'none'});
	}
	if($('#img2').length == 1){
		$('#txtImg2').css({'display' : 'none'});
	}
	if($('#img3').length == 1){
		$('#txtImg3').css({'display' : 'none'});
	}
	if($('#img4').length == 1){
		$('#txtImg4').css({'display' : 'none'});
	}
});
// кнопка удаления
$(function(){
	$('#p0').hide();
	$('#p1').hide();
	$('#p2').hide();
	$('#p3').hide();
	$('#p4').hide();
	$('#p5').hide();
	$('#btn0').click(function(event){
		event.preventDefault();
		$('#img0').css({'display' : 'none'});
		$('#txtImg0').css({'display' : 'block'});
		$('#btn0').css({'display' : 'none'});
		$('#cek0')[0].value = 1;

	});
	$('#btn1').click(function(event){
		event.preventDefault();
		$('#img1').css({'display' : 'none'});
		$('#txtImg1').css({'display' : 'block'});
		$('#btn1').css({'display' : 'none'});
		$('#cek1')[0].value = 1;

	});
	$('#btn2').click(function(event){
		event.preventDefault();
		$('#img2').css({'display' : 'none'});
		$('#txtImg2').css({'display' : 'block'});
		$('#btn2').css({'display' : 'none'});
		$('#cek2')[0].value = 1;

	});
	$('#btn3').click(function(event){
		event.preventDefault();
		$('#img3').css({'display' : 'none'});
		$('#txtImg3').css({'display' : 'block'});
		$('#btn3').css({'display' : 'none'});
		$('#cek3')[0].value = 1;

	});
	$('#btn4').click(function(event){
		event.preventDefault();
		$('#img4').css({'display' : 'none'});
		$('#txtImg4').css({'display' : 'block'});
		$('#btn4').css({'display' : 'none'});
		$('#cek4')[0].value = 1;

	});

	// текст после добавления

	$('#txtImg0').change(function(){
		$('#p0').show(1000).delay(2000).hide(1000);
		$('#p5').hide(1000);
	})
	$('#txtImg1').change(function(){
		$('#p1').show(1000).delay(2000).hide(1000);
	})
	$('#txtImg2').change(function(){
		$('#p2').show(1000).delay(2000).hide(1000);
	})
	$('#txtImg3').change(function(){
		$('#p3').show(1000).delay(2000).hide(1000);
	})
	$('#txtImg4').change(function(){
		$('#p4').show(1000).delay(2000).hide(1000);
	})

	$('body > center > form > input.btn.btn-primary.mt-3.mb-5').click(function(event){
		if($('#txtImg0')[0].value == 0){
			event.preventDefault();
			$('#p5').show(1000);
		}
	})

})