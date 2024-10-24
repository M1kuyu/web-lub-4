<?php
// Подключаем заголовок
include 'header.html';

// Получаем данные из GET-параметров
$name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : '';
$email = isset($_GET['email']) ? htmlspecialchars($_GET['email']) : '';
$message = isset($_GET['message']) ? htmlspecialchars($_GET['message']) : '';
$source = isset($_GET['source']) ? htmlspecialchars($_GET['source']) : '';
?>

<main class="content-block">
    <h2>Форма обратной связи</h2>
    <form action="home.php" method="POST" enctype="multipart/form-data">
        <label for="name">ФИО:</label>
        <input type="text" id="name" name="name" value="<?php echo $name; ?>" required>
        <br>
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" value="<?php echo $email; ?>" placeholder="Ваш email" required>
        <br>
        <label for="message">Сообщение:</label>
        <br>
        <textarea id="message" name="message" rows="4" required><?php echo $message; ?></textarea>
        <br>
        <label for="type">Тип:</label>
        <select id="type" name="type" required>
            <option value="предложение" <?php if (isset($_POST['type']) && $_POST['type'] == 'предложение') echo 'selected'; ?>>Предложение</option>
            <option value="жалоба" <?php if (isset($_POST['type']) && $_POST['type'] == 'жалоба') echo 'selected'; ?>>Жалоба</option>
        </select>
        <br>
        <label>
            <input type="checkbox" name="consent" required> Я согласен на обработку данных
        </label>
        <br>
        <label>Как вы узнали о нас?</label>
        <br>
        <label>
            <input type="radio" name="source" value="реклама" <?php if ($source === 'реклама') echo 'checked'; ?> required> Реклама из интернета
        </label>
        <br>
        <label>
            <input type="radio" name="source" value="друзья" <?php if ($source === 'друзья') echo 'checked'; ?>> Рассказали друзья
        </label>
        <br>

        <label for="file">Прикрепить файл:</label>
        <input type="file" id="file" name="file">
        <br>
        <button type="submit">Отправить</button>
    </form>
</main>

<footer>
    <p>Контакты: <a href="mailto:GameShow@support.com">GameShow@support.com</a> &copy; 2024 Show Game</p>
</footer>
</body>
</html>
