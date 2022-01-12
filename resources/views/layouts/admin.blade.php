
@extends('adminlte::page')

@section('content_header')
<h1></h1>
@stop
    
@section('content')
 <p> Welcome to this beautiful admin panel.</p>
@stop

@section('css')
<link rel="stylesheet"href="css/admin_custom.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
@stop
 
@section('js')
<script> console.log('Hi'); </script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>

@stack('script')
@include('sweetalert::alert')
@stop

     

 
