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
                            Prayer Times Prototype for Habib
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4 offset-md-4">
                        <form action="{{route('prayer-times')}}" method="GET">
                            <div class="form-group">
                                <label for="country">Country</label>
                                <input type="text" class="form-control" id="country" name="country" placeholder="Finland">
                            </div>
                            <div class="form-group">
                                <label for="city">City</label>
                                <input type="text" class="form-control" id="city" name="city" placeholder="Espoo">
                            </div>
                            <div class="form-group">
                                <label for="method">Fiqh School</label>
                                <select class="custom-select mr-sm-2" id="method" name="method">
                                    <option value="2" selected>Choose...</option>
                                    <option value="1">University of Islamic Sciences, Karachi</option>
                                    <option value="2">Islamic Society of North America</option>
                                    <option value="3">Muslim World League</option>
                                    <option value="4">Umm Al-Qura University, Makkah</option>
                                    <option value="5">Egyptian General Authority of Survey</option>
                                    <option value="7">Institute of Geophysics, University of Tehran</option>
                                    <option value="8">Gulf Region</option>
                                    <option value="9">Kuwait</option>
                                    <option value="10">Qatar</option>
                                    <option value="11">Majlis Ugama Islam Singapura, Singapore</option>
                                    <option value="12">Union Organization islamic de France</option>
                                    <option value="13">Diyanet İşleri Başkanlığı, Turkey</option>
                                    <option value="14">Spiritual Administration of Muslims of Russia</option>
                                </select>
                                <small id="emailHelp" class="form-text text-muted">The calculation method</small>
                            </div>
                            <button type="submit" class="btn btn-primary">Get Prayer Times</button>
                        </form>
                    </div>
                </div>
            </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
