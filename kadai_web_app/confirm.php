<?php

session_start();

$name = $_POST['employee_name'];
$age = $_POST['employee_age'];
$department = $_POST['department'];

$errors = [];

if (empty($name)) {
    $errors[] = 'お名前を入力してください。';
}

// if (empty($email)) {
    // $errors[] = 'メールアドレスを入力してください。';
// } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // $errors[] = 'メールアドレスの入力形式が正しくありません。';
// }

// if (empty($message)) {
    // $errors [] = 'お問い合わせ内容を入力してください。';
// } else if (mb_strlen($message) > 100) {
    // $errors[] = 'お問い合わせ内容が100文字を超えています。';
// }

// if (empty($errors)) {
    // $_SESSION['name'] = $name;
    // $_SESSION['email'] = $email;
    // $_SESSION['gender'] = $gender;
    // $_SESSION['category'] = $category;
    // $_SESSION['message'] = $message;

    // setcookie('name', $name, time() + 3600);
    // setcookie('email', $email, time() + 3600);
// }
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <h2>入力内容をご確認ください。</h2>
    <p>問題なければ「確定」、修正する場合は「キャンセル」をクリックしてください。</p>

    <table border="1">
        <tr>
            <th>項目</th>
            <th>入力内容</th>
        </tr>
        <tr>
            <td>社員名</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>年齢</td>
            <td><?php echo $age; ?></td>
        </tr>
        <tr>
            <td>所属部署</td>
            <td><?php echo $department; ?></td>
        </tr>
        
    </table>

    <p>
        <button id="confirm-btn" onclick="location.href='complete.php';">確定</button>
        <button id="cancel-btn" onclick="history.back();">キャンセル</button>
    </p>
    <?php
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo '<font color="red">' . $error . '</font>' . '<br>';
        }

        echo '<script> document.getElementById("confirm-btn").disabled = true; </script>';
    }
    ?>
</body>

</html>
