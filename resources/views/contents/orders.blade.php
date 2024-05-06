@extends('layouts.app')
@section('content')
<h1><center>THIS IS THE ORDERS</center></h1>
<form action="" method="POST">
    @csrf
    <label for="">Nom</label>
    <input type="text">
    <label for="">Prenom</label>
    <input type="text">
    <label for="">Age</label>
    <input type="number">
    <label for="">Sexe</label>
    <label for="">M</label>
    <input type="radio" name="s" value="F">
    <label for="">F</label>
    <input type="radio" name="s" value="M">

</form>
@endsection
