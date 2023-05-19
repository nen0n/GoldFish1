<!doctype html>

<html>

<head>
    <title>
            Goldfish
    </title>

    <meta charset="UTF-8">
	<meta name="viewport" content="width = device-width, initial-scale = 1.0">
    <link rel="stylesheet" href="{{asset('css/common.css')}}">
    <link rel="stylesheet" href="{{asset('css/product_page.css')}}">
</head>


<body>
    <header>
        <div class="container" id="header-lvl1-container">
            <div class="header-level" id="lvl1">
                <div id="header-burger-menu">
                    <img src="{{asset('src/borgar.png')}}" alt="">
                </div>

                <div id="header-logo">
                    <a href="/">
                        <img src="{{asset('src/logo.png')}}" alt="">
                    </a>
                </div>
    
                <div id="header-search-bar">
                    <span>
                        Знайти гру
                    </span>
                    <img src="{{asset('src/searchIcon.png')}}" alt="">
                </div>

                <div id="header-phone-number">
                    <img src="{{asset('src/phone.png')}}" alt="">
                    <span>
                        <b>38 (095) 721-0-751</b>
                    </span>
                </div>

                <div id="header-cart-profile">
                    <img src="{{asset('src/person.png')}}" alt="">
                    <img src="{{asset('src/cart.png')}}" alt="">
                </div>
            </div>
            <div id="header-search-bar-mobile">
                <span>
                    Знайти гру
                </span>
                <img src="{{asset('src/searchIcon.png')}}" alt="">
            </div>

        </div>

        <div class="container" id="header-lvl2-container">

            <div class="header-level" id="lvl2">
                <div id="header-catalog">
                    <div id="burger-menu">
                        <img src="src/burger-menu" alt="">
                    </div>

                    <span>
                        <a href="/catalog">
                            Каталог
                        </a>
                    </span>
                </div>

                <div id="header-navigation">
                    <nav>
                        Warhammer
                    </nav>
                    <nav>
                        Magic:the Gathering
                    </nav>
                    <nav>
                        Заходи
                    </nav>
                    <nav>
                        Про центр
                    </nav>
                    <nav>
                        Контакти
                    </nav>
                </div>

                <div id="header-socials">
                    <div>
                        <img src="{{asset('src/socials/insta.png')}}" alt="">
                    </div>
                    <div>
                        <img src="{{asset('src/socials/vk.png')}}" alt="">
                    </div>
                    <div>
                        <img src="{{asset('src/socials/facebook.png')}}" alt="">
                    </div>
                </div>
            </div>

        </div>
    </header>

    <div  class="container" id="main-content-container">
        <div id="page-last-chance" class="page-section">
            <div id="title">
                <h1>
                    {{$product->product_name}}
                </h1> 
            </div>

            <div id="product-info">
                <div id="info-left">

                    <div id="product-photos">
                        <div id="big-picture-container">
                            <img id="big-picture" src="{{asset($product->product_img)}}" alt="">
                        </div>
                        <div id="small-pictures">   
                            @foreach ($product->additional_images->slice(0, 3) as $image)
                            <div class="small-picture-container">
                                <img class="small-picture" id="small-picture1" src="{{asset($image->image_path)}}" alt=""></div>
                            @endforeach
                        </div>
                    </div>

                    <div id="product-purchase-mobile">
                        <span>
                            Код товару: {{$product->id}}
                        </span>

                        <div id="product-purchase-info">
                            <div class="product-purchase-info-element" id="player-number">
                                <img src="{{asset('src/product_photos/audience.png')}}" alt="">
                                <span>2-6</span>
                            </div>

                            <div class="product-purchase-info-element" id="time"> 
                                <img src="{{asset('src/product_photos/timer.png')}}" alt="">
                                <span>30-60</span>
                            </div>
                        </div>

                        <h3>
                            {{$product->product_price}} ₴
                        </h3>

                        <div id="product-purchase-button">
                            <span>
                                В кошик
                            </span>
                        </div>

                        <div id="product-purchase-one-click-button">
                            <span>
                                Купити за 1 клiк
                            </span>
                        </div>
                    </div>

                    <div id="product-description"> <!--??????-->
                        <ul>  
                            <li>
                                <div class="description-title">
                                    <h4>
                                        Усі категорії
                                    </h4>
                                    <img src="src/botarrow.png" alt="">
                                </div>
                            </li> 
                            <li>
                                <div class="description-title">
                                    <h4>
                                        Як вибрати гру?
                                    </h4>
                                    <img src="src/botarrow.png" alt="">
                                </div>
                                <p>
                                    Якщо у настільній грі збирається взяти участь компанія, потрібно враховувати середній вік гравців. Є ігри, які не вимагають активності і навряд чи сподобаються молоді, а рухливі не припадуть до душі людям похилого віку.

                                    Багато ігор призначені лише для великої кількості учасників, а інші – строго для двох. Бувають і індивідуальні варіанти, але найчастіше кількість учасників - від двох до чотирьох. Кількість гравців, на яку розрахована гра, написано на її упаковці.
                                    Важливо відразу вирішити, скільки людей візьмуть участь у грі. Деякі настільні ігри можуть бути нудними лише для двох. Якщо найчастіше гратимуть саме двоє, не варто купувати ігри, які розраховані на велику компанію.

                                    Важливо й те, як учасники взаємодіятимуть між собою під час гри. Є два основні варіанти: кожен сам за себе або в команді. Реквізитом можуть бути карти, гральні кістки, папір та олівці, а також спеціальні пристрої, що лежать у коробці.

                                    Вирізняють кілька типів настільних ігор: інтелектуальні, творчі, рухливі та кооперативні. Інтелектуальні більше призначені для дітей, яким треба розвивати логіку та ерудицію. У форматі розваг вони зможуть тренувати пам'ять та мислення. До таких ігор належать мемо, де треба запам'ятовувати картинки чи слова. Стратегічні та економічні розвивають навички підприємця та стратега. Вони навчають грамотного планування. Творчі ігри розвивають уяву. Вони потребують більшої концентрації.
                                    Рухливі ігри більше сподобаються компаніям, тому що спрямовані на взаємодію між гравцями.
                                    У кооперативній грі дитина розвиватиме мовлення та комунікативні навички за допомогою спілкування з іншими гравцями.

                                    Ігри вибирають і за тривалістю процесу: від кількох хвилин до кількох годин. Час гри також залежить від кількості учасників та від того, наскільки вони добре знають правила.
                                </p>
                            </li> 
                            <li>
                                <div class="description-title">
                                    <h4>
                                        Як сплатити замовлення?
                                    </h4>
                                    <img src="src/botarrow.png" alt="">
                                </div>
                            </li> 
                            <li>
                                <div class="description-title">
                                    <h4>
                                        Як змінити замовлення після оформлення?
                                    </h4>
                                    <img src="src/botarrow.png" alt="">
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div id="info-right">
                    <div id="product-purchase">
                        <span>
                            Код товару:{{$product->id}}
                        </span>

                        <div id="product-purchase-info">
                            <div class="product-purchase-info-element" id="player-number">
                                <img src="{{asset('src/product_photos/audience.png')}}" alt="">
                                <span>2-6</span>
                            </div>

                            <div class="product-purchase-info-element" id="time"> 
                                <img src="{{asset('src/product_photos/timer.png')}}" alt="">
                                <span>30-60</span>
                            </div>
                        </div>

                        <h3>
                            {{$product->product_price}} ₴
                        </h3>

                        <div id="product-purchase-button">
                            <span>
                                В кошик
                            </span>
                        </div>

                        <div id="product-purchase-one-click-button">
                            <span>
                                Купити за 1 клiк
                            </span>
                        </div>

                        <div id="product-purchase-questions">
                            <div class="product-purchase-question">
                                <div class="description-title">
                                    <h4>
                                        Усі категорії
                                    </h4>
                                    <img src="{{asset('src/botarrow.png')}}" alt="">
                                </div>
                                <p>
                                    Самовивіз із магазину: сьогодні
                                    Самовивіз із 761 пункту: 1-3 дні
                                    Кур'єрська доставка: 1-3 дні
                                    Доставка поштою: від 3 днів
                                </p>
                            </div>

                            <div class="product-purchase-question">
                                <div class="description-title">
                                    <h4>
                                        Оплата
                                    </h4>
                                    <img src="{{asset('src/botarrow.png')}}" alt="">
                                </div>
                                <p>
                                </p>
                            </div>

                            <div id="ask-question-button">
                                <span>
                                    Задати питання
                                </span>
                            </div>
                        </div>
                    </div>

                    <div id="product-similar">
                        @foreach($products->slice(0,4) as $product)
                        <div class="product-card product-similar-card">
                            <img src="{{asset($product->product_img)}}" style="max-height:150px; min-height:150px" alt="">
                            <span>
                                {{$product->product_name}}
                            </span>
    
                            <h3>
                                {{$product->product_price}} ₴
                            </h3>
    
                            <div class="product-card-button">
                                <span>
                                    <a href="/product/{{$product->id}}">
                                        В кошик
                                    </a>
                                </span>
                                <img src="src/cart2.png" alt="">
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        
        <div id="page-last-chance" class="page-section">
            <div id="product-list">
                @foreach($products->slice(3,7) as $product)
                <div class="product-card" >
                    <img src="{{asset($product->product_img)}}" style="max-height:300px; min-height:300px" alt="">
                    <span>
                        {{$product->product_name}}
                    </span>
        
                    <h3>
                        {{$product->product_price}} ₴
                    </h3>
        
                    <div class="product-card-button">
                        <span>
                            <a href="/product/{{$product->id}}">
                                В кошик
                            </a>
                        </span>
                        <img src="src/cart2.png" alt="">
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    
    <footer>
        <div class="container" id="footer-container">
            <div class="footer-col">
                <img src="src/logo.png" alt="">
                <span>
                    м Київ, проспект Перемоги, 24
                </span>
            </div>

            <div class="footer-col">
                <h2 href="/catalog">
                    Каталог
                </h2>
                <div id="footer-catalog" class="footer-col-list">
                    <nav>
                        <b> Warhammer 40000 </b> 
                    </nav>
                    <nav>
                        Настільні ігри
                    </nav>
                    <nav>
                        <b> Magic: the Gathering </b> 
                    </nav>
                    <nav>
                        Аксесуари для ігор
                    </nav>
                    <nav>
                        Фарби
                    </nav>
                    <nav>
                        Аксесуари для моделізму
                    </nav>
                </div>
            </div>

            <div class="footer-col">
                <div id="footer-navigation" class="footer-col-list">
                    <nav>
                        Правила клубу
                    </nav>
                    <nav>
                        Заходи
                    </nav>
                    <nav>
                        Про нас
                    </nav>
                    <nav>
                        Контакти
                    </nav>
                    <nav>
                        Блог
                    </nav>
                </div>
            </div>

            <div class="footer-col">
                <div id="footer-help" class="footer-col-list">
                    <nav>
                        Оплата та достаток
                    </nav>
                    <nav>
                        Гарантія та повернення
                    </nav>
                </div>
            </div>

            <div class="footer-col" id="footer-right-column">
                <div id="footer-contacts" class="footer-col-list">
                    <h4>
                        38 (095) 721-0-751
                    </h4>
                    <h4>
                        goldfish@gmail.com
                    </h4>
                </div>

                <div id="footer-socials">
                    <div>
                        <img src="src/socials/insta.png" alt="">
                    </div>
                    <div>
                        <img src="src/socials/vk.png" alt="">
                    </div>
                    <div>
                        <img src="src/socials/facebook.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>