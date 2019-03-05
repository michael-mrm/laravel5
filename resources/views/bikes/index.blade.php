@extends('bikes.master')
@section('content')
<table>
    <tr>
    @foreach ($bikes as $bikes)        
    <td>
        <h3>{{$bikes->brand}}</h3>
        <h5>{{$bikes->model}}</h5>
        <p>{{$bikes->price}}</p>
        <br/>
        <ul>
            <li><a href="/showbikes/{{$bikes->id}}">select bike</a></li>
        </ul>
        <br/>
    </td>    
    @endforeach
    </tr>
</table>
@endsection

