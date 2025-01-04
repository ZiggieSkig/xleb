// Обработчик события для формы регистрации
document.getElementById('registration-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Предотвращаем отправку формы

    // Получаем значения полей
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirm-password').value;

    // Элемент для отображения ошибок
    let errorMessage = document.querySelector('#error-message');
    if (!errorMessage) {
        // Создаем элемент для ошибки, если он отсутствует
        errorMessage = document.createElement('p');
        errorMessage.id = 'error-message';
        errorMessage.style.color = 'red';
        errorMessage.style.fontSize = '14px';
        errorMessage.style.marginTop = '5px';
        document.getElementById('confirm-password').insertAdjacentElement('afterend', errorMessage);
    }

    // Проверяем пароли
    if (password !== confirmPassword) {
        errorMessage.textContent = 'Пароли не совпадают. Попробуйте снова.';
    } else if (!username.trim()) {
        errorMessage.textContent = 'Имя пользователя не может быть пустым.';
    } else {
        errorMessage.textContent = ''; // Очищаем сообщение об ошибке
        alert('Регистрация успешна!');
        // Добавьте сюда логику отправки данных на сервер, если нужно
        window.location.href = 'login.html'; // Перенаправление на страницу входа
    }
});
