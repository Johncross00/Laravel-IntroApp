@extends('layouts.app')
@section('content')
    <h2>ADDITION</h2>
    <form action="{{route('add')}}" method="POST">
        <table>
            <tr>
                <td>Nombre 1</td>
                <td><input type="text"></td>
            </tr>
        </table>
    </form>
@endsection