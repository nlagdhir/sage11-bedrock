@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @include('partials.page-sections')
    @includeFirst(['partials.content-page', 'partials.content'])
  @endwhile
@endsection
