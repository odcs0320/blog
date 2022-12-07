@extends('layouts.master')<!--繼承父視圖-->
<h1>角色建立頁面</h1>
@section('gallery')

{!! Form::open(['url'=>'articles','method'=>'POST','files'=>true]) !!}



        {!! Form::hidden('mode',1)!!}

        {!! Form::label('subject', '標題', ['class' => 'myclass']) !!}
        {!! Form::text('subject', null) !!}

        @error('subject')
            <div class="alert alert-danger" style="color:red">{{$message}}</div>
        @enderror

        <br><br>

        {!! Form::label('desc', '內文', ['class' => 'myclass']) !!}
        {!! Form::textarea('desc', null, ['cols' =>70 , 'rows'=>10]) !!}

        @error('desc')
            <div class="alert alert-danger" style="color:red">{{$message}}</div>
        @enderror

        <br><br>

        {!! Form::label('status', '狀態', []) !!}
        重要{!! Form::radio('status', 1, true) !!}
        一般{!! Form::radio('status', 0, false) !!}<br><br>


        {!! Form::label('tags', '標籤', []) !!}
        <div style="color:blue">news</div>{!! Form::checkbox('tags', 1, false, []) !!}</div>
        <div style="color:red">skill</div>{!! Form::checkbox('tags', 0, false, []) !!}</div>
        <div style="color:green">like{!! Form::checkbox('tags', -1,false, []) !!}</div>
        <br><br>

        {!! Form::label('sort', '排序', []) !!}
        {!! Form::number('sort', rand(0,255), ['min'=>0 , 'max'=>255]) !!}<br><br>

        {!! Form::label('month', '出生月份', []) !!}
        {!! Form::selectMonth('month', null, []) !!}

        {!! Form::label('day', '出生日期', []) !!}
        {!! Form::selectRange('day', 1, 31, 1, []) !!}<br><br>

        {!! Form::label('tags', '角色職業', []) !!}
        {!! Form::select('tags', $tags ,null, ['placeholder' => '請選擇角色職業']) !!}<br><br>

        {!! Form::label('pwd', '密碼', []) !!}
        {!! Form::password('pwd', []) !!}<br><br>

        {!! Form::label('email', 'Email', []) !!}
        {{ Form::email('email',null,[]) }}<br><br>

        {!! Form::label('pic', '圖片', []) !!}
        {!! Form::file('pic', []) !!}<br><br>

        {!! Form::label('date', '日期', []) !!}
        {!! Form::date('date',null, []) !!}<br><br>

        {!! Form::submit('儲存', []) !!}
        {!! Form::reset('重置', []) !!}



{!! Form::close() !!}
@stop

