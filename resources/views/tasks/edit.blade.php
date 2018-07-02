@extends('layouts.app')

@section('content')

    <h1>id: {{ $task->id }}の編集ページ</h1>
    
    <div class="row">
        <div class="col-sm-8">
            <div class=" col-lg-6">
                {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
                    <div class="form-group">
                        {!! Form::label('status', '進捗状況：') !!}
                        {!! Form::text('status', null, ['class' => 'form-control']) !!}
                    </div>
            </div>
        </div>
        <div class="col-sm-offset-2 col-sm-8">
            <div class="col-lg-offset-3 col-lg-6">
                <div class="form-group">
                        {!! Form::label('content', 'タスク内容：') !!}
                        {!! Form::text('content', null, ['class' => 'form-control']) !!}
                    </div>
                    
                    {!! Form::submit('更新', ['class' => 'btn btn-default']) !!}
                    
                {!! Form::close() !!}
            </div>
        </div>
        
    </div>
    
@endsection