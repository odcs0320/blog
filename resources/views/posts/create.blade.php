<h1>角色建立頁面</h1>

{!! Form::open(['url'=>'posts','method'=>'POST','files'=>true]) !!}

        {!! Form::hidden('mode',1)!!}

        {!! Form::label('name', '角色名稱', ['class' => 'myclass']) !!}
        {!! Form::text('name', null) !!}

        @error('name')
            <div class="alert alert-danger" style="color:red">{{$message}}</div>
        @enderror

        <br><br>

        {!! Form::label('note', '角色介紹', ['class' => 'myclass']) !!}
        {!! Form::textarea('note', null, ['cols' =>70 , 'rows'=>10]) !!}

        @error('note')
            <div class="alert alert-danger" style="color:red">{{$message}}</div>
        @enderror

        <br><br>

        {!! Form::label('isMaster', '是否為主要角色', []) !!}
        {!! Form::checkbox('isMaster', 1, true) !!}<br><br>

        {!! Form::label('camp', '所屬陣營', []) !!}
        <div style="color:blue">聯盟{!! Form::radio('camp', 1, true, []) !!}</div>
        <div style="color:red">帝國{!! Form::radio('camp', 0, false, []) !!}</div>
        <div style="color:green">無所屬{!! Form::radio('camp', -1,false, []) !!}</div>
        <br><br>

        {!! Form::label('power', '相性值(0-255,影響劇情與寶物參數)', []) !!}
        {!! Form::number('power', rand(0,255), ['min'=>0 , 'max'=>255]) !!}<br><br>

        {!! Form::label('month', '出生月份', []) !!}
        {!! Form::selectMonth('month', null, []) !!}

        {!! Form::label('day', '出生日期', []) !!}
        {!! Form::selectRange('day', 1, 31, 1, []) !!}<br><br>

        {!! Form::label('job', '角色職業', []) !!}
        {!! Form::select('job', $jobs ,null, ['placeholder' => '請選擇角色職業']) !!}<br><br>

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
