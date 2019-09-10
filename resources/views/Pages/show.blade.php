@extends('master')
@section('content')

<h1> Pages list </h1>

@foreach($pages as $page)
<a href="#">
    <div class="row list-group-item page-title-list">
        <div class="col-xs-8">
{{$page -> title }}
        </div>
    </div>
    <div class="col-xs-4">
        <div><a href="pages/{{$page -> id}}/delete" class="btn btn-dange pull-right">Delete </a>
        </div>
    </div>
</a>
@endforeach
<form method="POST" action="pagesadd">
    {{ csrf_field() }}
    <div class="input-group">
    <input type="text" name= "title" class="form-control" placeholder="add page">
        <span class="input-group-btn">
        <button class="btn btn-default" type="submit"> Add </button></span>
    </div>
</form>
@stop