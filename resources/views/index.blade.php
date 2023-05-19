<!doctype html>

<html>

<head>
    <title>
            Goldfish
    </title>

    <meta charset="UTF-8">
	<meta name="viewport" content="width = device-width, initial-scale = 1.0">
    <link rel="stylesheet" href="{{asset('css/common.css')}}">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
</head>

<body>
    <header>
        <div class="container" id="header-lvl1-container">
            <div class="header-level" id="lvl1">
                <div id="header-burger-menu">
                    <img src="src/borgar.png" alt="">
                </div>

                <div id="header-logo">
                    <a href="index">
                        <img src="src/logo.png" alt="">
                    </a>
                </div>
    
                <div id="header-search-bar">
                    <span>
                        Знайти гру
                    </span>
                    <img src="src/searchIcon.png" alt="">
                </div>

                <div id="header-phone-number">
                    <img src="src/phone.png" alt="">
                    <span>
                        <b>38 (095) 721-0-751</b>
                    </span>
                </div>

                <div id="header-cart-profile">
                    <img src="src/person.png" alt="">
                    <img src="src/cart.png" alt="">
                </div>
            </div>
            <div id="header-search-bar-mobile">
                <span>
                    Знайти гру
                </span>
                <img src="src/searchIcon.png" alt="">
            </div>

        </div>

        <div class="container" id="header-lvl2-container">

            <div class="header-level" id="lvl2">
                <div id="header-catalog">
                    <div id="burger-menu">
                        <img src="src/burger-menu" alt="">
                    </div>

                    <span><a href="catalog">Каталог</a></span>
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
    </header>

    <div  class="container" id="main-content-container">
        <div id="banner" class="page-section">
            <img src="src/wide/MTGBanner.png" alt="">
            <div id="banner-text">
                <span>
                    Найпопулярніша карткова гра
                </span>
                <h2>
                    Magic: the Gathering
                </h2>
            </div>
        </div>


        <div id="page-catalog" class="page-section">
            <div id="title">
                <h1>
                    Каталог
                </h1> 
            </div>

            <div id="catalog-content">
                <div id="big-item" class="catalog-item">
                    <img src="src/catalog/big.png" alt="">  
                    <div class="catalog-item-title">
                        <span>Настільні ігри</span>
                    </div>
                </div>

                <div id="small-items">

                    <div class="small-item catalog-item">
                        <img src="src/catalog/small1.png" alt="">  
                        <div class="catalog-item-title">
                            <span>Варгейми</span>
                        </div>
                    </div>

                    <div class="small-item catalog-item">
                        <img src="src/catalog/small2.png" alt="">  
                        <div class="catalog-item-title">
                            <span>Фарби</span>
                        </div>
                    </div>

                    <div class="small-item catalog-item">
                        <img src="src/catalog/small3.png" alt="">  
                        <div class="catalog-item-title">
                            <span>Magic:the Cathering</span>
                        </div>
                    </div>

                    <div class="small-item catalog-item">
                        <img src="src/catalog/small4.png" alt="">  
                        <div class="catalog-item-title">
                            <span>Весь каталог</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="page-last-chance" class="page-section">
            <div id="title">
                <h1>
                    Встигни купити
                </h1> 
            </div>

            <div id="product-list">
                @foreach($products->slice(3,7) as $product)
                <div class="product-card">
                    <img src="{{asset($product->product_img)}}"  style="max-height:400px; min-height:400px" alt="">
                    <span>
                        {{$product->product_name}}
                    </span>

                    <h3>
                        {{$product->product_price}}
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

        <div id="page-specials" class="page-section">
            
            <div id="title">
                <h1>
                    Спеціальні пропозиції
                </h1>
            </div>

            <div id="product-list">
            @foreach($products->slice(0,4) as $product)
                <div class="product-card">
                    <img src="{{asset($product->product_img)}}" style="max-height:400px; min-height:400px" alt="">
                    <span>
                        {{$product->product_name}}
                    </span>

                    <h3>
                        {{$product->product_price}}
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

        <div id="page-events" class="page-section">
            <div id="title">
                <h1>
                    Найближчі заходи
                </h1>
            </div>

            <div id="event-list">

                <div class="event">
                    <img src="src/events/1.png" alt="">
                    <div class="event-text">
                        <div class="event-text-title">
                            <h4>
                                Halloween з GoldFish
                            </h4>
                            <span>
                                31 жовтня 2023 р. 19:00
                            </span>
                        </div>
                        <span>Ми зберемося, щоб дізнатися, хто ж був Мафією і що
                            буде з тим,кого вбили.</span>
                    </div>
                </div>

                <div class="event">
                    <img src="src/events/2.png" alt="">
                    <div class="event-text">
                        <div class="event-text-title">
                            <h4>
                                Halloween з GoldFish
                            </h4>
                            <span>
                                31 жовтня 2023 р. 19:00
                            </span>

                        </div>
                        <span>Ми зберемося, щоб дізнатися, хто ж був Мафією і що
                            буде з тим,кого вбили.</span>
                        
                    </div>
                </div>


            </div>

        </div>


        <div id="page-news" class="page-section">
            <div id="title">
                <h1>
                    Більше цікавої інформації
                </h1>
            </div>

            <div id="news-list">

                <div class="new">
                    <img src="src/news/1.png" alt="">
                    <div class="news-text">
                        <div class="news-text-title">
                            <h4>
                                Halloween з GoldFish
                            </h4>
                        </div>
                        <span>Ми зберемося, щоб дізнатися, хто ж був Мафією і що
                            буде з тим,кого вбили.</span>
                        
                    </div>
                </div>

                <div class="new">
                    <img src="src/news/2.png" alt="">
                    <div class="news-text">
                        <div class="news-text-title">
                            <h4>
                                Halloween з GoldFish
                            </h4>
                        </div>
                        <span>Ми зберемося, щоб дізнатися, хто ж був Мафією і що
                            буде з тим,кого вбили.</span>
                        
                    </div>
                </div>

                <div class="new">
                    <img src="src/news/3.png" alt="">
                    <div class="news-text">
                        <div class="news-text-title">
                            <h4>
                                Halloween з GoldFish
                            </h4>
                        </div>
                        <span>Ми зберемося, щоб дізнатися, хто ж був Мафією і що
                            буде з тим,кого вбили.</span>
                        
                    </div>
                </div>
            </div>
        </div>

        <div id="page-about" class="page-section">
            <div id="title">
                <h1>
                    Про ігровий центр «GoldFish»
                </h1>
            </div>
            <div id="page-about-content">
                <div id="about-img">
                    <img src="src/about.png" alt="">
                </div>
                <div id="about-text">
                    <p>
                        GoldFish - магазин, в якому Ви можете купити відмінний подарунок як для себе, так і для своїх близьких.
                        <br><br>
                        В асортименті нашого магазину представлені тисячі настільних ігор на будь-який смак: прості та складніші, сімейні та тільки для дорослих, для двох та для великих компаній, детективні та логічні, рольові та стратегічні настілки. «GoldFish» також регулярно проводить власні ігротеки: турніри з Magic: the Gathering (від компанії Wizards of the coast) та Warhammer (від Games Workshop).
                        <br><br>
                        У нашому магазині можна знайти потрібні аксесуари для улюблених ігор (протектори для карт та колекцій), інструменти для самостійного оформлення та фарбування фігурок (кейси, підставки, фарби Vallejo та ін.) та багато іншого.
                        <br><br>
                        GoldFish - це не тільки магазин настільних ігор, але й повноцінний хобі-центр. Тут можна орендувати столи для ігор з друзями, проходити навчання і майстер-класи з ігор, що тебе цікавлять, заводити нові знайомства і долучатися до ігрового ком'юніті!
                    </p>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container" id="footer-container">
            <div class="footer-col">
                <img src="src/logo.png" alt="">
                <span id="adress">
                    м Київ, проспект Перемоги, 24
                </span>
            </div>

            <div class="footer-col">
                <h2>
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