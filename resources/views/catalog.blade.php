<!doctype html>

<html>

<head>
    <title>
        Goldfish
    </title>

    <meta charset="UTF-8">
	<meta name="viewport" content="width = device-width, initial-scale = 1.0">
    <link rel="stylesheet" href="{{asset('css/common.css')}}">
    <link rel="stylesheet" href="{{asset('css/catalog.css')}}">
</head>


<body>
    <header>
        <div class="container" id="header-lvl1-container">
            <div class="header-level" id="lvl1">
                <div id="header-burger-menu">
                    <img src="src/borgar.png" alt="">
                </div>

                <div id="header-logo">
                    <a href="/index">
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
                        Magic:the Cathering
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
        <div id="catalog-section" class="page-section">
            <div id="title">
                <h1>
                    Дуельні настільні ігри
                </h1> 
                <div id="mobile-filter">
                    <img src="src/filter.png" alt="">
                    <span>
                        Фільтр
                    </span>
                </div>
            </div>
            <div id="catalog">

                <div id="catalog-options">
                    <div class="catalog-options-section">
                        <ul>  
                            <li>
                                <div class="category-title">
                                    <span>
                                        Усі категорії
                                    </span>
                                    <img src="src/botarrow.png" alt="">
                                </div>
                                <ul>
                                    <li>
                                        <div class="category-title">
                                            <span>
                                                Настільні ігри
                                            </span>
                                            <img src="src/botarrow.png" alt="">
                                        </div>
                                        <ul>
                                            <li>
                                                Вечіркові ігри
                                            </li>
                                            <li>
                                                Детективні ігри
                                                
                                            </li>
                                            <li>
                                                Дитячі ігри
                                                
                                            </li>
                                            <li>
                                                Дуельні ігри
                                                
                                            </li>
                                            <li>
                                                Кооперативні ігри
                                                
                                            </li>
                                            <li>
                                                Пригодницькі ігри
                                                
                                            </li>
                                            <li>
                                                Карточні ігри
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                Warhammer 40000  
                            </li>
                            <li>
                                Magic: the Gathering
                            </li>
                            <li>
                                Аксесури для ігор
                            </li>
                            <li>
                                Фарби
                            </li>
                            <li>
                                Товари для дітей
                            </li>
                            <li>
                                Аксесуари для
                                модельізму
                            </li>
                        </ul>
                    </div>

                    <div class="catalog-options-section">
                        <ul>
                            <li>
                                <div class="category-title">
                                    <span>
                                        Віки
                                    </span>
                                    <img src="src/botarrow.png" alt="">
                                </div>
                                <ul>
                                    <li>
                                        <div class="age-option">
                                            <img src="src/checkbox.png" alt="">

                                            <span>3-5 років</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="age-option">
                                            <img src="src/checkbox.png" alt="">
                                            
                                            <span>6-7 років</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="age-option">
                                            <img src="src/checkbox.png" alt="">

                                            <span>8-12 років</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="age-option">
                                            <img src="src/checkbox.png" alt="">

                                            <span>13-15 років</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="age-option">
                                            <img src="src/checkbox.png" alt="">

                                            <span>16-17 років</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="age-option">
                                            <img src="src/checkbox.png" alt="">

                                            <span>понад 18 років</span>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div id="product-list">
                @foreach($products as $product)
                    <div class="product-card catalog-product-card">
                        <img src="{{asset($product->product_img)}}" alt="">
                        <span>
                            <a href="/product/{{$product->id}}">
                                {{$product->product_name}}
                            </a>
                        </span>

                        <h3>
                            <a href="/product/{{$product->id}}">
                                {{$product->product_price}} ₴
                            </a>
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

    <footer>
        <div class="container" id="footer-container">
            <div class="footer-col">
                <img src="src/logo.png" alt="">
                <span>
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