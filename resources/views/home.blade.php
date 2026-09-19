@extends('layouts.default')

@section('header')
<h2>This is the header</h2>
@endsection

@section('maincontent')
<h1>Home</h1>
<form action="{{ route('formsubmitted') }}" method="POST">
    @csrf
    <label for="fullname">Full Name:</label>
    <input type="text" id="fullname" name="fullname" 
    placeholder="Type your name" required>
    <br><br>
    <label for="email">E-mail:</label>
    <input type="text" id="email" name="email" placeholder="Type your e-mail" required>
    <br><br>
    <button type="submit">Submit</button>        
</form>

@endsection

@section('footer')
<h2>this is the footer</h2>
@endsection
