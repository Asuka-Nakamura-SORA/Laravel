<!DOCTYPE html>
<html lang="ja">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>

   <!-- <script>
    @if ($errors->any())
      alert("{{ implode('\n', $errors->all()) }}");
    @elseif (session()->has('success'))
      alert("{{ session()->get('success') }}");
    @endif
    </script> -->
   
</head>
<body>
<h1><a href="{{ route('posts.index') }}">Laravel News</a></h1> {{-- index.blade.phpへのリンク --}}<br>
<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    タイトル
    <p><input type="text" name="title"></p>
    内容
    <p><textarea name="message" cols="50" rows="5"></textarea></p>
    <input type="submit" value="投稿" onclick='return confirm("本当に投稿しますか？")'> 
</form>

@if ($errors->any())
    {{-- エラーメッセージ --}}
    <div class="error">
        {!! implode('<br>', $errors->all()) !!}
    </div>
    @elseif (session()->has('success'))
    {{-- 成功メッセージ --}}
    <div class="success">
        {{ session()->get('success') }}
    </div>
@endif

   @foreach ($posts as $post) {{-- PostControllerのindexメソッド内の「$posts」を受け取る --}}
       <h3>タイトル：{{ $post->title }}</h3>
       <p>内容：{{ $post->message }}</p>
       <td><a href="show.blade.php">記事全文・コメントを読む<BR><BR></a></td>
       <br>
   @endforeach
</body>
</html>