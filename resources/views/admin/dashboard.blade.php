@extends('admin.layouts.app_admin')

@section('content')
	<div class="container">
		<h1>Админка</h1>
		<div class="row">
			<div class="col-sm-4">
				<div class="jumbotron">
					<p><span class="label label-primary">Категорий 0</span></p>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="jumbotron">
					<p><span class="label label-primary">Материалов 0</span></p>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="jumbotron">
					<p><span class="label label-primary">Пользователей</span></p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<a href="btn btn-block btn-default" class="#">Создать категорию</a>
				<a href="#" class="list-group-item">
					<h4 class="list-group-item-heading">Категория первая</h4>
					<p class="list-group-item-text">
						Кол-во материалов
					</p>
				</a>
			</div>
			<div class="col-sm-6">
				<a href="btn btn-block btn-default" class="#">Создать материал</a>
				<a href="#" class="list-group-item">
					<h4 class="list-group-item-heading">Материал первая</h4>
					<p class="list-group-item-text">
						Категоиря
					</p>
				</a>
			</div>
		</div>
	</div>
@endsection