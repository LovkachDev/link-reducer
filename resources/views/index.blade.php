<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linkerr</title>
    <meta name="theme-color" content="#FFD43E">
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="./assets/favicon/site.webmanifest">
    <link rel='stylesheet' href='./css/normalize.css'>
    <link rel='stylesheet' href='./css/style.css'>
</head>
<body>
    <div id="app">
        <header class="content header">
            <span class="header__logo">@{{projectName}}</span>
        </header>
        <main class='content'>
            <section class='firstScreenSection'>
                <h1 class="h-header">Делись контентом с друзьями</h1>
                <p class="p-paragraph firstScreenSection_paragraph">Сервис @{{projectName}} предоставляет возможность делиться 
                    короткими ссылками в любом количестве. 
                    Использование сервиса абсолютно бесплатно для всех
                    пользователей
                </p>
                <a href="#shortener" class="big-btn big-btn1">Начать</a>
            </section>
            <section class="appSection">
                <div class="appSection__shortener" id='shortener'>
                    <div class="input__wrapper">
                        <input v-on:keyup.enter="makeLinkShorter" v-model="linkInput" placeholder="Введите ссылку" type="text" class="input">
                        <span v-on:click="makeLinkShorter" class="big-btn big-btn2">Go!</span>
                    </div>
                    <div class="input__wrapper">
                        <input v-on:focus="$event.target.select()" ref="clone" placeholder="Сокращённая ссылка" readonly  type="text" class="input" v-model="shortLinkInput">
                        <span @click="copy" class="big-btn big-btn3"><img src="./assets/images/copyIcon.png" alt=""></span>
                    </div>
                </div>
                <div class="appSection__right">
                    https://example.com/the-mega-super-puper-big-exclusive-super-cringe-mega-looo00000ng-link-and-you-can-short-it-with-our-super-mega-exclusive-service-@{{projectName}}
                </div>
                <img src="./assets/images/pidaras.png" alt="Пидарас" class="pidaras">
            </section>
        </main>
    </div>
    <script src="./js/app.js"></script>
</body>
</html>