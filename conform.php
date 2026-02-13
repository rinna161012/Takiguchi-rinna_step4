<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheat" href="style_conform.css">
    <title>入力内容確認</title>

</head>
<body>
    <h1>入力内容確認</h1>
<?php
if($_SERVER["REQUEST_METHOD"] === "POST"){
    $name = $_POST["name"];
    $age = $_POST["age"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $question = $_POST["question"];
    $gender = $_POST["gender"];

}
if(!preg_match("/^[ぁ-んァ-ン一-鿿]+$/u", $name)){
    echo "<p>名前はひらがな、カタカナ、漢字のみで入力してください</p>";
}
if(!preg_match("/^[0-9]+$/", $age) || $age < 0 || $age > 150 || !is_numeric($age)){
    echo "<p>年齢は0〜150の間で入力してください</p>";
}
if(!preg_match("/^[0-9\-]+$/", $phone)){
    echo "<p>電話番号は半角数字とハイフンのみ使用できます</p>";
}
if(!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email)){
    echo "<p>メールアドレスの形式が正しくありません</p>";
}   
if(!preg_match("/^[a-zA-Z]+$/", $address)){
    echo "<p>住所は文字で入力してください</p>";
}
if(!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $question)){
    echo "<p>質問は文字で入力してください</p>";
}
if(!preg_match("/^[a-zA-Z]+$/", $gender)){
    echo "<p>性別は正しい形式で入力してください</p>";
}
?>
</body>
</html>
