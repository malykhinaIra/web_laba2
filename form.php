<?php if (!isset($_POST["mail"])) { ?>
    <p>Підпишіться, аби першими дізнаватися про головні новини та масштабні знижки</p>
    <div class="subscribe">
    <form method="POST" style="width:800px; margin: 0; display: flex; align-items: center;">
        <div style="display: flex; align-items: center;">
            <img src="img/Shape.svg" class="message">
                <input style="width:500px; outline: none; border: none; font-size: 25px;" type="text" name="mail" placeholder="Введіть e-mail">
        </div>
        <button type="submit" formaction="header.php?page=<?php echo $_GET['page'];?>#bottom" style="background: none; border: 0; padding:0;"><img src="img//Group 61.svg" class="sub-btn"></button>
        </form>
    </div>
<?php } else { ?>
    <p style="padding-top: 130px; color: #F5EFEA">Дякуємо за підписку! Перевірте свою поштову скриньку 
    <?php 
        echo htmlspecialchars($_POST["mail"]); 
    ?>
        <a href="header.php?page=<?php echo $_GET['page'];?>#bottom" onclick="history.back()" style="color: #F5EFEA; border: 0; padding:0;"><p style="font-style: italic; padding: 0px; font-size:25px;">Назад</a>
    <?php } ?>