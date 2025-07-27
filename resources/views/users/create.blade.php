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
                <h1 class="page-title">Register</h1>
                <a href="{{ route('user.index') }}" class="btn-primary">List</a>
            </div>

            <x-alert />

            <form action="{{ Route('user.store') }}" method="POST" class="form-container">
                @csrf
                <div class="mb-4">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" placeholder="Complete Name"
                        value="{{ old('name') }}"><br>
                </div>
                <div class="mb-4">
                    <label for="Email:">Email:</label>
                    <input type="email" name="email" id="email" placeholder="Email Address"
                        value="{{ old('email') }}"><br>
                </div>
                <div class="mb-4">
                    <label for="Password:">Password:</label>
                    <input type="password" name="password" id="password" placeholder="Password with 6 min caracters"
                        value="{{ old(key: 'password') }}"><br>
                </div>
                <button type="submit" class="btn-success">Send</button>
            </form>
        </div>

    </div>

</body>

</html>
