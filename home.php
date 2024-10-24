<?php
// Проверяем, были ли отправлены данные
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    $type = htmlspecialchars($_POST['type']);
    $source = htmlspecialchars($_POST['source']);
    $fileName = isset($_FILES['file']['name']) ? htmlspecialchars($_FILES['file']['name']) : 'Нет файла';
    
    // Начинаем вывод страницы
    include 'header.html'; // Подключаем заголовок
?>

<main class="content-block">
    <!-- Выводим сообщение в зависимости от типа -->
    <?php if ($type === 'предложение'): ?>
        <h2>Спасибо за ваше предложение, <?php echo $name; ?>!</h2>
    <?php else: ?>
        <h2>Спасибо за вашу жалобу, <?php echo $name; ?>!</h2>
    <?php endif; ?>

    <!-- Выводим введенные данные -->
    <p><strong>Ваши данные:</strong></p>
    <p><strong>ФИО:</strong> <?php echo $name; ?></p>
    <p><strong>Email:</strong> <?php echo $email; ?></p>
    <p><strong>Сообщение:</strong> <?php echo $message; ?></p>
    <p><strong>Прикрепленный файл:</strong> <?php echo $fileName; ?></p>
    <p><strong>Вы узнали о нас через:</strong> <?php echo $source; ?></p>

    <!-- Кнопка для повторного заполнения формы -->
    <a class="button-link" href="index.php?name=<?php echo urlencode($name); ?>&email=<?php echo urlencode($email); ?>&message=<?php echo urlencode($message); ?>&source=<?php echo urlencode($source); ?>">Заполнить снова</a>
</main>

<footer>
    <p>Контакты: <a href="mailto:GameShow@support.com">GameShow@support.com</a> &copy; 2024 Show Game</p>
</footer>
</body>
</html>

<?php
} else {
    // Если данные не были отправлены
    echo "<h2>Ошибка: Данные не были отправлены.</h2>";
}
?>
