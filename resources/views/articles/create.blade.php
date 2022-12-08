<<<<<<< HEAD
@extends('layouts.master')<!--繼承父視圖-->
@section('gallery')

{!! Form::open(['url'=>'articles','method'=>'POST','files'=>true]) !!}

        {!! Form::hidden('mode',1)!!}
=======
<body style="text-align: center">
<h1>匿名貼圖討論區</h1>

{!! Form::open(['url'=>'articles','method'=>'POST','files'=>true]) !!}

        {!! Form::label('author', '名稱', ['class' => 'myclass']) !!}
        {!! Form::text('author', null) !!}

        {!! Form::submit('送出', []) !!}

        <br><br>
>>>>>>> 35361c8186b705086d410a44bffe5d5d56953f53

        {!! Form::label('subject', '標題', ['class' => 'myclass']) !!}
        {!! Form::text('subject', null) !!}

        <br><br>

        {!! Form::label('desc', '內文', ['class' => 'myclass']) !!}
        {!! Form::textarea('desc', null, ['cols' =>70 , 'rows'=>10]) !!}

        @error('desc')
            <div class="alert alert-danger" style="color:red">{{$message}}</div>
        @enderror

        <br><br>

        {!! Form::label('pic', '附加圖檔', []) !!}
        {!! Form::file('pic', []) !!}

        <div>無貼圖</div>{!! Form::checkbox('tags', 0, false, []) !!}
        <div>SAGE</div>{!! Form::checkbox('tags', 1, false, []) !!}

        <br><br>

<<<<<<< HEAD
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
=======

{!! Form::close() !!}
</body>
>>>>>>> 35361c8186b705086d410a44bffe5d5d56953f53
