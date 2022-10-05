<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <title>Laravel</title>

        <style>
            td { height:100px; }
        </style>


    </head>
    <body class="antialiased">

    <div class="container">
    <br/>
        <table class="table table-dark table-sm">
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
                    <td> {{ $data[$a] }} </td>
                @endfor
            </tr>

            </tbody>
        </table>
    </div>
    </body>
</html>
