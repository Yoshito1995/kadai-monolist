@extends('layouts.app')

@section('cover')
    <div class="cover">
        <div class="cover-inner">
            <div class="cover-contents">
                <h1>なんか文句あんのか</h1>
                @if (!Auth::check())
                    <a href="{{ route('signup.get') }}" class="btn btn-success btn-lg">始められると思うなよ</a>
                @endif
            </div>
        </div>
    </div>
@endsection

@section('content')
    @include('items.items')
    {!! $items->render() !!}
@endsection