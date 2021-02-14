@extends('layouts.app')

@section('content')

<h1 class="header-margin page-heading text-center">input</h1>


<form action="{{route('save')}}" method="post" enctype="multipart/form-data">
  @csrf
  <div>
    <label>title</label><br>
    <input type="text" name="title" />
  </div>
  <div>
    <label>content</label><br>
    <textarea name="content" cols="30" rows="10"></textarea>
  </div>
  @error('file')
      {{$message}}
      <br>
  @enderror
  <input type="file" name="file">
  <input type="submit" value="送信">
</form>

@endsection
