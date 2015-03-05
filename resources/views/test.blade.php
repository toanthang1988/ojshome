<!-- test -->
@extends('layout.master.master')
<!-- Page Title -->
@section('title')
Main Page

@stop

<!-- Welcome user -->
@section('user-welcome')
    <p>Hello, Thang</p>
    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
@stop

@section('custom-menu')
    
    <?php echo create_menu_item('Thang') ?>
    <?php echo create_menu_item('Users management', 4, ['Create', 'Edit', 'c', 'd'], ['users/create', 'fjkl', 'fkdlowoo', '48782']) ?>

    
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
