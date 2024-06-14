<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Create Product</h1>
        <form method = "post" action="{{route('product.create')}}">
            @csrf 
            @method('post')
            <table>
            <div>
                <tr>
                    <td><label for="">Name</label></td>
                    <td><input type="text" name = "name" placeholder = "Name"></td>
                </tr>
            </div>
            <div>
                <tr>
                    <td><label for="">Quantity</label></td>
                    <td><input type="text" name = "quantity" placeholder = "Quantity"></td>
                </tr>
            </div>
            <div>
                <tr>
                    <td><label for="">Price</label></td>
                    <td><input type="text" name = "price" placeholder = "Price"></td>
                </tr>
            </div>
            <div>
                <tr>
                    <td><label for="">Description</label></td>
                    <td><input type="text" name = "description" placeholder = "Description"></td>
                </tr>
            </div>
            <tr>
                <td></td>
                <td><input type="submit" value = "Create Product"></td>
            </tr>
            </table>
        </form>
    </div>

    <div>
        <h1>Products</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('success'))
            <div>
                {{ session('success') }}
            </div>
        @endif
        
        <table border = 1>
            <tr>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($products as $product)
            <tr>
                <td>{{$product->name}}</td>
                <td>{{$product->quantity}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->description}}</td>
                <td>
                    <a href="{{route('product.edit', ['product' => $product])}}">Edit</a>
                </td>
                <form method="post" action="{{ route('product.delete', ['product' => $product]) }}">
                    @csrf
                    @method('delete')
                    <td>
                        <input type="submit" value = "Delete">
                    </td>
                </form>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>