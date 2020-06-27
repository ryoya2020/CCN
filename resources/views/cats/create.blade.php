@extends('layouts.app')

@section('content')

    <h1>里親募集中猫追加ページ</h1>
    <div class="row">
        <div class="col-6">
            {!! Form::model($cat,['route' => 'cats.store']) !!}
                
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
                </div>
                
                <div class="form-group">
                    
                </div>
                    
                    

                </div>
                
                {!! Form::submit('追加',['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>

@endsection