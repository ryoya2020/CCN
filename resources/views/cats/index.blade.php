@extends('layouts.app')

@section('content')

    <h1>里親募集中の猫一覧</h1>
    
    @if(count($cats) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>写真</th>
                    <th>名前</th>
                    <th>性別</th>
                    <th>年齢</th>
                    <th>好きなもの</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cats as $cat)
                <tr>
                    <td>{{$cat->cat_image}}</td>
                    <td>{{$cat->name}}</td>
                    <td>{{$cat->sex}}</td>
                    <td>{{$cat->age}}</td>
                    <td>{{$cat->like}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
     @foreach ($cats as $cat)
    <tr>
        {{-- メッセージ詳細ページへのリンク --}}
        <td>{!! link_to_route('cats.show', $cat->id, ['cat' => $cat->id]) !!}</td>
        <td>{{ $cat->content }}</td>
    </tr>
    @endforeach
    {{-- 里親募集中の猫のページ作成のリンク --}}
    {!! link_to_route('cats.create','里親募集猫の追加',[],['class' => 'btn btn-primary']) !!}

@endsection