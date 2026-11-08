<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = $_POST['name'];
    $phone   = $_POST['phone'];
    $message = $_POST['message'];

    // адрес на который нужно отправить письмо
    $to = "kseniakorenenko96@gmail.com";

    // тема письма
    $subject = "Обратная связь от $name";

    // сообщение
    $email_message  = "Имя: $name\n";
    $email_message .= "Телефон: $phone\n";
    $email_message .= "Сообщение:\n$message";

    // отправка письма
    mail($to, $subject, $email_message);

    // Опционально: перенаправление на страницу "Спасибо"
    // header("Location: thank_you.html");
}
?>