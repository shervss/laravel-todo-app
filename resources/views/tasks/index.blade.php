<!DOCTYPE html>
<html>
<head>
    <title>Laravel Todo App</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5">

    <h1>To-Do List</h1>

    <form action="/tasks" method="POST">

        @csrf

        <div class="input-group mb-3">

            <input
                type="text"
                name="title"
                class="form-control"
                placeholder="Enter task">

            <button class="btn btn-primary">
                Add Task
            </button>

        </div>

    </form>

    <ul class="list-group">

        @foreach($tasks as $task)

        <li class="list-group-item d-flex justify-content-between">

            <span
            @if($task->completed)
            style="text-decoration: line-through;"
            @endif
            >
                {{ $task->title }}
            </span>

            <div>

                <form
                    action="/tasks/{{ $task->id }}"
                    method="POST"
                    style="display:inline;">

                    @csrf
                    @method('PUT')

                    <button class="btn btn-success btn-sm">
                        Complete
                    </button>

                </form>

                <form
                    action="/tasks/{{ $task->id }}"
                    method="POST"
                    style="display:inline;">

                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger btn-sm">
                        Delete
                    </button>

                </form>

            </div>

        </li>

        @endforeach

    </ul>

</div>

</body>
</html>