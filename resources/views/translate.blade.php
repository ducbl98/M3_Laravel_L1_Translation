<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Translation</title>
</head>
<body>
<h1>Phiên dịch</h1>
<form action="/translate" method="POST">
    @csrf
    <p>
        <input type="text" name="keyword" placeholder="Từ phiên dịch">
    </p>
    <p>
        <button type="submit">Dịch</button>
    </p>
</form>
</body>
</html>

