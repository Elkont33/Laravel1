@extends('master')

@section('content')

<span><b><a href="../pages">Back to Pages List ></a></b></span>

<div class="row list-group-item-info page-title">
    <div class="col-xs-12">
      {{$page -> title}}
    </div>
</div>

@foreach($page -> notes as $note)
<div class="row list-group-item">
    <div class="col-xs-8">
     {{$note -> text}}
    </div>
    <div class="col-xs-4">
        <button type="button" class="btn btn-danger pull-right">Delete</button> 
        <button type="button" class="btn btn-default pull-right">Edit</button> 
    </div>
</div>
@endforeach
<div class="row list-group-item">
    <form method="POST" action="pages/{{$page -> id}}/notesadd">
      {{csrf_field()}}
        <div class="input-group">
          <input type="text" name="text" class="form-control" placeholder="Add Note . . .">
          <span class="input-group-btn">
            <button class="btn btn-default" type="submit">Add</button>
          </span>
        </div>
    </form>
</div>

@stop
