@extends('layout')

@section('name')
    <p class="bg-warning p-2 w-100 mb-4">Book Detail</p>
@endsection

@section('content')
    <p>Title: {{ $book->title }}</p>
    <p>Author: {{ $book->detail->author }}</p>
    <p>Publisher: {{ $book->detail->publisher }}</p>
    <p>Year: {{ $book->detail->year }}</p>
    <p>Description:</p>
    <p>{{ $book->detail->description }}</p>
@endsection
