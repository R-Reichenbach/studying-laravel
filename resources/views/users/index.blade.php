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
                    <thead class="table-header">
                        <tr>
                            <th class="content-title">ID</th>
                            <th class="content">Name</th>
                            <th class="content">Email</th>
                            <th class="content">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $user)
                            <tr class="table-header">
                                <td class="content">{{ $user->id }}</td>
                                <td class="content">{{ $user->email }}</td>
                                <td class="content">{{ $user->id }}</td>
                                <td class="table-actions">
                                    <a href="#">Visualizar</a>
                                    <a href="{{ route('user.edit', ['user' => $user->id]) }}">Editar</a>
                                    <a href="#">Apagar</a>
                                </td>
                            </tr>
                        @empty
                            <div>
                                <p>Anyone user found</p>
                            </div>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="pagination">
                {{ $users->links() }}
            </div>
        </div>
    </div>
</body>

</html>
