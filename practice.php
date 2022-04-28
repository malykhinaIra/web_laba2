<?php
echo"<h2>Робота зі змінними</h2>";
$name = 'Ira';
echo 'My name: $name.<br>';
echo "My name: $name.<br>";
echo "<h3>Порівняння</h3>";
if($name=='Ira'){
    echo "True";
}
else{
    echo"False";
}
echo "<br>";
if($name>'Ira'){
    echo "True";
}
else{
    echo"False";
}
echo "<h3>Розіменування</h3>";
$$name = 'Oksana';
echo "My name: ${$name}";
echo "<hr>";

$poem_first=
"Як умру, то поховайте
<br>Мене на могилі
<br>Серед степу широкого
<br>На Вкраїні милій,
<br>Щоб лани широкополі,
<br>І Дніпро, і кручі
<br>Було видно, було чути,
<br>Як реве ревучий.
<br>Як понесе з України
<br>У синєє море
<br>Кров ворожу... отойді я
<br>І лани і гори — ";

$poem_second=
"Все покину, і полину
<br>До самого Бога
<br>Молитися... а до того
<br>Я не знаю Бога.
<br>Поховайте та вставайте,
<br>Кайдани порвіте
<br>І вражою злою кров’ю
<br>Волю окропіте.
<br>І мене в сім’ї великій, 
<br>В сім’ї вольній, новій,
<br>Не забудьте пом’янути
<br>Незлим тихим словом.";
?>

<br><br>
<div style="display: flex;">
    <div>
    <?php 
        echo $poem_first;
    ?>
    </div>
    <div style="margin-left: 20px;"> 
    <?php 
        echo $poem_second; 
    ?>
    </div>
</div>
<br><hr><br>
<div style="display: flex;">
    <div>
    <h2>Конкатинація</h2>
    <?php 
        $poem_second = "<br>" . $poem_second;
        $poem = $poem_first . $poem_second;
        echo $poem;
    ?>
    </div>
    <div style="margin-left: 20px;"> 
    <h2>Метод explode</h2>
    <?php 
        $pieces = explode(" ", $poem);
        var_dump($pieces)
    ?>
    </div>
    <div style="margin-left: 20px;"> 
    <h2>Метод implode</h2>
    <?php 
        $new_poem = implode(" ", $pieces);
        var_dump($new_poem)
    ?>
    </div>
</div>
<br>

<div style="display: flex;">
    <div>
    <h2>Хеш-масив</h2>
    <?php 
        $ages=array(19=>"Іра",18=>"Оксана",24=>"Арсен", 6 => "Максим");
        foreach($ages as $age=>$name)
          {
          echo "Ім'я: " . $name . ", вік: " . $age;
          echo "<br>";
          }
        
    ?>
    </div>
    <div style="margin-left: 20px;"> 
    <h2>Приведення типів</h2>
    <?php 
        $ages=array(19=>"Іра", "18"=>"Оксана", true=>"Арсен", 6.8 => "Максим");
        foreach($ages as $age=>$name)
        {
        echo "Ім'я: " . $name . ", вік: " . $age;
        echo "<br>";
        }
    ?>
    </div>
</div>
<br><br>
<hr>
<?php

echo "<h2>OOП</h2>\n";

interface ISweets {
    public function show();
}

abstract class Sweets implements ISweets {
    public abstract function show();
}

class Cake extends Sweets {
    private $name;
    private $taste;
    private $cost;
    private $weight;
    public function __construct($name, $taste, $cost, $weight) {
        $this->name = $name;
        $this->taste = $taste;
        $this->cost = $cost;
        $this->weight = $weight;
    }

    public function show() {
        echo "Назва: $this->name; смак: $this->taste; ціна: $this->cost; вага: $this->weight";
    }
}  

class Pie extends Cake {
    private $filling;

    public function __construct($name, $taste, $cost, $weight, $filling) {
        parent::__construct($name, $taste, $cost, $weight);
        $this->filling = $filling;
    }

    public function show() {
        parent::show();
        echo "; начинка: $this->filling";
    }
}

class Donut extends Cake {
    private $sprinkle;

    public function __construct($name, $taste, $cost, $weight, $sprinkle) {
        parent::__construct($name, $taste, $cost, $weight);
        $this->sprinkle = $sprinkle;
    }

    public function show() {
        parent::show();
        echo "; посипка: $this->sprinkle";
    }
}

$objCake = new Cake("Брауні", "шоколад", 10, 0.5);
echo "<br>Cake:<br>";
$objCake->show();

$objPie = new Pie("Шарлотка", "вблуко", 7, 0.25, "варення");
echo "<br>Pie:<br>";
$objPie->show();

$objDonut = new Donut("Пончик", "ваниль", 3, 0.25, "рожева");
echo "<br>Donut:<br>";
$objDonut->show();
echo "<br>";
echo "<hr>";

echo "<h2>Singleton</h2>\n";

class Singleton {
    private static $instance;

    public static function get_instance()
    {
        if (empty(self::$instance)) self::$instance = new self();
        return self::$instance;
    }
    private function __clone() {}
    private function __construct() {}

}

$Obj1 = Singleton::get_instance();

$Obj2 = Singleton::get_instance();

$s1 = Singleton::get_instance();
$s2 = Singleton::get_instance();
if ($s1 === $s2) {
    echo "Singleton працює коректно";
} else {
    echo "Singleton працює некоректно";
}

?>
