<body style="text-align: center">
<h1>匿名貼圖討論區</h1>

{!! Form::open(['url'=>'articles','method'=>'POST','files'=>true]) !!}

        {!! Form::label('author', '名稱', ['class' => 'myclass']) !!}
        {!! Form::text('author', null) !!}

        {!! Form::submit('送出', []) !!}

        <br><br>

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


{!! Form::close() !!}
</body>
