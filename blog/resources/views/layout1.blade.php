@extends('layouts.app')

@section('title', 'Layout Design')

@section('sidebar')    
	@parent
    <p>This is appended to the master sidebar.</p>    
@endsection

@section('content')
    <p>This is my body content.</p>
    <!-- {{$name='John Eltone'}}     -->    
    <!-- {{isset($name) ? $name : 'NAME'}} -->

    @if(count($array) === 1)
    	I have one record.
    @elseif (count($array) > 1)
    	I have {{count($array)}} records.
    @endif
    <br>
    @for($i=0;$i<count($array); $i++)
		This is value of element {{$i}} : {{$array[$i]}} <br>
    @endfor

    @foreach ($array as $num)
		record : {{$num}}
	@endforeach
@endsection
