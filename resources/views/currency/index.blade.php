<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{  csrf_token() }}">
    <title>Список валют</title>
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
</head>
<body>

<div class="container">
    <div class="row header">
        <div class="col">
            <h1>Список валют</h1>
        </div>
        <div class="col-2">
            <button id="update-currency" class="btn btn-outline-secondary">Обновить валюты</button>
        </div>
    </div>

    <section class="currencies">
        <div class="row">
            <div class="col">
                <table id="currencies" cellspacing="0" class="table table-bordered">
                    <thead class="thead-dark">
                    <tr>
                        <th>Валюта</th>
                        <th>Цена</th>
                        <th>Количество</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>

        </div>
    </section>
</div>


<script src="{{ asset("js/app.js") }}"></script>
</body>
</html>