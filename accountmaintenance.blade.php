@extends('design.master')

@section('title', 'Account Maintenance - Amazing E-Book')

<style>
    .table{
        border: 1px solid black;
    }
</style>

<table class="table" style="border-collapse: collapse">
    <thead>
        <th class="table">Account</th>
        <th class="table">Action</th>
    </thead>
    <tbody>
        <tr>
            @foreach($account as $a)
            <td class="table">{{$a->id}} - {{$a->role}}</td>
            <td class="movie">
                <form action="/updaterole/{{$a->id}}/{{$a->role}}" method="post">
                    {{csrf_field()}}
                    {{method_field('update')}}
                    <button type="submit">Update Role</button>
                </form>
                <form action="/delete/{{$a->id}}" method="post">
                    {{csrf_field()}}
                    {{method_field('delete')}}
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection