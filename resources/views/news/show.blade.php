@extends('layouts.layout')
@section('title', $new->title.' | noticias')
@section('content')
<h1>{{ $new->title }}</h1>
<p>{!! $new->body !!}</p>
@endsection
