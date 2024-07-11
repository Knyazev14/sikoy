

<?php
$link = mysqli_connect("localhost", "root", "");

if ($link == false) {
    die("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
}

print("Соединение установлено успешно");

// Выбор базы данных
$db_selected = mysqli_select_db($link, "site_db");
if (!$db_selected) {
    die("Ошибка: Не удалось выбрать базу данных. " . mysqli_error($link));
}

$sql = "SELECT * FROM `products`";

$result = mysqli_query($link, $sql);

if ($result == false) {
    die("Произошла ошибка при выполнении запроса: " . mysqli_error($link));
}

while ($row = mysqli_fetch_array($result)) {
  ?>
   <article class="section__card">
    <div class="section__card-wrap">
        <img class="section__card-img" src="assets/img/hd.png" alt="" />
    </div>
    <div class="section__card-bottom">
        <h3 class="section__card-title"><?php echo  $row['title'];  ?></h3>
        <div class="section__card-footer">
            <span class="section__card-price"><?php echo  $row['price']; ?></span>
            <button class="section__card-btn">Купить</button>
        </div>
    </div>
</article>

  <?php 
}
$sql = "INSERT INTO `products` (`id`, `title`, `price`) VALUES ('3', 'Трансгендерный желудь', '20')";

if (mysqli_query($link, $sql)) {
    print("Запись успешно добавлена\n");
} else {
    die("Произошла ошибка при выполнении запроса: " . mysqli_error($link));
}
mysqli_close($link);
?>