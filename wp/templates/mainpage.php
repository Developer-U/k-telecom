<?php
/*
* Template name: Главная страница
*/
get_header();
?>

    <section class="hero">
        <div class="container">
            <div class="hero__contain">
                <div class="hero__box hero-box">
                    <h1 class="hero-box__heading">
                        <?php the_title(); ?>
                    </h1>
    
                    <ul class="hero-box__list">
                        <li class="hero-box__item">5 тарифов для многоквартирных и 4 для частных домов</li>
                        <li class="hero-box__item">безлимит подключенных устройств</li>
                        <li class="hero-box__item">комфортная поддержка 24/7</li>
                    </ul>
    
                    <button class="hero-box__btn">Подробнее</button>
                </div>
            </div>            
        </div>
    </section>

    <section class="plans">
        <div class="container">
            <h2 class="plans__heading">Тарифные планы</h2>

            <div class="plans__slider slider-plan owl-carousel owl-theme">
                <div class="slider-plan__slide card">
                    <div class="card__top">
                        <h3 class="card__heading">Мой клик</h3>

                        <p class="card__descr">Скорость интернета</p>
    
                        <p class="card__speed">до 40 Мбит/с</p>
    
                        <p class="card__text">
                            Отличный вариант для пенсионеров, выполнения определенных задач 
                            и&nbsp;работе с&nbsp;файлами различных размеров.
                        </p>
    
                        <label class="card__check" for="check">
                            <input type="checkbox" name="checkbox"  class="checkbox">                           
                                ТВ&nbsp;+&nbsp;100&nbsp;₽(пакет&nbsp;“Базовый”)                             
                            <span></span>
                        </label>
    
                        <h3 class="card__price">399 ₽</h3>
    
                        <span class="card__more">
                            *итоговая цена зависит от варианта оплаты и пакета ТВ при
                             необходимости
                        </span>
                    </div>                    

                    <button class="card__btn">Выбрать тариф</button>
                </div>

                <div class="slider-plan__slide card">
                    <div class="card__top">
                        <h3 class="card__heading">Резвый клик</h3>

                        <p class="card__descr">Скорость интернета</p>
    
                        <p class="card__speed">80-100 Мбит/с</p>
    
                        <p class="card__text">
                            Отличный вариант для всей семьи. Общайтесь в&nbsp;соцсетях и&nbsp;смотрите 
                            любимые фильмы и&nbsp;сериалы!
                        </p>
    
                        <label class="card__check" for="check">
                            <input type="checkbox" name="checkbox"  class="checkbox">                           
                                ТВ&nbsp;+&nbsp;100&nbsp;₽(пакет&nbsp;“Базовый”)                             
                            <span></span>
                        </label>
    
                        <h3 class="card__price">449 ₽</h3>
    
                        <span class="card__more">
                            *итоговая цена зависит от варианта оплаты и пакета ТВ при
                             необходимости
                        </span>
                    </div>                    

                    <button class="card__btn">Выбрать тариф</button>
                </div>

                <div class="slider-plan__slide card">
                    <div class="card__top">
                        <h3 class="card__heading">Мой клик</h3>

                        <p class="card__descr">Скорость интернета</p>
    
                        <p class="card__speed">до 40 Мбит/с</p>
    
                        <p class="card__text">
                            Отличный вариант для пенсионеров, выполнения определенных задач 
                            и&nbsp;работе с&nbsp;файлами различных размеров.
                        </p>
    
                        <label class="card__check" for="check">
                            <input type="checkbox" name="checkbox" class="checkbox">                           
                                ТВ&nbsp;+&nbsp;100&nbsp;₽(пакет&nbsp;“Базовый”)                             
                            <span></span>
                        </label>
    
                        <h3 class="card__price">399 ₽</h3>
    
                        <span class="card__more">
                            *итоговая цена зависит от варианта оплаты и пакета ТВ при
                             необходимости
                        </span>
                    </div>                    

                    <button class="card__btn">Выбрать тариф</button>
                </div>

                <div class="slider-plan__slide card">
                    <div class="card__top">
                        <h3 class="card__heading">Мой клик</h3>

                        <p class="card__descr">Скорость интернета</p>
    
                        <p class="card__speed">до 40 Мбит/с</p>
    
                        <p class="card__text">
                            Отличный вариант для пенсионеров, выполнения определенных задач 
                            и&nbsp;работе с&nbsp;файлами различных размеров.
                        </p>
    
                        <label class="card__check" for="check">
                            <input type="checkbox" name="checkbox"  class="checkbox">                           
                                ТВ&nbsp;+&nbsp;100&nbsp;₽(пакет&nbsp;“Базовый”)                             
                            <span></span>
                        </label>
    
                        <h3 class="card__price">399 ₽</h3>
    
                        <span class="card__more">
                            *итоговая цена зависит от варианта оплаты и пакета ТВ при
                             необходимости
                        </span>
                    </div>                    

                    <button class="card__btn">Выбрать тариф</button>
                </div>
            </div>
        </div>
    </section>

    <section class="cta">
        <div class="container cta__box">
            <article class="cta__contain">
                <h2 class="cta__heading">
                    Подключиться просто!
                </h2>
    
                <div class="cta__form">
                    <?php echo do_shortcode('[contact-form-7 id="12" title="Контактная форма 1"]') ?>
                </div>
            </article>            
        </div>
    </section>

<?php
    get_footer(); 
?>