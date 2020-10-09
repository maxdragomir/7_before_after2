<?php include('../assets/header16april2020.php'); ?>
<link rel="stylesheet" href="../public/xbet/css/jackpot-games.css?2225">
<link rel="stylesheet" href="css/app.css" id="ltrToRtl">

    <div class="ba7-page" :class="{ 'js-start-animation': load, 'is-clickable' : clickable}">
        <div class="ba7-btns-wrap" style="position: fixed; left: 0; bottom: 100px; z-index: 100; font-size: 20px;">
            <button class="ex-btn" type="button" @click="$modal.show('modal-rules')" style="font-family: 'Roboto Condensed', sans-serif; text-transform: uppercase; cursor: pointer; display: block; border: none; padding: 8px 10px 6px; margin: 10px 0; font-weight: 700; color: #fff; background: #98c50e;">
                <span class="ex-btn__text">rules</span>
            </button>
            <button class="ex-btn" type="button" @click="$modal.show('modal-win')" style="font-family: 'Roboto Condensed', sans-serif; text-transform: uppercase; cursor: pointer; display: block; border: none; padding: 8px 10px 6px; margin: 10px 0; font-weight: 700; color: #fff; background: #98c50e;">
                <span class="ex-btn__text">win</span>
            </button>
            <button class="ex-btn" type="button" @click="$modal.show('modal-lose')" style="font-family: 'Roboto Condensed', sans-serif; text-transform: uppercase; cursor: pointer; display: block; border: none; padding: 8px 10px 6px; margin: 10px 0; font-weight: 700; color: #fff; background: #98c50e;">
                <span class="ex-btn__text">lose</span>
            </button>
        </div>

        <div class="ba7-wrap" data-status="static" >
            <ul class="ba7-bread">
                <li class="ba7-bread__item ba7-bread__item--active"><a class="ba7-bread__link" href="/">Главная</a></li>
                <li class="ba7-bread__item ba7-bread__item--active"><a class="ba7-bread__link" href="/">1XGAMES</a></li>
                <li class="ba7-bread__item">"ПОД 7 НАД"</li>
            </ul>
            <div class="ba7-decor ba7-decor--cross-light1">
                <img src="img/7_before_after/dark-cross.png" class="ba7-decor__img ba7-decor__img--cross-light1" alt="">
            </div>
            <div class="ba7-decor ba7-decor--cross-light2">
                <img src="img/7_before_after/light-cross.png" class="ba7-decor__img ba7-decor__img--cross-light2" alt="">
            </div>
            <div class="ba7-decor ba7-decor--cross-dark">
                <img src="img/7_before_after/big-cross.png" class="ba7-decor__img ba7-decor__cross--dark" alt="">
            </div>
            <div class="ba7-decor ba7-decor--dice1">
                <img src="img/7_before_after/dice1.png" class="ba7-decor__img" alt="">
            </div>
            <div class="ba7-decor ba7-decor--dice2">
                <img src="img/7_before_after/dice2.png" class="ba7-decor__img" alt="">
            </div>
            <div class="ba7-decor ba7-decor--dice3">
                <img src="img/7_before_after/dice3.png" class="ba7-decor__img" alt="">
            </div>
            <div class="ba7-decor ba7-decor--dice4">
                <img src="img/7_before_after/dice4.png" class="ba7-decor__img" alt="">
            </div>

            <div id="jackpot_container" class="jackpot__wrap"><div class="jackpot"><div class="jackpot__header"><div class="jackpot__coins"><div class="jackpot__coin jackpot__coin-one"></div> <div class="jackpot__coin jackpot__coin-two"></div> <div class="jackpot__coin jackpot__coin-three"></div> <div class="jackpot__coin jackpot__coin-four"></div> <div class="jackpot__coin jackpot__coin-five"></div> <div class="jackpot__coin jackpot__coin-six"></div> <div class="jackpot__coin jackpot__coin-seven"></div> <div class="jackpot__coin jackpot__coin-eight"></div> <div class="jackpot__coin jackpot__coin-nine"></div> <div class="jackpot__coin jackpot__coin-ten"></div></div> <div class="jackpot__glares"><div class="jackpot__glare"></div></div></div> <div class="jackpot__content"><div class="jackpot__body"><div class="jackpot__body-glare"></div> <ol class="jackpot-options__list"><li class="jackpot-options__item"><span class="jackpot-options__name">Часовий</span> <ul class="jackpot-options__scoreboard scoreboard__list"><li class="jackpot-scoreboard__item"><div data-num="9" class="jackpot-current__num"></div></li><li class="jackpot-scoreboard__item"><div data-num="8" class="jackpot-current__num"></div></li><li class="jackpot-scoreboard__item"><div data-num="1" class="jackpot-current__num"></div></li><li class="jackpot-scoreboard__item"><div data-num="7" class="jackpot-current__num"></div></li></ul></li> <li class="jackpot-options__item"><span class="jackpot-options__name">Денний</span> <ol class="jackpot-options__scoreboard scoreboard__list"><li class="jackpot-scoreboard__item"><div data-num="1" class="jackpot-current__num"></div></li><li class="jackpot-scoreboard__item"><div data-num="5" class="jackpot-current__num"></div></li><li class="jackpot-scoreboard__item"><div data-num="4" class="jackpot-current__num"></div></li><li class="jackpot-scoreboard__item"><div data-num="2" class="jackpot-current__num"></div></li><li class="jackpot-scoreboard__item"><div data-num="5" class="jackpot-current__num"></div></li><li class="jackpot-scoreboard__item"><div data-num="4" class="jackpot-current__num"></div></li></ol></li> <li class="jackpot-options__item"><span class="jackpot-options__name">Тижневий</span> <ol class="jackpot-options__scoreboard scoreboard__list"><li class="jackpot-scoreboard__item"><div data-num="1" class="jackpot-current__num"></div></li><li class="jackpot-scoreboard__item"><div data-num="0" class="jackpot-current__num"></div></li><li class="jackpot-scoreboard__item"><div data-num="7" class="jackpot-current__num"></div></li><li class="jackpot-scoreboard__item"><div data-num="9" class="jackpot-current__num"></div></li><li class="jackpot-scoreboard__item"><div data-num="1" class="jackpot-current__num"></div></li><li class="jackpot-scoreboard__item"><div data-num="3" class="jackpot-current__num"></div></li><li class="jackpot-scoreboard__item"><div data-num="9" class="jackpot-current__num"></div></li></ol></li> <li class="jackpot-options__item"><span class="jackpot-options__name">Місячний</span> <ol class="jackpot-options__scoreboard scoreboard__list"><li class="jackpot-scoreboard__item"><div data-num="5" class="jackpot-current__num"></div></li><li class="jackpot-scoreboard__item"><div data-num="5" class="jackpot-current__num"></div></li><li class="jackpot-scoreboard__item"><div data-num="8" class="jackpot-current__num"></div></li><li class="jackpot-scoreboard__item"><div data-num="9" class="jackpot-current__num"></div></li><li class="jackpot-scoreboard__item"><div data-num="5" class="jackpot-current__num"></div></li><li class="jackpot-scoreboard__item"><div data-num="5" class="jackpot-current__num"></div></li><li class="jackpot-scoreboard__item"><div data-num="2" class="jackpot-current__num"></div></li></ol></li></ol> <a href="javascript:void(0)" class="jackpot__rules-btn">Правила </a></div> <div class="jackpot__footer">
                            UAH
                        </div></div></div></div>

            <div class="ba7-container">
                <div class="ba7-head">
                    <div class="ba7-logo">
                        <img src="img/7_before_after/logo.png" class="ba7-logo__img" alt="">
                        <div class="ba7-logo__bg">
                            <img src="img/7_before_after/logo-bg.png" class="ba7-logo__bg-img" alt="">
                        </div>
                        <img src="img/7_before_after/logo-dust.png" class="ba7-logo__dust" alt="">
                    </div>
                    <a href="/" class="ba7-rules-show ba7-modal-show ba7-rules" @click="$modal.show('modal-rules')">Правила</a>
                </div>

                <div class="ba7-screen">
                    <div class="ba7-screen__in">
                        <div class="ba7-container-move ba7-container-move--left">
                            <div class="ba7-dice-container ba7-dice-container--left">
                                <div class="ba7-dice">
                                    <div class="ba7-dice__sprite ba7-dice__sprite--one ba7-dice__sprite--hold" :data-dice="0"><span class="ba7-dice__img ba7-dice__img--one"></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="ba7-container-move ba7-container-move--right">
                            <div class="ba7-dice-container ba7-dice-container--right">
                                <div class="ba7-dice">
                                    <div class="ba7-dice__sprite ba7-dice__sprite--two ba7-dice__sprite--hold" :data-dice="0"><span class="ba7-dice__img ba7-dice__img--two"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ba7-footer">
                    <div class="ba7-bet-radio">
                          <div class="ba7-bet-container ba7-bet-container--before">
                              <div class="ba7-bet-x" :class="{ 'js-active-radio': activeRadio === 3, 'is-disabled': disabled }">
                                  <label class="ba7-radio-container" @click.prevent="activeRadio = 3">
                                      <div class="ba7-radio__coef">
                                          <span class="ba7-radio__value ba7-radio__value--x" data-value="x">x</span>
                                          <span class="ba7-radio__value" data-value="2.3">2.3</span>
                                      </div>
                                      <input type="radio" name="ba7-radio" class="ba7-radio__inp" value="3">
                                      <span class="ba7-radio__btn"></span>
                                  </label>
                              </div>
                              <div class="ba7-bet-var__container">
                                  <span class="ba7-textfill-container">
                                      <span class="ba7-bet-var" data-value="над">над</span>
                                      <span class="ba7-numbers">8 9 10 11 12</span>
                                  </span>
                              </div>
                          </div>
                          <div class="ba7-bet-container ba7-bet-container--equal">
                              <div class="ba7-bet-x" :class="{ 'js-active-radio': activeRadio === 2, 'is-disabled': disabled }">
                                  <label class="ba7-radio-container" @click.prevent="activeRadio = 2">
                                      <div class="ba7-radio__coef">
                                          <span class="ba7-radio__value ba7-radio__value--x" data-value="x">x</span>
                                          <span class="ba7-radio__value" data-value="5.8">5.8</span>
                                      </div>
                                      <input type="radio" name="ba7-radio" class="ba7-radio__inp" value="2">
                                      <span class="ba7-radio__btn"></span>
                                  </label>
                              </div>
                              <div class="ba7-bet-var__container">
                                  <span class="ba7-textfill-container">
                                      <span class="ba7-bet-var" data-value="ровно">ровно</span>
                                      <span class="ba7-numbers">7</span>
                                  </span>
                              </div>
                          </div>
                          <div class="ba7-bet-container ba7-bet-container--after">
                              <div class="ba7-bet-x" :class="{ 'js-active-radio': activeRadio === 1, 'is-disabled': disabled }">
                                  <label class="ba7-radio-container" @click.prevent="activeRadio = 1">
                                      <div class="ba7-radio__coef">
                                          <span class="ba7-radio__value ba7-radio__value--x" data-value="x">x</span>
                                          <span class="ba7-radio__value" data-value="2.3">2.3</span>
                                      </div>
                                      <input type="radio"  name="ba7-radio" class="ba7-radio__inp" value="1">
                                      <span class="ba7-radio__btn"></span>
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
                            <div class="ba7-btns-val" :class="{ 'is-disabled': disabled }">
                                <button class="ba7-btn-val" v-for="val in bet.bets" :key="val" @click="addUserVal(val)"><span>{{val}}</span></button>
                            </div>
                        </div>
                        <div class="ba7-bet-bottom">
                            <div class="ba7-bet-body">
                                <div class="ba7-bet-sum" :class="{ 'is-disabled': disabled }">
                                    <div class="ba7-select-wrap">
                                        <template>
                                            <multiselect
                                                    v-model="select.value"
                                                    :searchable="false"
                                                    open-direction="below"
                                                    :hide-selected="true"
                                                    select-label= ''
                                                    :allow-empty="false"
                                                    :options="select.options">
                                            </multiselect>
                                        </template>
                                    </div>
                                    <div class="ba7-input-container">
                                        <input class="ba7-bet-inp" type="text" v-model.number="bet.user"/>
                                    </div>
                                    <div class="ba7-btn-reset-container">
                                        <button class="ba7-bet-res" @click="resetVal"></button>
                                    </div>
                                </div>
                            </div>
                            <div class="ba7-bet-btn-container" @click="startGame" :class="{ 'is-disabled': disabled }">
                                <button class="ba7-btn-start"><span>Сделать ставку</span></button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <modal name="modal-win"
               @before-open="beforeOpen"
               @before-close="beforeClose"
               @opened="opened"
               @closed="closed">
            <div class="ba7-modal ba7-modal-result ba7-modal-win" id="ba7-modal-win">
                <div class="ba7-modal-close" @click="$modal.hide('modal-win')"></div>
                <div class="ba7-modal-logo">
                    <img src="img/7_before_after/logo.png" alt="">
                </div>
                <div class="ba7-modal-in ba7-win-body">
                    <div class="ba7-mresult-title ba7-mresult-title--win">ПОБЕДА!</div>
                    <div class="ba7-mresult">ВЫ ВЫИГРАЛИ!</div>
                    <p class="ba7-mresult-text"><span>{{result}}</span><span> UAH</span></p>
                    <a href="#" class="ba7-btn ba7-btn-green ba7-mresult-btn" @click="$modal.hide('modal-win')"><span>ПРодолжить</span></a>
                </div>
            </div>
        </modal>

        <modal name="modal-lose"
               @before-open="beforeOpen"
               @before-close="beforeClose"
               @opened="opened"
               @closed="closed">
            <div class="ba7-modal ba7-modal-result ba7-modal-lose" id="ba7-modal-lose">
                <div class="ba7-modal-close" @click="$modal.hide('modal-lose')"></div>
                <div class="ba7-modal-logo">
                    <img src="img/7_before_after/logo.png" alt="">
                </div>
                <div class="ba7-modal-in ba7-lose-body">
                    <div class="ba7-mresult-title ba7-mresult-title--lose">ПОРАЖЕНИЕ!</div>
                    <p class="ba7-mresult-text ba7-lose-text">Попробуйте сыграть еще раз!</p>
                    <a href="#" class="ba7-btn ba7-btn-green ba7-mresult-btn"  @click="$modal.hide('modal-lose')"><span>Продолжить</span></a>
                </div>
            </div>
        </modal>

        <modal name="modal-rules"
               @before-open="beforeOpen"
               @before-close="beforeClose"
               @opened="opened"
               @closed="closed">
            <div class="ba7-modal ba7-modal-big ba7-modal-rules" id="ba7-modal-rules">
                <div class="ba7-modal-close"  @click="$modal.hide('modal-rules')"></div>
                <div class="ba7-rules-body">
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
            </div>
        </modal>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
<script type="text/javascript" src="js/vue.js"></script>
<script src="js/vue-modal.js" type="text/javascript"></script>
<script type="text/javascript" src="js/vue-multiselect.js"></script>
<!--<script src="https://unpkg.com/vue-resize-text"></script>-->
<!--<script src="../public/xbet/js/jquery.textfill.js"></script>-->
<script type="text/javascript" src="js/7_before_after.js"></script>
<?php include('../assets/footer16april2020.php'); ?>
