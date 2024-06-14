<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Edit Product</h1>
        <form method="post" action="{{route('product.update', ['product' => $product])}}">
            @csrf
            @method('put')
            <div>
                <label for="">Name</label>
                <input type="text" name = "name" placeholder = "Name" value = "{{$product->name}}">
            </div>
            <div>
                <label for="">Quantity</label>
                <input type="text" name = "quantity" placeholder = "Quantity" value = "{{$product->quantity}}">
            </div>
            <div>
                <label for="">Price</label>
                <input type="text" name = "price" placeholder = "Price" value = "{{$product->price}}">
            </div>
            <div>
                <label for="">Description</label>
                <input type="text" name = "description" placeholder = "Description" value = "{{$product->description}}">
            </div>
            <input type="submit" value = "Edit Product">
        </form>
    </div>
</body>
</html>