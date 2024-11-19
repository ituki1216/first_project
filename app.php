<?php
function render_calendar($month, $year) {
    $monthDays = cal_days_in_month(CAL_GREGORIAN, $month, $year);
    $firstDayOfWeek = date('w', strtotime("$year-$month-01"));

    echo "<table class='calendar-table' border='1'>";
    echo "<tr>";
    $days = ["日", "月", "火", "水", "木", "金", "土"];
    foreach ($days as $day) {
        echo "<th>$day</th>";
    }
    echo "</tr>";

    echo "<tr>";
    for ($i = 0; $i < $firstDayOfWeek; $i++) {
        echo "<td></td>";
    }

    for ($day = 1; $day <= $monthDays; $day++) {
        echo "<td>$day</td>";
        if (($day + $firstDayOfWeek) % 7 == 0) {
            echo "</tr><tr>";
        }
    }
    echo "</tr></table>";
}
?>
<?php
// Humanクラス
class Human {
    private $name;
    private $gender;
    private $length;
    private $weight;
    private $vitality;
    private $magic;

    // コンストラクタ
    public function __construct($name = null, $gender = 0, $length = 0, $weight = 0, $vitality = 0, $magic = 0) {
        $this->name = $name;
        $this->gender = $gender;
        $this->length = $length;
        $this->weight = $weight;
        $this->vitality = $vitality;
        $this->magic = $magic;
    }

    // getter / setter
    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getGender() {
        return $this->gender;
    }

    public function setGender($gender) {
        $this->gender = $gender;
    }

    public function getLength() {
        return $this->length;
    }

    public function setLength($length) {
        $this->length = $length;
    }

    public function getWeight() {
        return $this->weight;
    }

    public function setWeight($weight) {
        $this->weight = $weight;
    }

    public function getVitality() {
        return $this->vitality;
    }

    public function setVitality($vitality) {
        $this->vitality = $vitality;
    }

    public function getMagic() {
        return $this->magic;
    }

    public function setMagic($magic) {
        $this->magic = $magic;
    }

    // はなす
    public function talk($about) {
        echo $about . "\n";
    }

    // たべる
    public function eatFood($food) {
        $foodType = 0;
        if ($food == "やくそう") {
            $foodType = 1;
        } elseif ($food == "まほうのみず") {
            $foodType = 2;
        } else {
            $foodType = 3;
        }
        $this->digestFood($foodType);  // 食べ物を消化する
    }

    // 消化する
    private function digestFood($foodType) {
        if ($foodType == 1) {
            $this->vitality += 10;  // たいりょくを10回復
        } elseif ($foodType == 2) {
            $this->magic += 10;  // まりょくを10回復
        } else {
            $this->vitality += 1;  // たいりょくを1回復
        }
    }
}

// Yuusyaクラス
class Yuusya extends Human {
    // コンストラクタ
    public function __construct() {
        parent::__construct("ゆうしゃ", 1, 180, 70, 100, 5);
    }

    public function specialAttack($target) {
        $name = $this->getName();
        $this->setVitality($this->getVitality() - 20);
        echo $name . " の こうげき\n";
        echo $name . " の ひっさつわざが さくれつした！\n";

        $target->setVitality($target->getVitality() - 50);
        echo $target->getName() . " に 50 のダメージを あたえた\n";

        $this->setVitality($this->getVitality() - 10);
        echo $name . " の たいりょくは " . $this->getVitality() . " になった\n\n";
    }
}

// Wizardクラス
class Wizard extends Human {
    // コンストラクタ
    public function __construct() {
        parent::__construct("まほうつかい", 1, 170, 60, 20, 50);
    }

    public function magicAttack($target) {
        $name = $this->getName();
        echo $name . " の こうげき\n";
        echo $name . " は こうげきじゅもん を となえた！\n";

        $target->setVitality($target->getVitality() - 20);
        echo $target->getName() . " に 20 のダメージを あたえた\n";

        $this->setMagic($this->getMagic() - 10);
        echo $name . " の まりょくは " . $this->getMagic() . " になった\n\n";
    }
}

// LastBossクラス
class LastBoss extends Human {
    // コンストラクタ
    public function __construct() {
        parent::__construct("らすぼす", 1, 210, 120, 500, 40);
    }

    public function specialEvilAttack($target) {
        $name = $this->getName();
        echo $name . " の こうげき\n";
        echo $name . " の じゃあくな ひっさつわざが さくれつした！\n";

        $target->setVitality($target->getVitality() - 30);
        echo $target->getName() . " は 30 のダメージをうけた\n";

        $this->setVitality($this->getVitality() - 10);
        echo $name . " の たいりょくは " . $this->getVitality() . " になった\n\n";
    }
}

// Clericクラス
class Cleric extends Human {
    // コンストラクタ
    public function __construct() {
        parent::__construct("そうりょ", 2, 160, 50, 20, 70);
    }

    public function healingMagic($target) {
        $name = $this->getName();
        echo $name . " は かいふくじゅもんをとなえた！\n";
        $target->setVitality($target->getVitality() + 20);
        echo $target->getName() . " の たいりょくは " . $target->getVitality() . " になった\n";
        $this->setMagic($this->getMagic() - 10);
        echo $name . " の まりょくは " . $this->getMagic() . " になった\n\n";
    }
}

// メイン処理
function showStatus($target) {
    echo "- " . $target->getName() . " の ステータス---\n";
    if ($target->getGender() == 1) {
        echo "せいべつ ： 男\n";
    } else {
        echo "せいべつ ： 女\n";
    }
    echo "しんちょう ： " . $target->getLength() . "\n";
    echo "たいじゅう ： " . $target->getWeight() . "\n";
    echo "たいりょく ： " . $target->getVitality() . "\n";
    echo "まりょく ： " . $target->getMagic() . "\n\n";
}

// バトル開始
$yuusya = new Yuusya();
$wizard = new Wizard();
$crelic = new Cleric();
$lastBoss = new LastBoss();

// 敵があらわれた！
echo $lastBoss->getName() . " が あらわれた！\n";

// バトル
$yuusya->specialAttack($lastBoss);
$wizard->magicAttack($lastBoss);
$lastBoss->specialEvilAttack($yuusya);
$crelic->healingMagic($yuusya);

// 回復アイテムを使用
echo $yuusya->getName() . " は やくそう　をつかった\n";
$yuusya->eatFood("やくそう");
echo $wizard->getName() . " は まほうのみず　をつかった\n";
$wizard->eatFood("まほうのみず");
echo "\n";

// ステータス表示
showStatus($yuusya);
showStatus($wizard);
showStatus($crelic);
showStatus($lastBoss);

?>


