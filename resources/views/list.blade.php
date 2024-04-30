@extends('layout.template');
@section('content')
@if(count($msgData))
@foreach($msgData as $x)
<ul class="list-group">
    <li class="list-group-item">Name: {{$x->name}}</li>
    <li class="list-group-item">Email: {{$x->email}}</li>
    <li class="list-group-item">Message: {{$x->messages}}</li>
</ul>
@endforeach
@endif
@endsection