@extends('layouts.app')

@section('content')

<h1>id: {{ $cat->id }} の編集ページ</h1>

    <div class="row">
        <div class="col-6">
            {!! Form::model($cat, ['route' => ['cats.update', $message->id], 'method' => 'put']) !!}

                 <div class="form-group">
                    {!! Form::label('content','名前') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('content','性別') !!}
                    {{ Form::select('content',['オス','メス'])}}
                </div>
                
                <div class="form-group">
                    {!! Form::label('content','年齢（推定）') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('content','好きなもの') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('file','画像投稿') !!}
                    {!! Form::file('file', null, ['class' => 'form-control']) !!}

                {!! Form::submit('更新', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@endsection