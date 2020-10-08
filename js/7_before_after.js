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
    select: {
      value: 'Основной',
      options: ['Основной', 'Бонусный 1xGames']
    },
    bet: {
      min: 50,
      cur: 50,
      quickSums: [50, 100, 500, 1000, 5000, 10000]
    }
  },
  methods: {
    beforeOpen: function beforeOpen() {
      body.classList.add('no-scroll');
    },
    opened: function opened() {
    },
    closed: function closed() {
    },
    beforeClose: function beforeClose() {
      body.classList.remove('no-scroll');
    }
  },
  mounted: function mounted() {
    if (hash === "righttoleft") {
      ltrToRtl.href = "css/main_rtl.css";
      body.classList.add("righttoleft");
    } else if (isNaN(hash) && hash.length > 0) {
      this.$modal.show("modal-" + hash);
    }
  }
});

$(document).ready(function() {
  $('.ba7-page').addClass('start-animation');


  $('.ba7-radio-container').on('click', function () {
    $('.ba7-bet-x').removeClass('active-radio');
    $(this).closest('.ba7-bet-x').addClass('active-radio');
  });
  // Modal
  // var hash = location.search.replace(/\?/,'');

  // Select
  // var $select = $('.ba7-select-wrap select');
  //
  // $select.chosen({
  //   width: '100%'
	// });

  // Scroll
  // $('.ba7-scroll').perfectScrollbar({
  //   maxScrollbarLength: 60,
  //   scrollYMarginOffset: 10
  // });


  // Modal
  // var $modalShow = $('.ba7-modal-show');
  //
  // $modalShow.on('click', function(e) {
  //   e.preventDefault();
  //   var $this = $(this),
  //       modalOpen = $this.data('modal');
  //
  //   $(modalOpen).arcticmodal({
  //     beforeOpen: function(data, el) {
  //       setTimeout(function() {
  //         $(el).addClass('ba7-open');
  //       }, 300);
  //     },
  //     afterOpen: function(data, el) {
  //       var scroll = $(el).find('.ba7-scroll');
  //       if(scroll.length) scroll.perfectScrollbar('update');
  //     },
  //     beforeClose: function(data, el) {
  //       $(el).removeClass('ba7-open');
  //     }
  //   });
  // });

  var $wrap = $('.ba7-wrap'),
      o = {
        wrap: $wrap,
        bets: {
          wrap: $wrap.find('.ba7-bet'),
          inp: $wrap.find('.ba7-bet-inp'),
          val: $wrap.find('.ba7-btn-val'),
          res: $wrap.find('.ba7-bet-res')
        },
        dice: {
          diceSprite: $wrap.find('.ba7-dice__sprite'),
          diceOne: $wrap.find('.ba7-dice__sprite--one'),
          diceTwo: $wrap.find('.ba7-dice__sprite--two'),
          diceImg: $wrap.find('.ba7-dice__img')
        },
        label: $wrap.find('.ba7-bet-x'),
        start: $wrap.find('.ba7-btn-start')
      };

  o.bets.val.on('click', function() {
    var val = $(this).data('val'),
        sum = Number(o.bets.inp.val()) + Number(val);
    o.bets.inp.val(sum);
  });

  o.bets.res.on('click', function() {
    o.bets.inp.val(0);
  });

  o.start.on('click', function() {
    var radioVal = $('[name="ba7-radio"]:checked').val(),
        inputVal = o.bets.inp.val();

    if(radioVal === undefined) {
      errorAnimation($('.ba7-radio-container'));
      return;
    }
    if(inputVal === '') {
      errorAnimation($('.ba7-bet-head'));
      return;
    } else if (inputVal === '0'){
      errorAnimation($('.ba7-bet-head'));
      return;
    } else if ( Number(inputVal) < 10 ) {
      errorAnimation($('.ba7-bet-head'));
      return;
    }

    if(o.dice.diceOne.data('dice') === 0 && o.dice.diceTwo.data('dice') === 0) {
      o.dice.diceOne.data('dice', 1).attr('data-dice', 1);
      o.dice.diceTwo.data('dice', 1).attr('data-dice', 1);
    }

    game();
  });

  var i = 0;
  function fixAnim() {
    setTimeout(function () {
      o.dice.diceOne.data('dice', i).attr('data-dice', i);

      var tl = new TimelineMax();
      tl.to(o.dice.diceImg,.1,{y:-7500,ease:SteppedEase.config(25)})
          .to(o.dice.diceImg,.1,{y:0,ease:SteppedEase.config(25)});

      i++;
      if (i < 8) {
        fixAnim();
      } else {
        i = 0;
        o.dice.diceOne.data('dice', i).attr('data-dice', i);
      }

    }, 100)

  }
  fixAnim();

  setTimeout(function () {
    var tl2 = new TimelineMax();
    tl2.fromTo(o.dice.diceImg,1.5,{y: 0,ease: SteppedEase.config(49)}, {y: -14700,ease: SteppedEase.config(49), repeat: -1, yoyo: true});
    $('.ba7-page').addClass('canClick');
  }, 5000);

  function game() {
    var radioVal = $('[name="ba7-radio"]:checked').val(),
        inputVal = o.bets.inp.val(),
        diceFirstNumber,
        diceSecondNumber;

    o.start.prop('disabled', true).attr('disabled', true);
    o.label.prop('disabled', true).attr('disabled', true);

    var tl1 = new TimelineMax();
    tl1.set(o.dice.diceImg,{y:0})
        .to(o.dice.diceImg,.5,{y:-7500,ease:SteppedEase.config(25)})
        .to(o.dice.diceImg,.5,{y:0,ease:SteppedEase.config(25)});

    diceFirstNumber = getRandom(1, 6);
    diceSecondNumber = getRandom(1, 6);
    var diceCountNumber = diceFirstNumber + diceSecondNumber;

    function diceNumbers() {
      o.dice.diceOne.data('dice', diceFirstNumber).attr('data-dice', diceFirstNumber);
      o.dice.diceTwo.data('dice', diceSecondNumber).attr('data-dice', diceSecondNumber);
    }
    function diceModal(id, multiplier) {
      id.arcticmodal({
        beforeOpen: function(data, el) {
          var result = inputVal * multiplier;
          $('#ba7-winResult').text(result.toFixed(2));
          setTimeout(function() {
            $(el).addClass('ba7-open');
          }, 300);
        },
        afterClose: function(data, el) {
          o.start.prop('disabled', false).attr('disabled', false);
          o.label.prop('disabled', false).attr('disabled', false);
        },
        beforeClose: function(data, el) {
          $(el).removeClass('ba7-open');
        }
      });
    }

    if(diceCountNumber > 7 && radioVal === '3') {
      setTimeout(diceNumbers, 500);
      setTimeout(function (){
        diceModal($('#ba7-modal-win-generate'), 2.3);
      }, 1500);
    } else if (diceCountNumber === 7 && radioVal === '2') {
      setTimeout(diceNumbers, 500);
      setTimeout(function (){
        diceModal($('#ba7-modal-win-generate'), 5.8);
      }, 1500);
    } else if (diceCountNumber < 7 && radioVal === '1') {
      setTimeout(diceNumbers, 500);
      setTimeout(function (){
        diceModal($('#ba7-modal-win-generate'), 2.3);
      }, 1500);
    } else {
      setTimeout(diceNumbers, 500);
      setTimeout(function (){
        diceModal($('#ba7-modal-lose'));
      }, 1500);
    }
  }

});
function errorAnimation(element) {
  TweenLite.fromTo(element, 0.8, {x:-1}, {x:1, ease:RoughEase.ease.config({strength:8, points:20, template:Linear.easeNone, randomize:false}), clearProps:"x"})
}

function getRandom(min, max) {
  min = Math.ceil(min);
  max = Math.floor(max);
  return Math.floor(Math.random() * (max - min + 1)) + min;
}










