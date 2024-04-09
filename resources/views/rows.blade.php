<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Information</title>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Table</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>

</head>

<body>
    <div class="container">
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th scope="col" class="align-middle">№</th>
                    <th scope="col" class="align-middle">Протокол (TCP,UDP,IP,ICMP)</th>
                    <th scope="col" class="align-middle">Диапазон IP / ID удалённой группы</th>
                    <th scope="col" class="align-middle">Порты</th>
                    <th scope="col" class="align-middle">Описание правила</th>
                    <th scope="col" class="align-middle">Имя группы безопасности</th>
                    <th scope="col" class="align-middle">ID правила</th>
                    <th scope="col" class="align-middle">Проект</th>
                </tr>

            </thead>
            <tbody>

                @foreach($rows as $row)
                <tr>
                    <td>{{$row->num}}</td>
                    <td>{{$row->protocol}}</td>
                    <td>{{$row->ip_range}}</td>
                    <td>{{$row->port_range}}</td>
                    <td>{{$row->description}}</td>
                    <td>{{$row->security_group_id}}</td>
                    <td>{{$row->id}}</td>
                    <td>{{$row->project_id}}</td>
                    @endforeach
                </tr>

            </tbody>
        </table>
        <div>
            {{$rows->links()}}
        </div>
    </div>





    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>


</body>

</html>
