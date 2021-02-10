
@extends('admin.main')

@section('title','SBG7')

@section('content')

	<table class="table table-dark table-hover">
		<thead>
			<th>Name</th>
			<th>Number of players/teams</th>
			<th>Start date</th>
			<th>End date</th>
			<th></th>
			<th></th>
		</thead>
		<tbody>
			@foreach($tournament as $tournament)
			<tr>
				<td>{{ $tournament->name }}</td>
				<td>{{ $tournament->number_of_player}}</td>
				<td>{{ $tournament->start }}</td>
				<td>{{ $tournament->end }}</td>
				<td>
					<a href="{{ route('tournament.destroy', $tournament->id ) }}" onclick="return confirm('Delete ?')" class="btn btn-danger">
						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>Delete
					</a>
				</td>
				<td>
					<a href="{{ route('tournament.show', $tournament->id ) }}" class="btn btn-primary">
						Open Bracket
					</a>
				</td>
			</tr>
			@endForeach
		</tbody>
	</table>
	
@endsection