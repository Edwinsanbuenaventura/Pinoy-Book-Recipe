<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pinoy Book Recipe</title>
</head>
<body>
    <h1>Submit a Comment</h1>
    <form action="submit_comment.php" method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>
        <label for="comment">Comment:</label>
        <textarea id="comment" name="comment" rows="4" required></textarea><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>