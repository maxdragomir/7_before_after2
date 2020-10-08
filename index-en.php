<?php include('../assets/header-new.php'); ?>
<link rel="stylesheet" href="../public/xbet/css/jackpot-games.css?2225">
<link rel="stylesheet" href="css/app.css">

<div class="ba7-page">
    <div class="ba7-btns-wrap" style="position: fixed; left: 0; bottom: 100px; z-index: 100; font-size: 20px;">
        <button class="ex-btn ba7-modal-show" type="button" data-modal="#ba7-modal-rules" style="font-family: 'Roboto Condensed', sans-serif; text-transform: uppercase; cursor: pointer; display: block; border: none; padding: 8px 10px 6px; margin: 10px 0; font-weight: 700; color: #fff; background: #98c50e;">
            <span>rules</span>
        </button>
        <button class="ex-btn ba7-modal-show" type="button" data-modal="#ba7-modal-win" style="font-family: 'Roboto Condensed', sans-serif; text-transform: uppercase; cursor: pointer; display: block; border: none; padding: 8px 10px 6px; margin: 10px 0; font-weight: 700; color: #fff; background: #98c50e;">
            <span>win</span>
        </button>
        <button class="ex-btn ba7-modal-show" type="button" data-modal="#ba7-modal-lose" style="font-family: 'Roboto Condensed', sans-serif; text-transform: uppercase; cursor: pointer; display: block; border: none; padding: 8px 10px 6px; margin: 10px 0; font-weight: 700; color: #fff; background: #98c50e;">
            <span>lose</span>
        </button>
    </div>

    <div class="ba7-wrap" data-status="static" >
        <ul class="ba7-bread">
            <li class="active"><a href="/">Главная</a></li>
            <li class="active"><a href="/">1XGAMES</a></li>
            <li>"ПОД 7 НАД"</li>
        </ul>
        <div class="ba7-cross1-light">
            <img src="img/7_before_after/dark-cross.png" alt="">
        </div>
        <div class="ba7-cross2-light">
            <img src="img/7_before_after/light-cross.png" alt="">
        </div>
        <div class="ba7-cross-dark">
            <img src="img/7_before_after/big-cross.png" alt="">
        </div>
        <div class="ba7-lightning">
            <img src="img/7_before_after/lights.png" alt="">
        </div>
        <div class="ba7-dice1">
            <img src="img/7_before_after/dice1.png" alt="">
        </div>
        <div class="ba7-dice2">
            <img src="img/7_before_after/dice2.png" alt="">
        </div>
        <div class="ba7-dice3">
            <img src="img/7_before_after/dice3.png" alt="">
        </div>
        <div class="ba7-dice4" >
            <img src="img/7_before_after/dice4.png" alt="">
        </div>


        <div id="jackpot_container" class="jackpot__wrap"><div class="jackpot"><div class="jackpot__header"><div class="jackpot__coins"><div class="jackpot__coin jackpot__coin-one"></div> <div class="jackpot__coin jackpot__coin-two"></div> <div class="jackpot__coin jackpot__coin-three"></div> <div class="jackpot__coin jackpot__coin-four"></div> <div class="jackpot__coin jackpot__coin-five"></div> <div class="jackpot__coin jackpot__coin-six"></div> <div class="jackpot__coin jackpot__coin-seven"></div> <div class="jackpot__coin jackpot__coin-eight"></div> <div class="jackpot__coin jackpot__coin-nine"></div> <div class="jackpot__coin jackpot__coin-ten"></div></div> <div class="jackpot__glares"><div class="jackpot__glare"></div></div></div> <div class="jackpot__content"><div class="jackpot__body"><div class="jackpot__body-glare"></div> <ol class="jackpot-options__list"><li class="jackpot-options__item"><span class="jackpot-options__name">Часовий</span> <ul class="jackpot-options__scoreboard scoreboard__list"><li class="jackpot-scoreboard__item"><div data-num="9" class="jackpot-current__num"></div></li><li class="jackpot-scoreboard__item"><div data-num="8" class="jackpot-current__num"></div></li><li class="jackpot-scoreboard__item"><div data-num="1" class="jackpot-current__num"></div></li><li class="jackpot-scoreboard__item"><div data-num="7" class="jackpot-current__num"></div></li></ul></li> <li class="jackpot-options__item"><span class="jackpot-options__name">Денний</span> <ol class="jackpot-options__scoreboard scoreboard__list"><li class="jackpot-scoreboard__item"><div data-num="1" class="jackpot-current__num"></div></li><li class="jackpot-scoreboard__item"><div data-num="5" class="jackpot-current__num"></div></li><li class="jackpot-scoreboard__item"><div data-num="4" class="jackpot-current__num"></div></li><li class="jackpot-scoreboard__item"><div data-num="2" class="jackpot-current__num"></div></li><li class="jackpot-scoreboard__item"><div data-num="5" class="jackpot-current__num"></div></li><li class="jackpot-scoreboard__item"><div data-num="4" class="jackpot-current__num"></div></li></ol></li> <li class="jackpot-options__item"><span class="jackpot-options__name">Тижневий</span> <ol class="jackpot-options__scoreboard scoreboard__list"><li class="jackpot-scoreboard__item"><div data-num="1" class="jackpot-current__num"></div></li><li class="jackpot-scoreboard__item"><div data-num="0" class="jackpot-current__num"></div></li><li class="jackpot-scoreboard__item"><div data-num="7" class="jackpot-current__num"></div></li><li class="jackpot-scoreboard__item"><div data-num="9" class="jackpot-current__num"></div></li><li class="jackpot-scoreboard__item"><div data-num="1" class="jackpot-current__num"></div></li><li class="jackpot-scoreboard__item"><div data-num="3" class="jackpot-current__num"></div></li><li class="jackpot-scoreboard__item"><div data-num="9" class="jackpot-current__num"></div></li></ol></li> <li class="jackpot-options__item"><span class="jackpot-options__name">Місячний</span> <ol class="jackpot-options__scoreboard scoreboard__list"><li class="jackpot-scoreboard__item"><div data-num="5" class="jackpot-current__num"></div></li><li class="jackpot-scoreboard__item"><div data-num="5" class="jackpot-current__num"></div></li><li class="jackpot-scoreboard__item"><div data-num="8" class="jackpot-current__num"></div></li><li class="jackpot-scoreboard__item"><div data-num="9" class="jackpot-current__num"></div></li><li class="jackpot-scoreboard__item"><div data-num="5" class="jackpot-current__num"></div></li><li class="jackpot-scoreboard__item"><div data-num="5" class="jackpot-current__num"></div></li><li class="jackpot-scoreboard__item"><div data-num="2" class="jackpot-current__num"></div></li></ol></li></ol> <a href="javascript:void(0)" class="jackpot__rules-btn">Правила </a></div> <div class="jackpot__footer">
                        UAH
                    </div></div></div></div>

        <div class="ba7-container">
            <div class="ba7-top-wrap">
                <div class="ba7-logo-wrap">
                    <img src="img/7_before_after/logo_en.png" class="ba7-logo" alt="">
                    <div class="ba7-logo-bg-container">
                        <img src="img/7_before_after/logo-bg.png" class="ba7-logo-bg" alt="">
                    </div>
                    <img src="img/7_before_after/logo-dust.png" class="ba7-logo-dust" alt="">
                </div>
                <a href="/" class="ba7-rules-show ba7-modal-show ba7-rules" data-modal=".ba7-modal-rules">Правила</a>
            </div>

            <div class="ba7-game-screen">
                <div class="ba7-dices">
                    <div class="container-for-move container-for-move--left">
                        <div class="ba7-dice-container ba7-dice-container--left">
                            <div class="ba7-dice">
                                <div class="ba7-diceSprite ba7-diceSpriteOne ba7-dice--hold" data-dice="0"><span class="ba7-diceImgInner"></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="container-for-move container-for-move--right">
                        <div class="ba7-dice-container ba7-dice-container--right">
                            <div class="ba7-dice">
                                <div class="ba7-diceSprite ba7-diceSpriteTwo ba7-dice--hold" data-dice="0"><span class="ba7-diceImgInner"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ba7-foot-wrap">
                <div class="ba7-bet-radio">
                    <div class="ba7-bet-container ba7-before-container">
                        <div class="ba7-bet-x">
                            <label class="ba7-radio-container" data-value="x 2.3">x 2.3
                                <input type="radio" name="ba7-radio"  value="3">
                                <span class="ba7-radiobtn"></span>
                            </label>
                        </div>
                        <div class="ba7-bet-var__container">
                            <span class="ba7-textfill-container">
                                <span class="ba7-bet-var" data-value="над">над</span>
                                <span class="ba7-numbers">8 9 10 11 12</span>
                            </span>
                        </div>
                    </div>
                    <div class="ba7-bet-container ba7-equal-container">
                        <div class="ba7-bet-x">
                            <label class="ba7-radio-container" data-value="x 5.8">x 5.8
                                <input type="radio" name="ba7-radio"  value="2">
                                <span class="ba7-radiobtn"></span>
                            </label>
                        </div>
                        <div class="ba7-bet-var__container">
                            <span class="ba7-textfill-container">
                                <span class="ba7-bet-var" data-value="ровно">ровно</span>
                                <span class="ba7-numbers">7</span>
                            </span>
                        </div>
                    </div>
                    <div class="ba7-bet-container ba7-after-container">
                        <div class="ba7-bet-x">
                            <label class="ba7-radio-container" data-value="x 2.3">x 2.3
                                <input type="radio"  name="ba7-radio"  value="1">
                                <span class="ba7-radiobtn"></span>
                            </label>
                        </div>
                        <div class="ba7-bet-var__container">
                            <span class="ba7-textfill-container">
                                <span class="ba7-bet-var" data-value="под">под</span>
                                <span class="ba7-numbers">2  3  4  5  6</span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="ba7-bet">
                    <div class="ba7-bet-head">
                        <div class="ba7-btns-val">
                            <button class="ba7-btn-val" data-val='10'><span>10</span></button>
                            <button class="ba7-btn-val" data-val='30'><span>30</span></button>
                            <button class="ba7-btn-val" data-val='100'><span>100</span></button>
                            <button class="ba7-btn-val" data-val='300'><span>300</span></button>
                            <button class="ba7-btn-val" data-val='1000'><span>1000</span></button>
                            <button class="ba7-btn-val" data-val='3000'><span>3000</span></button>
                            <button class="ba7-btn-val" data-val='9000'><span>9000</span></button>
                        </div>
                    </div>
                    <div class="ba7-bet-bottom">
                        <div class="ba7-bet-body">
                            <div class="ba7-bet-sum">
                                <div class="ba7-select-wrap">
                                    <select class="ba7-bet-select">
                                        <option value="1">Основной</option>
                                        <option value="2">Бонусный 1xGames</option>
                                    </select>
                                </div>
                                <div class="ba7-input-container">
                                    <input class="ba7-bet-inp" type="text" value="0" />
                                </div>
                                <div class="ba7-btn-reset-container">
                                    <button class="ba7-bet-res"></button>
                                </div>
                            </div>
                        </div>
                        <div class="ba7-bet-btn-container">
                            <button class="ba7-btn-start"><span>Сделать ставку</span></button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div style="display: none;">

        <div class="ba7-modal ba7-modal-result ba7-modal-win" id="ba7-modal-win-generate">
            <div class="ba7-modal-logo">
                <img src="img/7_before_after/logo.png" alt="">
            </div>
            <div class="arcticmodal-close ba7-modal-close"></div>
            <div class="ba7-modal-in ba7-win-body">
                <div class="ba7-mresult-title ba7-mresult-title--win">ПОБЕДА!</div>
                <div class="ba7-mresult">ВЫ ВЫИГРАЛИ!</div>
                <p class="ba7-mresult-text"><span id="ba7-winResult"></span><span> UAH</span></p>
                <a href="#" class="ba7-btn ba7-btn-green ba7-mresult-btn arcticmodal-close"><span>ПРодолжить</span></a>
            </div>
        </div>

        <div class="ba7-modal ba7-modal-result ba7-modal-win" id="ba7-modal-win">
            <div class="ba7-modal-logo">
                <img src="img/7_before_after/logo_en.png" alt="">
            </div>
            <div class="arcticmodal-close ba7-modal-close"></div>
            <div class="ba7-modal-in ba7-win-body">
                <div class="ba7-mresult-title ba7-mresult-title--win">ПОБЕДА!</div>
                <div class="ba7-mresult">ВЫ ВЫИГРАЛИ!</div>
                <p class="ba7-mresult-text">11.5<span> UAH</span></p>
                <a href="#" class="ba7-btn ba7-btn-green ba7-mresult-btn arcticmodal-close"><span>ПРодолжить</span></a>
            </div>
        </div>

        <div class="ba7-modal ba7-modal-result ba7-modal-lose" id="ba7-modal-lose">
            <div class="ba7-modal-logo">
                <img src="img/7_before_after/logo_en.png" alt="">
            </div>
            <div class="arcticmodal-close ba7-modal-close"></div>
            <div class="ba7-modal-in ba7-lose-body">
                <div class="ba7-mresult-title ba7-mresult-title--lose">ПОРАЖЕНИЕ!</div>
                <p class="ba7-mresult-text ba7-lose-text">Попробуйте сыграть еще раз!</p>
                <a href="#" class="ba7-btn ba7-btn-green ba7-mresult-btn arcticmodal-close"><span>Продолжить</span></a>
            </div>
        </div>

        <div class="ba7-modal ba7-modal-big ba7-modal-rules" id="ba7-modal-rules">
            <div class="arcticmodal-close ba7-modal-close"></div>
            <div class="ba7-rules-body ba7-scroll">
                <h3>ПРАВИЛА ИГРЫ</h3>
                <ul>
                    <li>В начале игры выберите один из вариантов:
                        <ul>
                            <li>от 8 до 12 (Над)</li>
                            <li>7</li>
                            <li>от 2 до 6 (Под)</li>
                        </ul>
                    </li>
                    <li>Теперь сделайте ставку. Размер начальной ставки определяется до начала игры.</li>
                    <li>Максимальная сумма ставки составляет 9852.53 UAH, минимальная - 5 UAH.</li>
                    <li>Если сумма чисел на кубиках соответствует Над или Под, ставка увеличивается в 2.3 раза. Если вы выбрали 7, и выпало 7, то ставка увеличивается в 5.8 раз.</li>
                </ul>
                <h4>Сыграйте в эту простую игру, где шансы на успех измеряются исключительно вашим везением!</h4>
                <p>С момента окончания игры все претензии принимаются в течение трех суток.</p>
            </div>
            <div class="ba7-scrollbar-ends--top"></div>
            <div class="ba7-scrollbar-ends--bottom"></div>
        </div>
    </div>
</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
<script type="text/javascript" src="../libs/chosen.js"></script>
<script type="text/javascript" src="../libs/perfect-scrollbar.jquery.min.js"></script>
<script src="../public/xbet/js/jquery.textfill.js"></script>
<script type="text/javascript" src="js/7_before_after.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // Modal
        var hash = location.search.replace(/\?/,'');
        $('#ba7-modal-'+hash).arcticmodal({
            beforeOpen: function(data, el) {
                setTimeout(function() {
                    $(el).addClass('ba7-open');
                }, 300);
            },
            afterOpen: function(data, el) {
                var scroll = $(el).find('.ba7-scroll');
                if(scroll.length) scroll.perfectScrollbar('update');
            },
            beforeClose: function(data, el) {
                $(el).removeClass('ba7-open');
            }
        });
    });
</script>
<?php include('../assets/footer-new.php'); ?>
