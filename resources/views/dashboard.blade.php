<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @forelse($post as $post)

    <article>
        <h2><a href="/show/{{$post->slug}}">{{$post->title}}</a></h2>
        <p>{{$post->excerpt}}</p>

    </article>

    @empty
    <tr colspan="3">
        <td>No data</td>
    </tr>
    @endforelse
</body>

</html>