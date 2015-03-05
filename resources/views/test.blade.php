<!-- test -->
@extends('layout.master.master')

<!-- Header Title -->
@section('title-page-admin')

Journal Open Source

@stop

<!-- Page Title -->
@section('title')
Main Page

@stop

<!-- Page Title Extra -->
@section('title-extra')

More extra - Page Title 

@stop

<!-- Main content -->
@section('content')
	<h1> This is main content</h1>
@stop

<!-- Navigation Link -->
@section('navigation-link')

<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Editor</a></li>
    <li class="active">Main Page</li>
</ol>

@stop


<!-- Welcome user -->
@section('user-welcome')
	<p>Hello, Thang</p>
	<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
@stop

@section('custom-menu')
    
    {!! create_menu_item('Thang') !!}

    {!! create_menu_item(
    				'Menu 1', 
    				4, 
    				array('a', 'b', 'c', 'd'), 
    				['#', 'l', 'fkdlowoo', '48782']) 
    				!!}

    
@overwrite

