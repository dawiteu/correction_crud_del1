@extends('layouts.index')


@section('content')

    @switch($genre)
        @case('femme')
            @foreach ($memfemme as $femme)
                {{ $femme->nom }} // {{ $femme->age }} <br/> 
            @endforeach
            @break
        @case('homme')
                @foreach ($memhomme as $homme)
                    {{ $homme->nom }} // {{ $homme->age }} <br/> 
                @endforeach
            @break

        @case('15pers')
            @foreach ($memhom15 as $memb)
                {{ $memb->nom }} <br/> 
            @endforeach
        @break
        @default
            <p>Erreur ? </p>
    @endswitch
@endsection