@extends('layouts.index')


@section('content')
    index : 


    @if ($membres->count() <= 0)
        <p>Il y a personne</p>
    @else
        <div class="row">
            @foreach ($membres as $membre)
                <div class="col-3 border m-1">
                    <form action={{route('delm', $membre->id)}} method="post" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger text-light rounded p-1 m-0 display-inline">X</button>
                    </form>
                    {{ $membre->nom }} ({{$membre->age}}) -> {{ $membre->genre }}
                </div>
            @endforeach
        </div>
    @endif
@endsection