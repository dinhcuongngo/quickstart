@extends('layouts.master')

@section('title', 'Tasks')

@section('content')
		<div class="block">
			<div class="block__title">
				<span>New Task</span>
			</div>
			<div class="block__content">
				<form action="/tasks" method="post">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div>
						<label>Task</label>
					</div>
					<div>
						<input type="text" name="task">
					</div>
					<div>
						<button type="submit" name="btnAdd">
							<i class="fas fa-plus"></i> Add new task
						</button>
					</div>
				</form>
			</div>
		</div>
		<div class="block">
			<div class="block__title">
				<span>Current Tasks</span>
			</div>
			<div class="block__content">
				<p class="block__content_top">Task</p>
				<div class="block__content_list clearfix">
					<div class="block__content_list_left">
						<span>Taking the project's requirements</span>
					</div>
					<div class="block__content_list_right">
						<form action="/tasks/" method="POST">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<input type="hidden" name="method" value="DELETE">
							<button type="submit" class="btnDel">Delete</button>
						</form>
					</div>
				</div>
				<div class="block__content_list clearfix">
					<div class="block__content_list_left">
						<span>Taking the project's requirements</span>
					</div>
					<div class="block__content_list_right">
						<form action="/tasks/" method="POST">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<input type="hidden" name="method" value="DELETE">
							<button type="submit" class="btnDel">Delete</button>
						</form>
					</div>
				</div>
			</div>
		</div>

@endsection