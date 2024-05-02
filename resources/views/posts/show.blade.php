@section('content')
<h1>詳細</h1>
<table class="table table-striped">
  <thead>
    <tr>
      <th>タイトル:</th>
      <td>{{ $post->title }}</td>
      <th>内容:</th>
      <td>{{ $post->message }}</td>
    </tr>
  </thead>
</table>

