@extends('layout.scaffold')

@section('title', 'myMovieList')

@section('content')

    <div>
        <x-edit_contact_form :contact="$contact"/>
    </div>


@endsection
