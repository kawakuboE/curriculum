{{-- layouts/app.blade.phpを読み込む --}}
@extends('layouts.app')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'Home')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')

<link href="{{ asset('css/test.css') }}" rel="stylesheet">
    <div class="container">
        <div class="row justify-content-center tracking-wider">
            <div class="col-md-8 mx-auto">
                <form class="card mb-2 form" action="{{ action('PostController@create') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif

                    <div class="form-group">
                        <label class="col-md-2" for="title">ホーム</label>
                        <hr>
                        <div class="card-body">
                            <div class="w-full px-3 mx-auto">
                                <input type="text" class="form-control" name="body" placeholder="いまどうしてる？"  value="{{ old('body') }}">
                            </div>
                        </div>

                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        {{ csrf_field() }}
                        <div class="text-right">
                            <input type="submit" value="つぶやく" class="btn btn-primary">
                        </div>
                    </div>
                </form>

                <div class="card mb-2">
                    @foreach($posts as $post)
                    <div class="flex card mb-2 justify-between">
                        @foreach($users as $user)
                            @if($user->id == $post->user_id)
                            <div class="flex flex-row justify-between w-full py-3">
                                <div class="flex flex-col border-box mx-4 border-b border-gray-200 username">{{ $user->name }}</div>
                                <div class="text-right">{{ $post->created_at }}</div>
                            </div>
                            <div class="bodywrap">
                                <div class="flex flex-col border-box mx-4 border-b border-gray-200">{{ $post->body }}</div>
                                @if(Auth::id() == $post->user_id)
                                    <div class="text-right">
                                        <a href="{{ action('PostController@delete', ['id' => $post->id]) }}">削除</a>
                                    </div>
                            </div>
                                @endif
                            @endif
                        @endforeach
                            </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection