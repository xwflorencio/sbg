@extends('admin.main')

@section('title','SBG7')

@section('content')
	
			<h1>Create Tournament</h1>

				{!! Form::open(['route' => 'tournament.store', 'method' => 'POST']) !!}

				<div class="form-group">
					
					{!! Form::label('name','Name') !!}

					{!! Form::text('name',null,['class' => 'form-control', 'placeholder' => 'Tournament name', 'required' ]) !!}

				</div>

				<div class="form-group">
					
					{!! Form::label('start','Start of tournament') !!}

					{!! Form::date('start',null,['class' => 'form-control', 'required' ]) !!}

				</div>

				<div class="form-group">
					
					{!! Form::label('end','End of tournament') !!}

					{!! Form::date('end',null,['class' => 'form-control', 'required' ]) !!}

				</div>

				<div class="form-group">
					
					{!! Form::label('number_of_player','Number of Players / Teams') !!}

					{!! Form::number('number_of_player',null,['class' => 'form-control', 'min'=> '2','step'=>'2', 'oninput' => 'create_players()'   , 'required' ]) !!}

				</div>

				<div id="players" class="form-group">

				</div>

				<div class="form-group">
					</br>
					{!! Form::submit('Save',['class' => 'btn btn-primary' ]) !!}

				</div>

				

				{!! Form::close() !!}

				<script>
						
						//$('#number_of_player').val('');

						function create_players(){

							$(wrapper).empty();

							var number_of_player = $("#number_of_player").val();
							console.log("prueba funcion number of players =" + number_of_player);
						    var wrapper = $('#players');
						    var labelHTML = '<label for="player_team">Name of Players / Teams</label>';
						    var fieldHTML = '<div class="form-group"><input type="text" name="players[]" value="" placeholder="Name of Player/Team" class = "form-control" required/></div>'; 
						    var x = 1;

						    
						    $(wrapper).empty();

						    
						    if(x <= number_of_player){
						    	$(wrapper).append(labelHTML);
						    	while(x <= number_of_player){ //Check maximum number of input fields
						            x++; //Increment field counter
						            $(wrapper).append(fieldHTML); // Add field html
					        	}
						    }

						}
					
				</script>

@endsection