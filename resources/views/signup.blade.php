<!DOCTYPE html>
<html>
<head>
    <title>Signup Page</title>
</head>
<body>
    <h1>Signup Page</h1>
    <form action="/signup" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Name">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <button type="submit">Sign Up</button>
    </form>
</body>
</html>
