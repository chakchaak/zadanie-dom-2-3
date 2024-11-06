<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <header>
        <div class="headerDiv">
            <div class="logo">
                <img src="/img/logo.png" alt="Логотип">
                <p>Пекарня</p>
            </div>
            <div class="menuDiv">
                <p>Главная</p>
                <p>Массивы</p>
            </div>
        </div>
    </header>
    <main>
        <div class="welcomeDiv">
            <img src="/img/mainImg.jpg" alt="">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit necessitatibus, amet non iure exercitationem aliquid deserunt quo neque placeat facere magni pariatur enim quae eos incidunt quod animi numquam blanditiis.</p>
        </div>
        <h1>Каталог продуктов</h1>

        <div class="product-grid">
            @foreach($array as $product)
                <div class="product-card">
                    <img src="{{ asset($product['path']) }}" alt="{{ $product['title'] }}">
                    <h3>{{ $product['title'] }}</h3>
                    <p>{{ $product['price'] }} ₽</p>
                </div>
            @endforeach
        </div>
    </main>
    <footer>
        <p>© Вахрушева Дарья Дмитриевна 2024</p>
    </footer>
</body>
</html>