@extends('home_page')
@section('content')
<div style="width: 60%; margin: 0px 0px 0px 50px;">
    <table class="table table-hover table-striped">
        <thead style="width: 50%">
        <tr>
            <th>№</th>
            <th>Имя</th>
        </tr>
        </thead>
        <tbody>
        @if(isset($countries))
        @foreach($countries as $k => $country)
            <tr>
                <td>
                    {{$country->id}}
                </td>
                <td>
                    {{$country->name}}
                </td>
            </tr>
        @endforeach
        @endif
        </tbody>
    </table>
    <p><a class="btn btn-primary btn-lg" href="{{route('countryAdd')}}" methods="get">Добавить новую Страну</a></p>
</div>
@endsection