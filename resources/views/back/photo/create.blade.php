@extends('back.photo.template')

@section('form-open')
    <form method="post" action="{{ route('photo.store') }}">
                    {{ csrf_field() }}
                {{ method_field('POST') }}   
@endsection