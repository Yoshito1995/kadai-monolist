@extends('layouts.app')

@section('content')
    <h1>Wantランキング</h1>
    @include('items.want_items', ['items' => $items])
@endsection