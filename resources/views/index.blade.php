<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


        <title>Laravel</title>

        <style>
            td { height:100px; }
            a { color:white; }

        </style>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body class="antialiased">


    <div class="container">
    <br />
        <div class="container">
            <div class="row">
                <div class="col col-lg-1">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ $year }}
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/{{$month}}/{{$year-1}}">{{ $year-1 }}</a></li>
                            <li><a class="dropdown-item" href="/{{$month}}/{{$year}}">{{ $year }}</a></li>
                            <li><a class="dropdown-item" href="/{{$month}}/{{$year+1}}">{{ $year+1}}</a></li>
                            <li><a class="dropdown-item" href="/{{$month}}/{{$year+2}}">{{ $year+2}}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col col-lg-2">

                    <button type="button" class="btn btn-secondary"><a href="/{{$month-1}}/{{$year}}"><</a></button>

                    <button type="button" class="btn btn-secondary">{{$month_array[intval($month)]}}</button>

                    <button type="button" class="btn btn-secondary"><a href="/{{$month+1}}/{{$year}}">></a></button>


                </div>
                <div class="col col-lg-1">
                   <!-- Dummy -->
                </div>
            </div>
        </div>
    <br/>
        <table class="table table-sm">
            <thead>
                <tr>
                    <th>MO</th>
                    <th>DI</th>
                    <th>MI</th>
                    <th>DO</th>
                    <th>FR</th>
                    <th>SA</th>
                    <th>SO</th>


                </tr>
            </thead>
            <tbody class="table-group-divider">

            @for($a=1; $a <= 6; $a++)
                <tr>
                    @for($b = $a*7-7; $b <= $a*7-1; $b++)
                            <td> {{ $data[$b] }}  <br/>
                            @if(in_array($data[$b],$targets))
                                 x
                            @endif
                            </td>
                    @endfor
                </tr>
            @endfor

            <!-- old code - refactored and compressed
            <tr>
                @for($a=0; $a <= 6; $a++)
                    <td> {{ $data[$a] }} </td>
                @endfor
            </tr>
            <tr>
                @for($a=7; $a <= 13; $a++)
                    <td> {{ $data[$a] }} </td>
                @endfor
            </tr>
            <tr>
                @for($a=14; $a <= 20; $a++)
                    <td> {{ $data[$a] }} </td>
                @endfor
            </tr>
            <tr>
                @for($a=21; $a <= 27; $a++)
                    <td> {{ $data[$a] }} </td>
                @endfor
            </tr>
            <tr>
                @for($a=28; $a <= 34; $a++)
                    <td> {{ $data[$a] }} </td>
                @endfor
            </tr>
            <tr>
                @for($a=35; $a <= 41; $a++)
                    <td>
                        {{ $data[$a] }} <br/>
                        @if(in_array($data[$a], $targets))
                            X
                        @endif
                    </td>
                @endfor
            </tr>
            -->
            </tbody>
        </table>
    </div>

    </body>
</html>


