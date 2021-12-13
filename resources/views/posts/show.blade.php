<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <h1>Blog Name</h1>
        </h1>
        <p class="edit">[<a href="/posts/{{ $posts->id }}/edit">edit</a>]</p>
        <form action="/posts/{{ $posts->id }}" id="form_{{ $posts->id }}" method="post" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit">delete</button> 
        </form>
        <div class="content">
            <div class="content__post">
                <h2 class="title">
                     {{ $posts->title }}
                </h2>
                <p>{{ $posts->body }}</p>
                <p class='updated_at'>{{ $posts->updated_at }}</p>
            </div>
        </div>
        <div class="back">[<a href="/">back</a>]</div>
        <script>
            function deletePost(e) {
                'use strict';
                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementById('form_delete').submit();
                }
            }
        </script>
    </body>
</html>