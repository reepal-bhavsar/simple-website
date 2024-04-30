@extends('layout.template');
@section('content')
<form action="contactSubmit">
    <h2>Contact Form</h2>
    @if(count($errors))
    @foreach($errors->all() as $err)
    <div class="alert alert-danger">{{$err}}</div>
    @endforeach
    @endif
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" name="name" id="name">
    </div>
    <div class="form-group">
        <label for="email">Email address:</label>
        <input type="email" class="form-control" name="email" id="email">
    </div>
    <div class="form-group">
        <label for="email">Message:</label>
        <textarea class="form-control" rows="5" name="message" id="message"></textarea>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>
@endsection