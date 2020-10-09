"use strict";

var hash = location.search.replace(/\?/, ''),
    body = document.querySelector('body');
var ltrToRtl = document.getElementById('ltrToRtl');
Vue.use(window["vue-js-modal"].default, {
  dialog: true,
  dynamic: true,
  injectModalsContainer: true
});
var app = new Vue({
  el: '.ba7-page',
  components: {
    Multiselect: window.VueMultiselect.default
  },
  data: {
    load: false,
    clickable: false,
    activeRadio: undefined,
    diceFirst: 0,
    diceSecond: 0,
    fixIteration: 0,
    disabled: false,
    result: 0,
    bet: {
      user: 0,
      bets: [10, 30, 100, 300, 1000, 3000, 9000]
    },
    select: {
      value: 'Основной',
      options: ['Основной', 'Бонусный 1xGames']
    }
  },
  methods: {
    // modals
    beforeOpen: function beforeOpen() {
      body.classList.add('no-scroll');
    },
    opened: function opened() {},
    closed: function closed() {
      this.disabled = false;
    },
    beforeClose: function beforeClose() {
      body.classList.remove('no-scroll');
    },

    // helpers
    getRandom(min, max) {
      min = Math.ceil(min);
      max = Math.floor(max);
      return Math.floor(Math.random() * (max - min + 1)) + min;
    },

    errorAnimation(element) {
      TweenLite.fromTo(element, 0.8, {
        x: -1
      }, {
        x: 1,
        ease: RoughEase.ease.config({
          strength: 8,
          points: 20,
          template: Linear.easeNone,
          randomize: false
        }),
        clearProps: "x"
      });
    },

    fixAnim() {
      let $diceFirst = this.$el.querySelector('.ba7-dice__sprite--one');

      if (this.fixIteration > 8) {
        this.fixIteration = 0;
        this.diceFirst = this.fixIteration;
        $diceFirst.dataset.dice = this.diceFirst;
        return;
      }

      setTimeout(() => {
        this.diceFirst = this.fixIteration;
        $diceFirst.dataset.dice = this.diceFirst;
        let tl = new TimelineMax();
        tl.to('.ba7-dice__img', .1, {
          y: -7500,
          ease: SteppedEase.config(25)
        }).to('.ba7-dice__img', .1, {
          y: 0,
          ease: SteppedEase.config(25)
        });
        this.fixIteration++;
        this.fixAnim();
      }, 100);
    },

    diceNumbers(diceFirst, diceSecond) {
      let $diceFirst = this.$el.querySelector('.ba7-dice__sprite--one'),
          $diceSecond = this.$el.querySelector('.ba7-dice__sprite--two');
      $diceFirst.dataset.dice = diceFirst;
      $diceSecond.dataset.dice = diceSecond;
    },

    diceModal(modal, coef) {
      this.$modal.show(modal);
      this.result = (this.bet.user * coef).toFixed(2);
    },

    // interface
    startGame() {
      let $radioContainer = this.$el.querySelector('.ba7-bet-radio'),
          $betHead = this.$el.querySelector('.ba7-bet-head');

      if (this.activeRadio === undefined) {
        this.errorAnimation($radioContainer);
        return;
      }

      if (this.bet.user === '') {
        this.errorAnimation($betHead);
        return;
      }

      if (this.bet.user < 10) {
        this.errorAnimation($betHead);
        return;
      }

      if (this.diceFirst === 0 && this.diceSecond === 0) {
        this.diceFirst = 1;
        this.diceSecond = 1;
        this.diceNumbers(this.diceFirst, this.diceSecond);
      }

      this.gamePlay();
    },

    addUserVal(val) {
      this.bet.user += val;
    },

    resetVal() {
      this.bet.user = 0;
    },

    // play
    gamePlay() {
      this.disabled = true;
      var tl1 = new TimelineMax();
      tl1.set('.ba7-dice__img', {
        y: 0
      }).to('.ba7-dice__img', .5, {
        y: -7500,
        ease: SteppedEase.config(25)
      }).to('.ba7-dice__img', .5, {
        y: 0,
        ease: SteppedEase.config(25)
      });
      this.diceFirst = this.getRandom(1, 6);
      this.diceSecond = this.getRandom(1, 6);
      let diceSum = this.diceFirst + this.diceSecond;

      if (diceSum > 7 && this.activeRadio === 3) {
        setTimeout(() => {
          this.diceNumbers(this.diceFirst, this.diceSecond);
        }, 500);
        setTimeout(() => {
          this.diceModal('modal-win', 2.3);
        }, 1500);
      } else if (diceSum === 7 && this.activeRadio === 2) {
        setTimeout(() => {
          this.diceNumbers(this.diceFirst, this.diceSecond);
        }, 500);
        setTimeout(() => {
          this.diceModal('modal-win', 5.8);
        }, 1500);
      } else if (diceSum < 7 && this.activeRadio === 1) {
        setTimeout(() => {
          this.diceNumbers(this.diceFirst, this.diceSecond);
        }, 500);
        setTimeout(() => {
          this.diceModal('modal-win', 2.3);
        }, 1500);
      } else {
        setTimeout(() => {
          this.diceNumbers(this.diceFirst, this.diceSecond);
        }, 500);
        setTimeout(() => {
          this.diceModal('modal-lose');
        }, 1500);
      }
    }

  },
  mounted: function mounted() {
    if (hash === "righttoleft") {
      ltrToRtl.href = "css/main_rtl.css";
      this.el.classList.add("righttoleft");
    } else if (isNaN(hash) && hash.length > 0) {
      this.$modal.show("modal-" + hash);
    }

    window.onload = () => {
      this.load = true;
      this.fixAnim();
      setTimeout(() => {
        this.clickable = true;
        let tl2 = new TimelineMax();
        tl2.fromTo('.ba7-dice__img', 1.5, {
          y: 0,
          ease: SteppedEase.config(49)
        }, {
          y: -14700,
          ease: SteppedEase.config(49),
          repeat: -1,
          yoyo: true
        });
      }, 5000);
    };
  }
});