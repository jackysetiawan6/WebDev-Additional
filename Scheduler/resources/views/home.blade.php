<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Scheduler</title>
    <link rel="shortcut icon" href="https://static-00.iconduck.com/assets.00/bitcoin-icon-2048x2048-t8gwld81.png"
        type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="container m-0 p-5" style="max-width: none;">
        <form action="{{ route('schedules.create') }}" method="POST">
            @csrf
            <div class="row d-flex align-items-end">
                <div class="col-md-3">
                    <label for="task" class="form-label">Task</label>
                    <input type="text" class="form-control" id="task" name="task" required>
                </div>
                <div class="col-md-3">
                    <label for="owner" class="form-label">Owner</label>
                    <input type="text" class="form-control" id="owner" name="owner" required>
                </div>
                <div class="col-md-3">
                    <label for="due_date" class="form-label">Due Date</label>
                    <input type="date" class="form-control" id="due_date" name="due_date" required>
                </div>
                <div class="col-md-3">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-select" id="status" name="status" required>
                        <option value="Pending">Pending</option>
                        <option value="In Progress">In Progress</option>
                        <option value="Completed">Completed</option>
                    </select>
                </div>
                <div class="col-md-3 mt-3">
                    <label for="priority" class="form-label">Priority</label>
                    <select class="form-select" id="priority" name="priority" required>
                        <option value="Low">Low</option>
                        <option value="Medium">Medium</option>
                        <option value="High">High</option>
                    </select>
                </div>
                <div class="col-md-3 mt-3">
                    <label for="notes" class="form-label">Notes</label>
                    <input type="text" class="form-control" id="notes" name="notes" required>
                </div>
                <div class="col-md-3 mt-3">
                    <label for="budget" class="form-label">Budget</label>
                    <input type="number" class="form-control" id="budget" name="budget" required max="99999999999"
                        min="0">
                </div>
                <div class="col-md-3 mt-3">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </form>
        <table class="table table-borderless table-striped mt-5">
            <caption>{{ $schedules->links() }}</caption>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th style="width: 20%;" scope="col">Task</th>
                    <th style="width: 15%;" scope="col">Owner</th>
                    <th style="width: 10%;" scope="col">Due Date</th>
                    <th style="width: 10%;" scope="col">Status</th>
                    <th style="width: 10%;" scope="col">Last Updated</th>
                    <th style="width: 5%;" scope="col">Priority</th>
                    <th style="width: 20%;" scope="col">Notes</th>
                    <th style="width: 10%;" scope="col">Budget</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($schedules as $schedule)
                    <tr class="align-top">
                        <th scope="row">{{ $schedule->id }}</th>
                        <td class="text-break">{{ $schedule->task }}</td>
                        <td class="text-break">{{ $schedule->owner }}</td>
                        <td>{{ $schedule->due_date->format('d M Y') }}</td>
                        <td>{{ $schedule->status }}</td>
                        <td>{{ $schedule->updated_at->format('d M Y') }}</td>
                        <td>{{ $schedule->priority }}</td>
                        <td class="text-break">{{ $schedule->notes }}</td>
                        <td>IDR {{ number_format($schedule->budget, 2, ',', '.') }}</td>
                        <td class="d-flex gap-2">
                            {{-- <form action="{{ route('schedules.update', ['id' => $schedule->id]) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-warning" title="Update"><i
                                        class="bi bi-pencil" style="width: fit-content;"></i></button>
                            </form> --}}
                            <form action="{{ route('schedules.delete', ['id' => $schedule->id]) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger" title="Delete"><i class="bi bi-trash"
                                        style="width: fit-content;"></i></button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="10" class="text-center bg-danger text-white">No tasks found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
