<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name') }}</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
</head>
<body>
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">{{ config('app.name') }}</h1>
    <p class="lead">{{ config('app.description') }}</p>
</div>

<div class="container">
    <div class="card-deck mb-3 text-center">
        @foreach ($data as $label => $value)
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">{{ $label }}</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">{{ $value }}</h1>
                </div>
            </div>
        @endforeach
    </div>
    <h2>Items</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Description</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($items as $id => $item)
            <tr>
                <td>{{ $id }}</td>
                <td><b>{{ $item->name }}</td>
                <td>{{ $item->description }}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
