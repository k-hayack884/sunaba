{"filter":false,"title":"mikata.php","tooltip":"/html/RPG/pokemon/classes/mikata.php","undoManager":{"mark":9,"position":9,"stack":[[{"start":{"row":0,"column":0},"end":{"row":0,"column":1},"action":"insert","lines":["<"],"id":1},{"start":{"row":0,"column":1},"end":{"row":0,"column":2},"action":"insert","lines":["?"]},{"start":{"row":0,"column":2},"end":{"row":0,"column":3},"action":"insert","lines":["p"]},{"start":{"row":0,"column":3},"end":{"row":0,"column":4},"action":"insert","lines":["h"]},{"start":{"row":0,"column":4},"end":{"row":0,"column":5},"action":"insert","lines":["p"]}],[{"start":{"row":0,"column":5},"end":{"row":1,"column":0},"action":"insert","lines":["",""],"id":2}],[{"start":{"row":1,"column":0},"end":{"row":21,"column":1},"action":"insert","lines":["class Pokemon{","    const MAX_HITPOINT=100; //定数の定義は大文字だお","    public $name;","    public $hitPoint=100;","    public $attakPoint=20;","     public function doAttack($enemy)","    {","        echo \"『\" .$this->name . \"』の攻撃！\".PHP_EOL; //this 自分自身、つまりPokemonクラス　","        //this->name Pokemonクラスの$nameを参照していること","         echo \"【\" . $enemy->name . \"】に \" . $this->attackPoint . \" のダメージ！\".PHP_EOL;","        $enemy->tookDamage($this->attackPoint);","    }","      public function tookDamage($damage)","    {","        $this->hitPoint -= $damage;","        // HPが0未満にならないための処理","        if ($this->hitPoint < 0) {","            $this->hitPoint = 0;","        }","    }","}"],"id":3}],[{"start":{"row":10,"column":82},"end":{"row":10,"column":83},"action":"insert","lines":[" "],"id":4}],[{"start":{"row":10,"column":83},"end":{"row":10,"column":99},"action":"insert","lines":["//PHP_EOLで改行するンゴ"],"id":5}],[{"start":{"row":8,"column":49},"end":{"row":9,"column":0},"action":"insert","lines":["",""],"id":6},{"start":{"row":9,"column":0},"end":{"row":9,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":6,"column":4},"end":{"row":6,"column":5},"action":"remove","lines":[" "],"id":7}],[{"start":{"row":6,"column":4},"end":{"row":7,"column":0},"action":"insert","lines":["",""],"id":8},{"start":{"row":7,"column":0},"end":{"row":7,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":8,"column":0},"end":{"row":8,"column":4},"action":"remove","lines":["    "],"id":10},{"start":{"row":7,"column":36},"end":{"row":8,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":5,"column":16},"end":{"row":5,"column":17},"action":"insert","lines":["c"],"id":11}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":13,"column":5},"end":{"row":13,"column":5},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1636945255632,"hash":"ad219260e1c45aaf155eed9be14821704f276390"}