// $(function(){

// 	$ui1=5000;
// 	$ui2=25000;

// 	$( "#slider-range" ).slider({
// 		range: true,
// 		min: 0,
// 		max: 50000,
// 		values: [ 5000, 25000 ],
// 		slide: function( event, ui ) {
// 			$( "#amount" ).val( "₽" + ui.values[ 0 ] + " - ₽" + ui.values[ 1 ] );
// 			$ui1 = ui.values[0];
// 			$ui2 = ui.values[1];
// 		}
// 	});
// 	$( "#amount" ).val( "₽" + $( "#slider-range" ).slider( "values", 0 ) +
// 		" - ₽" + $( "#slider-range" ).slider( "values", 1 ) );



// 	$('#on').click(function(){
// 		console.dir($('#serch')[0].value);
// 		console.dir($('select').val());
// 		console.dir($ui1);
// 		console.dir($ui2);
// 		let dataTemp = {
// 			categori_id: $('#serch')[0].value,
// 			price_start: $ui1,
// 			price_end: $ui2,
// 			title: $('select').val()
// 		};

// 		let data = JSON.stringify(dataTemp);

// 		$.ajax({
// 			url: {{ route('index') }},
// 			type:"GET",
// 			data:{
// 				data: data
// 			},
// 			headers: {
// 				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
// 			},
// 			sucses: () => {
// 				console.log("odko,xebotkb");
// 			}

// 		});
// 	})
// })