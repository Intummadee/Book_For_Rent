@extends('layout')

@section('title', 'Home')


@section('content')
    <h1>Home!!</h1>
    <div class="table-responsive">
    <table class="table table-hover table-bordered align-middle text-center">
        <thead class="table-dark">
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Name</th>
            <th scope="col">Content</th>
            <th scope="col">Price</th>
          </tr>
        </thead>
        <tbody>
            <?php $num = 1; ?>
            @foreach ($books as $book)
          <tr>
            <th scope="row"> {{$num}} </th>
            <td>{{$book["name"]}}</td>
            <td>{{$book["content"]}}</td>
                @if ($book["price"] > 100)
                <td class="text-danger">{{$book["price"]}}</td>
                @else
                <td class="text-success" >{{$book["price"]}}</td>
                @endif
            </tr>
            <?php $num++; ?>
          @endforeach
        </tbody>
      </table>
    </div>

    <a href="/create" class="btn btn-info">Create Form</a>




@endsection


