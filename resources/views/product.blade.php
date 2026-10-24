<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<h2>Heloooo</h2>

@foreach ($result as $item)
    <h4>{{$item->id}}</h4>
    <h4>{{$item->title_en}}</h4>
    <h4>{{$item->title_ar}}</h4>
    <h4>{{$item->description_en}}</h4>
    <h4>{{$item->description_ar}}</h4>
    <h4>{{$item->price}}</h4>
    <h4>{{$item->quantity}}</h4>
    
@endforeach


</body>
</html>