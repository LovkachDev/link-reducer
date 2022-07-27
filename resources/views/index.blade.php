<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linkerr</title>
    <link rel='stylesheet' href='./css/normalize.css'>
    <link rel='stylesheet' href='./css/style.css'>
</head>
<body id="app">
    <header class="content header">
        <span class="header__logo">@{{projectName}}</span>
    </header>
    <main class='content'>
        <section class='firstScreenSection'>
            <h1 class="h-header">Делись контентом с друзьями</h1>
            <p class="p-paragraph firstScreenSection_paragraph">Сервис Linked предоставляет возможность делиться 
                короткими ссылками в любом количестве. 
                Использование сервиса абсолютно бесплатно для всех
                пользователей
            </p>
            <a href="" class="big-btn big-btn1">Начать</a>
        </section>
        <section class="appSection">
            <div class="appSection__shortener">
                <div class="input__wrapper">
                    <input placeholder="Введите ссылку" type="text" class="input">
                    <span class="big-btn big-btn2">Go!</span>
                </div>
                <div class="input__wrapper">
                    <input placeholder="Сокращённая ссылка" type="text" class="input">
                    <span class="big-btn big-btn3"><img src="./assets/images/copyIcon.png" alt=""></span>
                </div>
            </div>
            <div class="appSection__right">
                https://example.com/the-mega-super-puper-big-exclusive-super-cringe-mega-looo00000ng-link-and-you-can-short-it-with-our-super-mega-exclusive-service-@{{projectName}}
            </div>
            <img src="./assets/images/pidaras.png" alt="Пидарас" class="pidaras">
        </section>
    </main>
    <script src="./js/app.js"></script>
</body>
</html>