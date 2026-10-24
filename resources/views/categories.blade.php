<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Hello categories page</h2>


    @foreach ($result as $item)
    <h3>{{$item->id}}</h3>
    <h3>{{$item->title_en}}</h3>
    <h3>{{$item->title_ar}}</h3>
    <h3>{{$item->description_en}}</h3>
    <h3>{{$item->description_ar}}</h3>
    <h3>{{$item->create_at}}</h3>
    <hr>
    @endforeach

</body>
</html>