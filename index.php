<?php wp_head();?>
<body>
    <header class="l-header p-header">
        <h1><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() . '../img/logo.svg' ); ?>" alt="Sneakers"></a></h1>
        <button class="p-header__button" id="js-button">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <?php get_sidebar(); ?>
        <div class="p-header__blackBack" id="js-blackBack"></div>
    </header>
    <main>
        <section class="p-mainvisual" id="video">
            <!-- <video src="video/video.mp4" class="p-mainvisual__video"  autoplay loop muted playsinline></video> -->
        </section>
        <section class="p-pickup">
            <h2 class="c-title__section">PICK UP</h2>
            <ul class="p-slider js-slider">
                <li class="p-slidetitle__sectionr__list"><img src="<?php echo esc_url( get_template_directory_uri() . '/img/Sneakers__img02.jpg' ); ?>" alt="" class="p-slider__img"></li>
                <li class="p-slider__list"><img src="<?php echo esc_url( get_template_directory_uri() . '/img/Sneakers__img03.jpg' ); ?>" alt="" class="p-slider__img"></li>
                <li class="p-slider__list"><img src="<?php echo esc_url( get_template_directory_uri() . '/img/Sneakers__img04.jpg' ); ?>" alt="" class="p-slider__img"></li>
                <li class="p-slider__list"><img src="<?php echo esc_url( get_template_directory_uri() . '/img/Sneakers__img05.jpg' ); ?>" alt="" class="p-slider__img"></li>
                <li class="p-slider__list"><img src="<?php echo esc_url( get_template_directory_uri() . '/img/Sneakers__img06.jpg' ); ?>" alt="" class="p-slider__img"></li>
                <li class="p-slider__list"><img src="<?php echo esc_url( get_template_directory_uri() . '/img/Sneakers__img07.jpg' ); ?>" alt="" class="p-slider__img"></li>
                <li class="p-slider__list"><img src="<?php echo esc_url( get_template_directory_uri() . '/img/Sneakers__img08.jpg' ); ?>" alt="" class="p-slider__img"></li>
            </ul>
        </section>
        <section class="l-feature">
            <h2 class="c-title__section" >FEATURE</h2>
            <ul class="p-item">
                <li class="p-item__child">
                    <ul class="c-card">
                        <li class="c-card__img">
                            <img src= "<?php echo esc_url( get_template_directory_uri() . 'img/feature1.jpg' ); ?>" alt="スニーカーの画像">
                        </li>
                        <li>
                            <ul   class="c-card__contents">
                                <a href="#" class="c-card__category">category</a>
                                <p class="c-text">テキストテキストテキストテキストテキストテキストテキストテキスト</p>
                                <p class="c-text__date">XXX.XXX</p>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="p-item__child">
                    <ul class="c-card">
                        <li class="c-card__img">
                            <img src="img/feature2.jpg" alt="スニーカーの画像">
                        </li>
                        <li>
                            <ul   class="c-card__contents">
                                <a href="#" class="c-card__category">category</a>
                                <p class="c-text">テキストテキストテキストテキストテキストテキストテキストテキスト</p>
                                <p class="c-text__date">XXX.XXX</p>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="p-item__child">
                    <ul class="c-card">
                        <li class="c-card__img">
                            <img src="img/feature3.jpg" alt="スニーカーの画像">
                        </li>
                        <li>
                            <ul   class="c-card__contents">
                                <a href="#" class="c-card__category">category</a>
                                <p class="c-text">テキストテキストテキストテキストテキストテキストテキストテキスト</p>
                                <p class="c-text__date">XXX.XXX</p>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="p-item__child">
                    <ul class="c-card">
                        <li class="c-card__img">
                            <img src="img/feature4.jpg" alt="スニーカーの画像">
                        </li>
                        <li>
                            <ul   class="c-card__contents">
                                <a href="#" class="c-card__category">category</a>
                                <p class="c-text">テキストテキストテキストテキストテキストテキストテキストテキスト</p>
                                <p class="c-text__date">XXX.XXX</p>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="p-item__child">
                    <ul class="c-card">
                        <li class="c-card__img">
                            <img src="img/feature5.jpg" alt="スニーカーの画像">
                        </li>
                        <li>
                            <ul   class="c-card__contents">
                                <a href="#" class="c-card__category">category</a>
                                <p class="c-text">テキストテキストテキストテキストテキストテキストテキストテキスト</p>
                                <p class="c-text__date">XXX.XXX</p>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="p-item__child">
                    <ul class="c-card">
                        <li class="c-card__img">
                            <img src="img/feature6.jpg" alt="スニーカーの画像">
                        </li>
                        <li>
                            <ul   class="c-card__contents">
                                <a href="#" class="c-card__category">category</a>
                                <p class="c-text">テキストテキストテキストテキストテキストテキストテキストテキスト</p>
                                <p class="c-text__date">XXX.XXX</p>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="p-item__child">
                    <ul class="c-card">
                        <li class="c-card__img">
                            <img src="img/feature7.jpg" alt="スニーカーの画像">
                        </li>
                        <li>
                            <ul   class="c-card__contents">
                                <a href="#" class="c-card__category">category</a>
                                <p class="c-text">テキストテキストテキストテキストテキストテキストテキストテキスト</p>
                                <p class="c-text__date">XXX.XXX</p>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="p-item__child">
                    <ul class="c-card">
                        <li class="c-card__img">
                            <img src="img/feature8.jpg" alt="スニーカーの画像">
                        </li>
                        <li>
                            <ul   class="c-card__contents">
                                <a href="#" class="c-card__category">category</a>
                                <p class="c-text">テキストテキストテキストテキストテキストテキストテキストテキスト</p>
                                <p class="c-text__date">XXX.XXX</p>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="p-item__child">
                    <ul class="c-card">
                        <li class="c-card__img">
                            <img src="img/feature9.jpg" alt="スニーカーの画像">
                        </li>
                        <li>
                            <ul   class="c-card__contents">
                                <a href="#" class="c-card__category">category</a>
                                <p class="c-text">テキストテキストテキストテキストテキストテキストテキストテキスト</p>
                                <p class="c-text__date">XXX.XXX</p>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </section>
        <section class="p-contact">
            <h2 class="p-contact__title">CONTACT</h2>
            <div class="p-contact__content">
                <div class="p-contact__textBox">
                    <p class="p-contact__text--01">テキストテキストテキスト</p>
                    <p class="p-contact__text--02">テキストテキストテキストテキストテキストテキストテキストテキストテキスト テキストテキストテキストテキストテキストテキストテキストテキストテキスト テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                    <p class="p-contact__text--03">テキストテキストテキストテキストテキストテキストテキストテキストテキスト テキストテキストテキストテキストテキストテキストテキストテキストテキスト テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
                <div class="p-contact__form">
                    <p>ふぉーむはプラグインで実装しまする</p>
                    <p>test</p>
                    <p>test</p>
                    <p>test</p>
                    <?php echo "hello"; ?>
                </div>
            </div>
        </section>
    </main>
    <?php get_footer(); ?>