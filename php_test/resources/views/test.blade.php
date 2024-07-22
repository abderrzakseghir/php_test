<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
</head>
<body>
    <h1>Inscription</h1>

    <form action="http://127.0.0.1:8000/test" method="POST">
        @csrf
        <label for="user_id">ID Utilisateur:</label>
        <input type="number" id="user_id" name="user_id" required>
        <br>
        <label for="formation_id">ID Formation:</label>
        <input type="number" id="formation_id" name="formation_id" required>
        <br>
        <button type="submit">S'inscrire</button>
    </form>
</body>
</html>
