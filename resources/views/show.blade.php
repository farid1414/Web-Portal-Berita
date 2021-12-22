<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show</title>
</head>

<body>
    <article>
        <h3>{{$id->title}}</h3>
        <a href="/category/{{$id->category->slug}}">{{$id->category->name}}</a>
        <p>{!! $id->body !!}</p>
    </article>

</body>

</html>