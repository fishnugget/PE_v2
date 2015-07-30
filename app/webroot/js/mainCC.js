$(document).ready(function(){
	$('#place-order').on('click', function(evt){
		evt.preventDefault();
		console.log('click');
		<!--Shipping will be processed at shipment.  Please contact your salesman for your shipping total.-->
		var placeOrder = confirm('In addition to your cart total, $30 will be held on card until order is processed. Final shipping charges will be properly debited or credited when your order is processed. Please click \'Ok\' to accept and continue or \'Cancel\' to return to your order');
		if(placeOrder == true){
			var orderPage = $(this).attr('href');
			window.location = orderPage;		
		}
	});
});