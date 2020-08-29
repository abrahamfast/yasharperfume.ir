@extends('layout.master')

@section('content')
    <x-header/>
    <x-navbar/>
    <x-show-products :slug="$slug"/>





@endsection
