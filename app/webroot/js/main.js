$(document).ready(function(){
	$('#place-order').on('click', function(evt){
		evt.preventDefault();
		console.log('click');
		<!--Shipping will be processed at shipment.  Please contact your salesman for your shipping total.-->
		var placeOrder = confirm('Shipping charges will be applied when your order is processed.  Please contact your salesman for your shipping total.  Please click \'Ok\' to accept and continue or \'Cancel\' to return to your order');
		if(placeOrder == true){
			var orderPage = $(this).attr('href');
			window.location = orderPage;		
		}
	});
});