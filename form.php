<!DOCTYPE html>
<html lang="ja">
    <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>フォーム入力</title>

</head>
<body>
<h1>フォーム入力</h1>
<div class="container">     

<form action="conform.php" method="post">
    <label for="name">名前</label>
    <input type="text" id="name" name="name"><br><br>
    <label for="age">年齢</label>
    <input type="text" id="age" name="age"><br><br>
    <label for="telephonenumber">電話番号</label>
    <input type="text" id="telephonenumber" name="telephonenumber"><br><br>
    <label for="mailaddress">メールアドレス</label>
    <input type="text" id="mailaddress" name="mailaddress"><br><br>
    <label for="address">住所</label>
    <input type="text" id="address" name="address"><br><br>
    <label for="question">質問</label>
    <input type="text" id="question" name="question"><br><br>
    <label for="gender">性別</label>
    <select id="gender" name="gender" required>
        <option value="" disabled selected>選択してください</option>
        <option value="male">男性</option>
        <option value="female">女性</option>
    </select>
    <input type="text" id="gender" name="gender"><br><br>       
    <button type="submit">送信</button>
</form>
</div>
</body>
</html>
