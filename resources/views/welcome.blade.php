@foreach($user as $GetPost)
@extends('layouts.app')


@section('title')
Bienvenue sur ECE EBAY  

    {{$GetPost->name}}          

@stop

@section('content')






					<center>
                    <img src="{{asset($GetPost->avatar)}}" style="height:600px;width:600px; margin-right:15px">
                
                    
                       
                    
                    </center>

                     


             


@stop
       
                  
@section('footer')
copy rights by ECE ebay
@stop                  
  @endforeach