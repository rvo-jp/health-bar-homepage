<?php
// JSONとして送られてきたデータを受け取る
$input = file_get_contents('php://input');
$data = json_decode($input, true);

// 必要な情報を取得
$feedback = $data['feedback'];
$email = isset($data['email']) ? $data['email'] : '';

// フィードバックをテキストファイルに保存
$ip = $_SERVER['REMOTE_ADDR']; // ユーザーのIPアドレスを取得
$timestamp = date("Y-m-d H:i:s");

file_put_contents('feedback.txt', "[$timestamp] $ip $email\n$feedback\n\n", FILE_APPEND);

// 成功レスポンスを返す
echo json_encode(['status' => 'success']);
?>
