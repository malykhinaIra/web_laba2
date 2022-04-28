<?php
    class Item
    {
        public $image, $description, $price;
        function __construct($image, $description, $price)
        {
            $this->image = "'../" . $image . "'";
            $this->description = $description;
            $this->price = $price . " грн";
        }
     }

    function display($catalog, $id)
    {   
        $item = $catalog[$id - 1];
        echo "<head><title>$item->description</title></head>";
        echo "<body style='background-color: #F5EFEA;'>";
        echo "<div class='container' style='display: flex; align-items: center; margin: auto; margin-top: 100px;'>";
        echo "<img src=$item->image style='margin-left: 30%;'>";
        echo "<div style='margin-left: 40px; margin-top: 22%;'>";
        echo "<p>$item->description</p>";
        echo "<p>$item->price</p>"; 
        echo "<a href='#' style='line-height: 100px; color: black; padding:10px 20px; border: 1px solid black;'>Купити</a>";
        echo "</div>";
        echo "</div>";

    }
    $catalog = [
        new Item("img/image 24.png", "Стілець, дерев’яний", 800),
        new Item("img/image 25.png", "Крісло, дерево & шкіра", 1300),
        new Item("img/image 26.png", "Настінна картина", 1230),
        new Item("img/image 27 (1).png", "Журнальний столик", 980),
        new Item("img/image 35.png", "Тумбочка з відділами", 780),
        new Item("img/image 37.png", "Диван розкладний", 3220),
        new Item("img/image 36.png", "Тумбочка, дерев’яна", 1360),
        new Item("img/image 31.png", "Крісло, біле", 980)
    ];

    if (isset($_GET['id'])) 
    {
        display($catalog, $_GET['id']);
    }
?>