@extends('admin.layouts.app_admin')

@section('content')
<div class="container">
	@component('admin.components.breadcrumb')
	@slot('title') Список катгорий @endslot
	@slot('parent') Главная @endslot
	@slot('active') Категории @endslot
	@endcomponent
	<hr>

	<a href="{{ route('admin.category.create') }}" class="btn btn-primary pull-right">Создать категорию</a>


	<table class="table table-striped">
		<thead>
			<th>Название</th>
			<th>Опубликовано</th>
			<th class="text-right">Действия</th>
		</thead>
		<tbody>
			@forelse($categories as $category)
				<tr>
					<td>{{ $category->title }}</td>
					<td>{{ $category->published }}</td>
					<td>
						<a href="{{ route('admin.category.edit', ['id'=>$category->id]) }}">Изменить</a>
					</td>
				</tr>
			@empty
				<tr>
					<td colspan="3" class="text-center"><h2>Данные отсутствуют</h2></td>
				</tr>
			@endforelse
		</tbody>
	</table>
	{{ $categories->links() }}

</div>
@endsection