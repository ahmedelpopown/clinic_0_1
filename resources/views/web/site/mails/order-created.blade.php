<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
    <h1>Hello {{$data['username']}}Yor order number {{$data['orderNumber']}} has ben Created  </h1>
    <p>Order has these product</p>
    <ul>
        @foreach ($data['products'] as  $product)
<li>{{$product}}</li>        
        @endforeach
    </ul>
</body>
</html>