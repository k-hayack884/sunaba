<?php
class Pikatyuu extends Pokemon
{
    const MAX_HITPOINT=80; //定数の定義は大文字だお
    private $name;
    private $hitPoint=80;
    private $attackPoint=5;
    private $special=20;
    private static $instance;

    //public function __construct($name)
    private function __construct($name) // コンストラクタはprivateに
    {
        parent::__construct($name, $this->hitPoint, $this->attackPoint);
    }
    // シングルトンで常にインスタンスは一つしか生成しない
    public static function getInstance($name)
    {
        if (empty(self::$instance)) {
            self::$instance = new Pikatyuu($name);
        }
 
        return self::$instance;
    }
   
    public function doAttack($enemies)
    {
        // チェック１：自身のHPが0かどうか
        if ($this->hitPoint <= 0) {
            return false;
        }
        $enemyIndex = rand(0, count($enemies) - 1); // 添字は0から始まるので、-1する
        $enemy = $enemies[$enemyIndex];
        
        if (rand(1, 2) === 1) {
            // スキルの発動
            echo "『" .$this->getName() . "』の『10まんボルト』！！".PHP_EOL;
            echo $enemy->getName() . " に " . $this->special . " のダメージ！".PHP_EOL;
            $enemy->tookDamage($this->special);
        } else {
            parent::doAttack($enemies); // ここを編集
        }
        return true;
    }
    public function tookDamage($damage)
    {
        $this->hitPoint -= $damage;
        // HPが0未満にならないための処理
        if ($this->hitPoint < 0) {
            $this->hitPoint = 0;
        }
    }
    public function recoveryDamage($heal, $target)
    {
        $this->hitPoint += $heal;
        if ($this->hitPoint > $target::MAX_HITPOINT) {
            $this->hitPoint = $target::MAX_HITPOINT;
        }
    }
}
