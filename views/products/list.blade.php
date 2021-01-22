@extends('layouts.master')

@section('main')
  @component('components.main')
    @slot('title')
      product list
    @endslot
    
    @slot('body')
      product body
    @endslot
  @endcomponent
@endsection
