@extends('layouts.app')

@section('content')

<h1>id = {{ $cat->id }} の里親募集猫詳細ページ</h1>
    <table class="table table-bordered">
        <tr>
            <th>写真</th>
            <th>名前</th>
            <th>性別</th>
            <th>年齢</th>
            <th>好きなもの</th>
        </tr>
        <tr>
            <td>{{$cat->cat_image}}</td>
            <td>{{$cat->name}}</td>
            <td>{{$cat->sex}}</td>
            <td>{{$cat->age}}</td>
            <td>{{$cat->like}}</td>
        </tr>
    </table>
    {{-- メッセージ編集ページへのリンク --}}
    {!! link_to_route('cats.edit', 'この猫情報を編集', ['cat' => $cat->id], ['class' => 'btn btn-light']) !!}

    {{-- メッセージ削除フォーム --}}
    {!! Form::model($cat, ['route' => ['cats.destroy', $cat->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
    
    {{-- 猫情報編集ページへのリンク --}}
    {!! link_to_route('cats.edit', 'この猫の情報を編集', ['cat' => $cat->id], ['class' => 'btn btn-light']) !!}

@endsection