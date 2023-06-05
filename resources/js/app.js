require('./bootstrap');

window.onSizeVariantClick = function() {
	$('#price').text('');
	$('#quantity').text('');
	$('#sku').text('');
	
	if($(this).hasClass('selected')){
		$(this).removeClass('selected');
		$('.form-select-item.form-color.inactive').removeClass('inactive');
	} else {
		$('.form-select-item.form-size.selected').removeClass('selected');
		$(this).removeClass('inactive').addClass('selected');
		
		const colorsList = products.filter(obj => {
			return obj.size_id === $(this).data('sizeid');
		}).map(obj => obj.color_id);
		$('.form-select-item.form-color').removeClass('inactive');
		$('.form-select-item.form-color').each(function(item){
			if(!colorsList.includes($(this).data('colorid'))){
				$(this).removeClass('selected').addClass('inactive');
			}
		});
		
		if($('.form-select-item.form-color.selected').length){
			const product = products.filter(obj => {
				return obj.size_id === $(this).data('sizeid') && obj.color_id === $('.form-select-item.form-color.selected').data('colorid');
			})[0];
			$('#price').text(product.price);
			$('#quantity').text(product.quantity);
			$('#sku').text(product.id);
		}
	}
}

window. onColorVariantClick = function() {
	$('#price').text('');
	$('#quantity').text('');
	$('#sku').text('');

	if($(this).hasClass('selected')){
		$(this).removeClass('selected');
		$('.form-select-item.form-size.inactive').removeClass('inactive');
	} else {
		$('.form-select-item.form-color.selected').removeClass('selected');
		$(this).removeClass('inactive').addClass('selected');
		
		const sizesList = products.filter(obj => {
			return obj.color_id === $(this).data('colorid');
		}).map(obj => obj.size_id);
		$('.form-select-item.form-size').removeClass('inactive');
		$('.form-select-item.form-size').each(function(item){
			if(!sizesList.includes($(this).data('sizeid'))){
				$(this).removeClass('selected').addClass('inactive');
			}
		});
		if($('.form-select-item.form-size.selected').length){
			const product = products.filter(obj => {
				return obj.color_id === $(this).data('colorid') && obj.size_id === $('.form-select-item.form-size.selected').data('sizeid');
			})[0];
			$('#price').text(product.price);
			$('#quantity').text(product.quantity);
			$('#sku').text(product.id);
		}
	}
}