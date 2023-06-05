@extends('layouts.app')

@section('content')
	
	<div class="list row">
		<h3>Категории</h3>
		@if(count($categories) > 0)
			@foreach($categories as $category)
				<div class="col-md-4 mb-3 p-2 d-flex flex-column justify-content-center align-items-center" style="border: 2px solid black">
					<div style="height: 100px; width: 100px; border: 1px solid black" class="d-flex justify-content-center align-items-center mb-1">
						<span class="text-center">
							Фото отсутствует
						</span>
					</div>
					<div class="text-center">
						<a href="/category/{{ $category->id }}">
							{{ $category->name }}
						</a>
					</div>
				</div>
			@endforeach
		@else
			<div>Категории не найдены</div>
		@endif
	</div>
@endsection