<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MLP To-Do</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
</head>
<body class="bg-body-secondary">
    <div class="container">
        <div class="py-3">
            <img src="{{ asset('images/logo.png') }}" alt="MLP Reward Fulfilment Loyalty">
        </div>
        <div class="pt-3 row">
            <div class="col-4">
                <form method="post" action="/add">
                    @csrf
                    <div>
                        <input type="text" class="form-control mb-3" name="new-task" placeholder="Insert task name">
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                {{ $error }}
                            @endforeach
                        </div>
                    @endif
                    <div>
                        <button type="submit" class="form-control text-bg-primary">Add</button>
                    </div>
                </form>
            </div>
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <div class="">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Task</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody class="table-group-divider">
                            @foreach($tasks as $task)
                                <tr>
                                    <th scope="row">{{ $loop->index + 1 }}</th>
                                    <td>
                                        <span class="{{ ($task->completed) ? 'text-decoration-line-through' : '' }}">{{ $task->name }}</span>
                                    </td>
                                    <td>
                                        @if ($task->completed)
                                            &nbsp;
                                        @else
                                            <a href="/complete/{{ $task->id }}"><i class="bi-check-square-fill text-success" style="font-size: 1.3rem;"></i></a>
                                            <a href="/delete/{{ $task->id }}"><i class="bi-x-square-fill text-danger" style="font-size: 1.3rem;"></i></a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
