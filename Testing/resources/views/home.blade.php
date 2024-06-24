<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Testing</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            *::-webkit-scrollbar {
                display: none;
            }
            .container {
                display: flex;
                justify-content: space-between;
                align-items: start;
                height: fit-content;
                width: 100vw;
                max-width: none;
                padding: 30px;
                margin: 0;
                gap: 30px;
            }
            .left {
                height: 100%;
                width: 30%;
                display: flex;
                flex-direction: column;
                gap: 50px;
            }
            .left form {
                height: 100%;
                width: 100%;
                display: flex;
                flex-direction: column;
                gap: 15px;
            }
            .left form input,
            .left form button {
                height: 50px;
                width: 100%;
            }
            .right {
                height: 100%;
                width: 70%;
                display: flex;
                flex-direction: column;
                align-items: start;
                gap: 15px;
            }
            .card-body {
                position: relative;
            }
            .buttons {
                width: 100px;
                position: absolute;
                right: 50px;
                top: 50%;
                transform: translateY(-50%);
                display: flex;
                flex-direction: column;
                gap: 10px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="right">
                @forelse ($mahasiswa as $mhs)
                    <div class="card" style="width: 100%;">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{ $mhs->nama }}
                                <span class="card-subtitle mb-2 text-muted">({{ $mhs->nim }})<span>
                            </h5>
                            <p class="card-text">Tanggal Lahir: {{ $mhs->tanggal_lahir }}</p>
                            <p class="card-text">IPK: {{ $mhs->ipk }}</p>
                            <div class="buttons">
                                <button type="button" class="btn btn-warning edit-btn" data-id="{{ $mhs->id }}">Edit</button>
                                <button type="button" class="btn btn-danger delete-btn" data-id="{{ $mhs->id }}">Delete</button>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>No data</p>
                @endforelse
            </div>
            <div class="left">
                <form action="{{ route('modify.mahasiswa') }}" method="POST">
                    @csrf
                    <input type="text" name="nama" id="nama" placeholder="Enter your name" class="form-control">
                    <input type="number" name="nim" id="nim" placeholder="Enter your NIM" class="form-control" step="0.01">
                    <input type="date" name="tanggal_lahir" id="tanggal_lahir" placeholder="Enter your date of birth" class="form-control">
                    <input type="number" name="ipk" id="ipk" placeholder="Enter your IPK" class="form-control">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script>
            <?php Use App\Models\Mahasiswa; ?>
            $('.edit-btn').click(function() {
                const id = $(this).data('id');
                <?php
                    $mahasiswa = Mahasiswa::all();
                    foreach ($mahasiswa as $mhs) {
                        echo "if ($mhs->id == id) {\n";
                        echo "  $('#nama').val('$mhs->nama');\n";
                        echo "  $('#nim').val('$mhs->nim');\n";
                        echo "  $('#tanggal_lahir').val('$mhs->tanggal_lahir');\n";
                        echo "  $('#ipk').val('$mhs->ipk');\n";
                        echo "}\n";
                    }
                ?>
            });
            $('.delete-btn').click(function() {
                const id = $(this).data('id');
                const form = document.querySelector('form');
                const deleteInput = document.createElement('input');
                deleteInput.type = 'hidden';
                deleteInput.name = 'targetId';
                deleteInput.value = id;
                form.appendChild(deleteInput);
                form.submit();
            });
        </script>
    </body>
</html>