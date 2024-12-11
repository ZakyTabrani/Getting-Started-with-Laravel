<!DOCTYPE html>
<html>
<head>
    <title>Signin Page</title>
</head>
<body>
    <h1>Signin Page</h1>
    <form action="/signin" method="POST">
        @csrf
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <button type="submit">Sign In</button>
    </form>
</body>
</html>
