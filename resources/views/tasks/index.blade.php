<!DOCTYPE html>
<html>
<head>
    <title>Laravel Task Manager</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5">

    <h1>Task Manager</h1>

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

        <li class="list-group-item">

            <div class="d-flex justify-content-between align-items-start">

                <div>

                    <strong
                    @if($task->completed)
                        style="text-decoration: line-through;"
                    @endif
                    >
                        {{ $task->title }}
                    </strong>

                    <br>

                    <small class="text-muted">
                        Created:
                        {{ $task->created_at->format('M d, Y h:i A') }}
                    </small>

                    <br>

                    <span
                    class="badge

                    @if($task->status == 'New')
                        bg-secondary
                    @elseif($task->status == 'Pending')
                        bg-warning text-dark
                    @elseif($task->status == 'In Progress')
                        bg-info text-dark
                    @elseif($task->status == 'Done')
                        bg-success
                    @endif
                    ">
                        {{ $task->status }}
                    </span>

                </div>

                <div>

                    <!-- Status Dropdown -->
                    <form
                        action="/tasks/{{ $task->id }}/status"
                        method="POST"
                        style="display:inline;">

                        @csrf
                        @method('PUT')

                        <select
                            name="status"
                            onchange="this.form.submit()"
                            class="form-select form-select-sm mb-2">

                            <option value="New"
                                {{ $task->status == 'New' ? 'selected' : '' }}>
                                New
                            </option>

                            <option value="Pending"
                                {{ $task->status == 'Pending' ? 'selected' : '' }}>
                                Pending
                            </option>

                            <option value="In Progress"
                                {{ $task->status == 'In Progress' ? 'selected' : '' }}>
                                In Progress
                            </option>

                            <option value="Done"
                                {{ $task->status == 'Done' ? 'selected' : '' }}>
                                Done
                            </option>

                        </select>

                    </form>

                    <!-- Complete Button -->
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

                    <!-- Delete Button -->
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

            </div>

        </li>

        @endforeach

    </ul>

</div>

</body>
</html>