@extends('layouts.admin.app')
@section('content')
  <h1>HOLA ESTAS EN EL INDEX | {{session('USER')->nombre_jugadores}}</h1>
@endsection
