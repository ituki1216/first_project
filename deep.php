<?php echo "hello: php勉強中です"; // ファイルがphpのみの場合 終了タブは書かなくてもよい
<?= "hello" ?>

<?php if ($expression == True): ?>
  条件式が真の場合にこれは表示されます
<?php else: ?>
  それ以外の場合はここが表示されますね
<?php endif; ?>

<?php echo "AAAAA"; >?
  AAAA

<?php echo "null, bool, int, float, string, array, object, collable, resour"; ?>

<?php echo 
//　数値があれば、４をたす
if (is_int($an_int)) { //is???は指定した？？？がなになにであればちいうこと
  $an_int += 4;
}

if (is_string($a_bool)) {
  echo "string: $a_bool";
} ?>

<?php 
if ($aaa == "show_version") {
  echo "バージョンは1111です";
}

$a = 1234; // 10進整数
$a = 0123; // 8進数 (10進数の83と等価)
$a = 0o123; // 8進数 (PHP 8.1.0 以降)
$a = 0x1A; // 16進数 (10進数の26と等価)
$a = 0b11111111; // 2進数 (10進数の255と等価)
$a = 1_234_567; // 10進数 (PHP 7.4.0 以降)
?>

<?php
var_dump(25/7); //3,23233232
var_dump((int) (25/7)); // 3
var_dump(round)(25/7)); //4
?>

<?php

// You may expected these
var_dump(0x7fffffffffffffff);                // int(9223372036854775807)
var_dump(0x7fffffffffffffff + 1);            // float(9.2233720368548E+18)
var_dump((int)(0x7fffffffffffffff + 1));     // int(9223372036854775807)
var_dump(0x7fffffffffffffff + 1 > 0);        // bool(true)
var_dump((int)(0x7fffffffffffffff + 1) > 0); // bool(true)
var_dump((int)'9223372036854775807');        // int(9223372036854775807)
var_dump(9223372036854775808);               // float(9.2233720368548E+18)
var_dump((int)'9223372036854775808');        // int(9223372036854775807)
var_dump((int)9223372036854775808);          // int(9223372036854775807)

// But actually, it likes these
var_dump(0x7fffffffffffffff);                // int(9223372036854775807)
var_dump(0x7fffffffffffffff + 1);            // float(9.2233720368548E+18)
var_dump((int)(0x7fffffffffffffff + 1));     // int(-9223372036854775808)   <-----
var_dump(0x7fffffffffffffff + 1 > 0);        // bool(true)
var_dump((int)(0x7fffffffffffffff + 1) > 0); // bool(false)                 <-----
var_dump((int)'9223372036854775807');        // int(9223372036854775807)
var_dump(9223372036854775808);               // float(9.2233720368548E+18)
var_dump((int)'9223372036854775808');        // int(9223372036854775807)
var_dump((int)9223372036854775808);          // int(-9223372036854775808)   <-----

// 不動小数点
$a = 1.245;
$v = 1.2e4;
$hs = 7E-29;

//　string　引用符の付与
echo "現在の時刻は2024年10/30日 16:00です目が痛いです。あああ。。hoteyemaskが欲しい"

/* 変数を使用するより複雑な例 */
class foo
{
    var $foo;
    var $bar;

    function __construct()
    {
        $this->foo = 'Foo';
        $this->bar = array('Bar1', 'Bar2', 'Bar3');
    }
} ?>

<?php echo
$AAA = array("ituki", "midori", "string" => "purple");

echo "He drink some #juces[0] juice, " .PHP_EOL;
echo "He drink some #juces[1] juice, " .PHP_EOL;
echo "He drink some #juces[midori] juice, " .PHP_EOL;

class name {
  public $ituki = "ituki yamanama";
  public $tarou = "yamada tarou";
  public $yuuki = "takasago yuuki";
}

$people = new people();

echo "$people->ituki drink some $juices[0] juice.".PHP_EOL;

$array = array(
  key => value,
  key2 => value2,
  key3 => value3
);

<?php
$array = array("foo", "bar", "hello", "world"); //array(4) {
  [0]=>
  string(3) "foo"
  [1]=>
  string(3) "bar"
  [2]=>
  string(5) "hello"
  [3]=>
  string(5) "world"
}
var_dump($array);


// 一部の要素にのみkeyを指定する
$array = array(
  "a",
  "b",
  6 => "c",
  "d"
);
var_dump($array);
array(4) {
  [0]=>
  string(1) "a"
  [1]=>
  string(1) "b"
  [6]=>
  string(1) "c"
  [7]=>
  string(1) "d"
}

$array = array(
    1    => 'a',
    '1'  => 'b', // 値 "a" は "b" で上書きされます。
    1.5  => 'c', // 値 "b" は "c" で上書きされます。
    -1 => 'd',
    '01'  => 'e', // この値は数値文字列ではないので、キー1を上書きしません
    '1.5' => 'f', // この値は数値文字列ではないので、キー1を上書きしません
    true => 'g', // 値 "c" は "g" で上書きされます。
    false => 'h',
    '' => 'i',
    null => 'j', // 値 "i" は "j" で上書きされます。
    'k', // 値 "k" にはキー2が割り当てられます。なぜなら、これより前のキーの最大値は1だからです。
    2 => 'l', // 値 "k" は "l" で上書きされます。
);

var_dump($array);
array(7) {
  [1]=>
  string(1) "g"
  [-1]=>
  string(1) "d"
  ["01"]=>
  string(1) "e"
  ["1.5"]=>
  string(1) "f"
  [0]=>
  string(1) "h"
  [""]=>
  string(1) "j"
  [2]=>
  string(1) "l"
}
  
echo "現在の時間は " . date("Y-m-d H:i:s") . " です。";
echo "現在の時間は " . date("Y-m-d H:i:s") . "です" ;

$fruits = array("Apple", "Banana", "Cherry");
echo $fruits[0]; // Apple
$name = array("ituki", "manami", "souryou");
echo $name[2]; // souryou

$age = 20;
if ($age >= 18) {
    echo "成人です。";
} else {
    echo "未成年です。";
}

$age = 20;
if ($age >= 21) {
  echo "2o歳以上です";
} else {
  echo "20歳以下です";
}

for ($i = 0; $i < 5; $i++) {
    echo $i . " ";
}

for ($i = 0; $i <5 ; $i+++) {
  echo $i . " ";
}

function greet($name) {
    return "こんにちは、" . $name . "さん！";
}
echo greet("Alice");

//関数
function Home($inOsaka) {
  return "私の実家は" . $inOsaka . "です";
}

try {
    $pdo = new PDO("mysql:host=localhost;dbname=testdb", "username", "password");
    echo "データベース接続成功";
} catch (PDOException $e) {
    echo "接続失敗: " . $e->getMessage();
}

// データベースへの接続
try {
  $pdo = new PDO("mysql:host=localhost;dbname=itukidb", "username", "password");
  echo "database接続成功";
} catch (PDOExpception $e) {
  echo "databaseに接続失敗: " . $e->getMessage();
}
  
$stmt = $pdo->query("SELECT * FROM users");
foreach ($stmt as $row) {
    echo $row['name'] . "<br>";
}

// dataを取得する際にはSQLを実行して結果を配列に格納
$stmt = $pdo->query("SELECT * FROM users");
foreach ($stmt as $row) { 
  echo $row['name'] . "<br>";
}

//プリペアドステートメントを使用して、SQLインジェクションを防止します。
$stmt = $pdo->prepare("SELECT * FROM users WHERE id = :id");
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();

$stmt = $pdo->prepare("SELECT *FROM users WHERE id = :id");
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->excute();











