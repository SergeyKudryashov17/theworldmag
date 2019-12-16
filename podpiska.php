<?php
/**
 * Template Name: Подписка
 */

get_header();
?>
    <section id="">
        <div class="col-md-12 col-sm-12 colxs12">
            <div class="row">
                <h2 class="headline">ОФОРМИТЬ ПОДПИСКУ</h2>
            </div>
        </div>
    </section>
    <section>
        <div class="row">
            <div class="col-md-2 col-sm-1 hidden-xs"></div>
            <div class="col-md-8 col-sm-10 col-xs-12">
                <h2 class="headline-bl">Заполните контактные данные</h2>
                <form class="contact_form" id="form" onsubmit="return false;">
                    <div class="row">   
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input class="info-pos" id="surname"  type="text"  name="surname"  placeholder="Фамилия"/>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input class="center-pos" id="index" type="text" name="index"  placeholder="Индекс"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input class="info-pos" id="name"  type="text"  name="name"  placeholder="Имя"/>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input class="center-pos" id="adress" type="text" name="adress"  placeholder="Улица"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input class="info-pos" id="second-name"  type="text"  name="second-name"  placeholder="Отчество"/>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input class="center-pos" id="house" type="text" name="house"  placeholder="Дом"/>
                        </div>
                    </div>    
                    <div class="row">    
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input class="center-pos" id="email" type="email" name="email"  placeholder="Email"/>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input class="center-pos" id="housing" type="text" name="housing"  placeholder="Корпус"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6col-xs-12">
                            <input class="center-pos" id="phone" type="text" name="phone"  placeholder="Телефон"/>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input class="center-pos" id="structure" type="text" name="structure"  placeholder="Строение"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input class="center-pos" id="country" type="text" name="country"  placeholder="Cтрана"/>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input class="center-pos" id="apartment" type="text" name="apartment"  placeholder="Квартира"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input class="center-pos" id="city" type="text" name="city"  placeholder="Город"/>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input class="center-pos" id="floor" type="text" name="floor"  placeholder="Этаж"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input class="center-pos" id="town" type="text" name="town"  placeholder="Населенный пункт"/>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input class="center-pos" id="intercom" type="text" name="intercom"  placeholder="Код/Домофон"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12"></div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="language">Выберите язык журнала:</div>
                                <div class="language_en">
                                    <label>
                                        <input type="checkbox" style="width:15px; height:15px;"  name="language" value="Английский" >Англиский
                                    </label>
                                </div>
                                <div class="language_rus">
                                    <label>
                                        <input type="checkbox" style="width:15px; height:15px;" name="language"  value="Русский" >Русский
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <div class="info-buy">
                                <p class="info-buy__head">Способы оплаты:</p>
                                <?php the_field('pay'); ?>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="info-buy">
                                <p class="info-buy__head">Описание возврата товара:</p>
                                <?php the_field('return'); ?>
                            </div>
                            <div class="info-buy">
                                <p class="info-buy__head">Условия доставки товара:</p>
                                <?php the_field('delivery'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="submit">
                        <button id="sub" type="submit">ОПЛАТИТЬ</button>
                        <div class="mini-caption">Нажимая на кнопку, вы даете согласие на обработку своих персональных данных</div>
                    </div>
                
                </form>
            </div>
            <div class="col-md-2 col-sm-1 hidden-xs"></div>
            <div class="clear-fix"></div>
</section>
<?php get_footer(); ?>