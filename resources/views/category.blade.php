@extends('layouts.app')

@section('content')
	<h3>Категория {{ $category->name }}</h3>
	<div class="filter col-md-3 text-center">
		<form>
			<div class="mb-3">
				<div>
					Цвет
				</div>
				<div>
					{{ Form::select('color', $colors, request()->get('color'), ['placeholder' => 'Выберите цвет']) }}
				</div>
			</div>
			<div class="mb-3">
				<div>
					Размер
				</div>
				<div>
					{{ Form::select('size', $sizes, request()->get('size'), ['placeholder' => 'Выберите размер']) }}
				</div>
			</div>
			<div>
				<input type="submit" value="Фильтровать">
				<input type="reset" value="Сброс">
			</div>
		</form>
		
	</div>
	<div class="list col-md-9 row">
		@if(count($items) > 0)
			@foreach($items as $item)
				<div class="col-md-4 mb-3 p-2 d-flex flex-column justify-content-center align-items-center" style="border: 2px solid black">
					<div style="height: 100px; width: 100px; border: 1px solid black" class="d-flex justify-content-center align-items-center mb-1">
						<span class="text-center">
							Фото отсутствует
						</span>
					</div>
					<div class="text-center">
						<a href="/product/{{ $item->id }}">
							{{ $item->name }}
						</a>
					</div>
				</div>
			@endforeach
		@else
			<div>Товары не найдены</div>
		@endif
	</div>
@endsection