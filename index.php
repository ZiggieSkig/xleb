<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Главная страница</title>
</head>
<<body>
    <!-- Боковая навигация -->
    <nav class="side-menu">
        <ul>
            <li><a href="index.php">Главная</a></li>
            <li><a href="catalog.html">Каталог</a></li>
            <li><a href="about.html">О нас</a></li>
            <li><a href="contact.html">Контакты</a></li>
            <li class="registr"><a href="Register.php">Регистрация</a></li>
        </ul>
    </nav>

    <!-- Основная часть -->
    <main>
        <h2>Добро пожаловать в наш магазин комплектующих!</h2>
        <p>Мы предлагаем широкий выбор комплектующих для сборки вашего идеального компьютера. Ознакомьтесь с нашим каталогом!</p>
        <button onclick="window.location.href='catalog.html'">Перейти в каталог</button>

        <!-- Рекомендации и акции -->
        <section class="recommendations">
            <h3>Рекомендуем:</h3>
            <div class="product">
                <img src="image/rtx4090.png" alt="RTX 4090 Gigabyte">
                <div>
                    <h4>RTX 4090 Gigabyte</h4>
                    <p>Мощнейшая видеокарта для геймеров и профессионалов. <strong>Цена: 2000$</strong></p>
                </div>
            </div>
            <!-- Добавьте больше продуктов по аналогии -->
        </section>
    </main>
</body>

    <!-- Футер -->
    <footer>
        <p>© 2025 Компьютерный магазин. Все права защищены. <a href="policy.html">Политика конфиденциальности</a>.</p>
    </footer>

    <!-- JavaScript для корзины -->
    <script>
        let cartItems = [];

        // Функция для добавления товара в корзину
        function addToCart(item) {
            cartItems.push(item);
            updateCart();
        }

        // Функция для обновления корзины
        function updateCart() {
            const cartItemsList = document.getElementById('cart-items');
            cartItemsList.innerHTML = ''; // Очистка списка товаров
            cartItems.forEach(item => {
                const listItem = document.createElement('li');
                listItem.textContent = item;
                cartItemsList.appendChild(listItem);
            });
        }

        // Функция для открытия корзины
        function toggleCart() {
            const cartPopup = document.getElementById('cart-popup');
            cartPopup.style.display = cartPopup.style.display === 'block' ? 'none' : 'block';
        }

        // Функция для закрытия корзины
        function closeCart() {
            document.getElementById('cart-popup').style.display = 'none';
        }

        // Функция для оформления заказа
        function checkout() {
            // В дальнейшем сюда можно добавить логику оформления заказа
            alert('Вы перешли на страницу оформления заказа!');
        }
    </script>
</body>
</html>
