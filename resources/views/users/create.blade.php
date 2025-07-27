<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Register Page</h1>

    @if (session('success'))
        <p style="color: green;">
        {{ session('success') }}
        </p>
    
    @endif
    @if (session('error'))
        <p style="color: red;">
        {{ session('error') }}
        </p>
    @endif

    <form action="{{ Route('user.store')}}" method="POST">
        @csrf 
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" placeholder="Complete Name" value="{{ old('name') }}" required><br>

        <label for="Email:">Email:</label>
        <input type="email" name="email" id="email" placeholder="Email Address" value="{{ old('email') }}" required><br>

        <label for="Password:">Password:</label>
        <input type="password" name="password" id="password" placeholder="Password" value="{{ old(key: 'password') }}" required><br>

        <button type="submit">Send</button>
    </form>
</body>
</html>