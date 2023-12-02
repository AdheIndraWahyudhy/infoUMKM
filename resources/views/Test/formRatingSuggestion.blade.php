<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Rating dan Suggestion</title>
</head>
<body>
    <form action="" method="POST">
        <label for="rating">Rating (1-5):</label>
        <input type="number" name="rating" id="rating" min="1" max="5" required>
        <label for="suggestion">Saran</label>
        <input type="text" id="sugesstion" name="sugesstion" required>
        <input type="submit" value="Kirim">
    </form>
</body>
</html>