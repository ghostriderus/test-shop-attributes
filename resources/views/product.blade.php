@extends('layouts.app')

@section('content')
	<script>
		const products = {!! $product->skus()->where('quantity', '>', '0')->get()->toJson() !!};
		$(document).ready( function(){
			$('.form-select-item.form-color').on('click', onColorVariantClick);
			$('.form-select-item.form-size').on('click', onSizeVariantClick);
		});
		
	</script>
	
	<div class="row">
		<div class="mb-3 col-md-3">
			Фото отсутствует
		</div>
		<div class="col-md-9">
			<h2 class="mb-3">
				{{ $product->name }}
			</h2>
			<div class="mb-3">
				Доступные цвета:
				@foreach($product->colors() as $color)
					<div class="form-select-item form-color" data-colorid="{{ $color->id }}">
						{{ $color->value }}
					</div>
				@endforeach
			</div>
			<div class="mb-3">
				Доступные размеры:
				@foreach($product->sizes() as $size)
					<div class="form-select-item form-size" data-sizeid="{{ $size->id }}">
						{{ $size->value }}
					</div>
				@endforeach
			</div>
			<div class="mb-3">
				Артикул: <span id="sku"></span>
			</div>
			<div class="mb-3">
				Цена: <span id="price"></span>
			</div>
			<div class="mb-3">
				Количество: <span id="quantity"></span>
			</div>
		</div>
		
	</div>
@endsection