<!DOCTYPE html>
<html lang="{{ config('app.url')}}">

<head>
    <title>View Products | Product Store</title>
</head>

<body>
    <div class="links">
        <a href="{{ config('app.url')}}">Home</a>
    </div>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <h1>Here's a list of avaliable products</h1>
            <table>
                <thead>
                    <td> </td>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Description</td>
                    <td>Count</td>
                    <td>Price</td>
                </thead>
                <tbody>
                    @foreach( $products as $product )
                    <tr>
                        <td>
                            <a href="{{ url('products/'.$product->id.'/edit') }}" class="btn btn-sm btn-primary">Edit</a>
                        </td>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td class=" inner-table">{{ $product->description }}</td>
                        <td class="inner-table">{{ $product->count }}</td>
                        <td class="inner-table">{{ $product->price }}</td>
                        <td>
                            <form action="{{ url('products/'.$product->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type='submit' class="btn btn-sm btn-primary">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>