<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Prayer Times Prototype</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
            <div class="container">
                <div class="card">
                    <div class="col-4 offset-md-4">
                        <div class="card-body">
                            <b>Prayer Times for {{$city}}, {{$country}}</b>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4 offset-md-4">
                        <table class="table table-dark">
                        <tbody>
                            @foreach ($times as $key=>$val)
                            <tr>
                            <th scope="row">{{$key}}</th>
                            <td>{{$val}}</td>
                            </tr>
                            
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 offset-md-4">
                        <a href="{{route('home')}}"> Choose another input </a>
                    </div>
                </div>
            </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
