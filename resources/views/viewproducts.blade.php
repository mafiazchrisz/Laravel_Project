@extends('layouts.app-master')

@section('content')
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <title> View Products | Product Store </title>

</head>

<body>
    <div class="bg-light p-5 rounded">
        @auth
        <div class="flex-center position-ref full-height">
            <div class="content">
                Here's a list of avaliable products
                <table>
                    <thead>
                        <td> </td>
                        <td> ID </td>
                        <td> Name </td>
                        <td> Description </td>
                        <td> Count </td>
                        <td> Price </td>
                        <td>
                            <a href="{{ config('app.url')}}/products/create" class="btn btn-sm btn-primary">Add</a>
                        </td>
                    </thead>
                    <tbody>
                        @foreach( $products as $product )
                        <tr>
                            <td>
                                <a href="{{    url('products/'.$product->id.'/edit')}}" class="btnbtn  -sm  btn  -primary">Edit</a>
                            </td>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td class="inner-class">{{ $product->description }}</td>
                            <td class="inner-class">{{ $product->count }}</td>
                            <td class="inner-class">{{ $product->price }}</td>
                            <td>
                                <form action="{{ url('products/'.$product->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-primary"> Delete </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @endauth

        @guest
        <div class="content">
            Here's a list of avaliable products
            <table>
                <thead>
                    <td> </td>
                    <td> ID </td>
                    <td> Name </td>
                    <td> Description </td>
                    <td> Count </td>
                    <td> Price </td>

                </thead>

                <tbody>
                    @foreach( $products as $product )
                    <tr>
                        <td> </td>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td class="inner-class">{{ $product->description }}</td>
                        <td class="inner-class">{{ $product->count }}</td>
                        <td class="inner-class">{{ $product->price }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endguest
</body>

</html>
@endsection