<?php
class Hapinesu extends Pikatyuu
{
    const MAX_HITPOINT=80;
    private $hitPoint=80;
    private $attackPoint=10;
    private $special = 30;
    public function __construct($name)
    {
        parent::__construct($name, $this->hitPoint, $this->attackPoint);
    }
    
    public function doAttackHapinesu($enemy, $pikatyuu)
    {
        if (rand(1, 2) === 1) {
            echo "『" .$this->getName() . "』のタマゴうみ！".PHP_EOL;
            echo $pikatyuu->getName() . " のHPを " . $this->special * 1.5 . " 回復！".PHP_EOL;
            $pikatyuu->recoveryDamage($this->special * 1.5, $pikatyuu);
        } else {
            echo "『" .$this->getName() . "』のタマゴばくだん！".PHP_EOL;
            //this 自分自身、つまりPokemonクラス　
            //this->name Pokemonクラスの$nameを参照していること
            echo "【" . $enemy->getName() . "】に " . $this->attackPoint . " のダメージ！".PHP_EOL; //PHP_EOLで改行するンゴ
            $enemy->tookDamage($this->attackPoint);
            //親クラスのメゾットを使いまさす場合はparent::doAttack($enemy);
        }
        return true;
    }
}
