@extends('welcome')

@section('content')
    <h1>Contact Page</h1>
    <hr>
    <form action="" method="post">
       <input type="hidden" name="_token" value="{{csrf_token()}}"
        name<br>
        <input type="text" name="name">
        <br>
        email<br>
        <input type="text" name="email">
        <br><br>
        <button type="submit">add</button>
    </form>

@endsection

