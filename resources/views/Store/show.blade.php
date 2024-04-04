@extends('layouts.AdminLTE.index')

@section('icon_page', 'eye')

@section('title', 'View User')

@section('menu_pagina')	
		
	<li role="presentation">
		<a href="{{ route('user') }}" class="link_menu_page">
			<i class="fa fa-user"></i> Users
		</a>								
	</li>

@endsection

@section('content')    
    
    <h1>Store {{$store->id}} View</h1>
    <h2>{{$store->name}}</h2>
    <p>{{$store->description}}</p>
    <p>{{$store->updated_at}}</p>
    <p>{{$store->created_at}}</p>
@endsection