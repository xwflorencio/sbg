
@extends('admin.main')

@section('title','SBG7')

@section('content')
	
<h5>Name: {{$tournament->name}} - Participants {{$tournament->number_of_player}} - Start date: {{$tournament->start}} - End date: {{$tournament->end}}  </h5>
  
  @php
    
  @endphp
  
<main id="tournament">
  <ul class="round">

    @php 
      $i=1;
    @endphp
    @foreach ($tournament->players as $player)
          @if($i %2 != 0)
            <li class="spacer">&nbsp;</li>
            <li class="game game-top winner">{{$player->name}}<span></span></li>
            <li class="game game-spacer">&nbsp;</li>
          @else
            <li class="game game-bottom ">{{$player->name}}<span></span></li>
            <li class="spacer">&nbsp;</li>
          @endif
      @php 
        $i=$i+1;
      @endphp
    @endforeach 
  </ul>

     @php 
        $new_round_players=$tournament->number_of_player/2;
    @endphp
    @while( $new_round_players != 1)
      
      <ul class="round">
        @for($i=1;$i<=$new_round_players; $i++)

          @if($i %2 != 0)
            <li class="spacer">&nbsp;</li>
            <li class="game game-top winner"><span></span></li>
            <li class="game game-spacer">&nbsp;</li>
          @else
            <li class="game game-bottom "><span></span></li>
            <li class="spacer">&nbsp;</li>
          @endif
        @endfor

      </ul>

      @php 
        $new_round_players=$new_round_players/2;
      @endphp
     
    @endwhile 


    

  

</main>
	

		
	  
	
@endsection