$link = mysql_connect('mysqlサーバーアドレス', 'ユーザー', 'パスワード'); mysqlに接続
if (!$link) {
    die('接続失敗です。'.mysql_error());
}

$db_selected = mysql_select_db('データベース名', $link);
if (!$db_selected){
    die('データベース選択失敗です。'.mysql_
}

$result = mysql_query('SQL文セミコロンなし')
if (!$result) {
    die('クエリーが失敗しました。'.mysql_er
}

mysql_close($link); mysql切断

暗号化
function pass($arg){
  $pass = MD5($arg);//まずMD5しときます
  $pass2 = sha1($pass);
  $pass3 = '21'.$pass2.'43'.$pass;
  $pass4 = hash('sha256',$pass3);
  $pass5 = MD5($pass4);
  $pass6 = sha1($pass5);
  $pass7 = hash('sha256',$pass6);
}
