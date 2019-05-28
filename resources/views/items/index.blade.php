@extends('layouts.app')

@section('content')
    <h1>List of Items</h1>
    <hr>
    <table class="table table-bordered table-hover table-sm">
        <thead align="center">
            <th>#</th>
            <th>Item</th>
            <th>Detail</th>
            <th>Quantity</th>
            <th>Action</th>
        </thead>
        <tbody align="center">
            @if(count($items) > 0)
                @foreach($items as $row)
                    <tr>
                        <td>{{$row->id}}</td>
                        <td>{{$row->item_name}}</td>
                        <td>{{$row->item_detail}}</td>
                        <td>{{$row->item_quantity}}</td>
                        <td>
                            <a href="#" class="btn btn-outline-secondary btn-sm">Edit</a>
                            <a href="#" class="btn btn-outline-danger btn-sm">Remove</a>
                        </td>
                    </tr>
                @endforeach
            @else 
                <tr align="center">
                    <td colspan="5" style="font-style: italic;">No records found.</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection