<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css'])
</head>

<body>

    <div class="main-container">
        <header class="header">
            <div class="header-content">
                <h2 class="title-logo"><a href=" {{ Route('dashboard') }}">Reichenbach</a></h2>
                <ul class="list-nav-link">
                    <li>
                        <a href="#" class="nav-link">Users</a>
                        <a href="{{ Route('dashboard') }}" class="nav-link">Exit</a>
                    </li>
                </ul>
            </div>
        </header>


        <div class="content">
            <div class="content-title">
                <h1 class="page-title">Users List</h1>
                <a href="{{ Route('user.create') }}" class="btn-primary">Register</a>
            </div>

            <x-alert />

            <div class="table-container">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->id }}</td>
                                <td>Visualizar Editar Apagar</td>
                            </tr>
                        @empty
                            <div>
                                Anyone user found
                            </div>
                        @endforelse
                    </tbody>
                </table>

            </div>
        </div>

    </div>

</body>

</html>
