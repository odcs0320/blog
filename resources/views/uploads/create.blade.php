<form action="{{ route('anonymous-messageboard.store') }}" method="POST">

<label for="article_number">文章號碼：</label>
<input type="text" id="article_number" name="article_number" value="{{ old('article_number') }}">

<label for="poster_id">留言者ID：</label>
<input type="text" id="poster_id" name="poster_id" value="{{ old('poster_id') }}">

<label for="message">訊息：</label>
<input type="text" id="message" name="message" value="{{ old('message') }}">

<label for="name">名稱：</label>
<input type="text" id="name" name="name" value="{{ old('name') }}">

<label for="title">標題：</label>
<input type="text" id="title" name="title" value="{{ old('title') }}">

<label for="content">內文：</label>
<textarea id="content" name="content">{{ old('content') }}</textarea>

<label for="attachment_url">附加圖檔：</label>
<input type="text" id="attachment_url" name="attachment_url" value="{{ old('attachment_url') }}">

<label for="sage">SAGE選項：</label>
<input type="checkbox" id="sage" name="sage" value="1" {{ old('sage') ? 'checked' : '' }}>

<button type="submit">留言</button>
</form>
