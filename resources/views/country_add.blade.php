@extends('home_page')
@section('content')
    <div class="wrapper container-fluid">
        <h4>Пример</h4>
        <p>Южная Корея</p>
        <p>Сан-Марино</p>
        <p>San marino</p>
        <form action="{{route('countryAdd')}}" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Заголовок</label>
                <input type="text" class="form-control" id="name" name="name"  value="{{old('name')}}" placeholder="Заголовок" style="width: 40%;">
            </div>
            <button type="submit" class="btn btn-default">Сохранить</button>
            {{csrf_field()}}
        </form>
    </div>
@endsection