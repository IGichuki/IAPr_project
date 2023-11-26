<!-- logout.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Logout Page</title>
</head>
<body>

    <h1>You are now logged out</h1>

    <!-- Logout button -->
    <form action=" " method="post">
        @csrf
        <button type="submit">Logout</button>
    </form>

   

</body>
</html>
