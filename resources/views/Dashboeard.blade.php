@extends('layouts.app')

@section('title')
    Dashboard
@endsection
@section('style')
<link rel="stylesheet" href="{{asset('css/Dashboeard/index.css')}}">
<link rel="stylesheet" href="{{asset('css/Dashboeard/bars.css')}}">
@endsection
@section('content')
    <dashboard-componenet></dashboard-componenet>
@endsection
