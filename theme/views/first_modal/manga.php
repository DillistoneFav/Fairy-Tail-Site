<!DOCTYPE html>
<html lang="ja">
<?php require_once(ROOT."/theme/views/blocks/head.php")?>
  <body id="en">
    <noscript
      ><iframe
        src="https://www.googletagmanager.com/ns.html?id=GTM-TW3DK5K"
        height="0"
        width="0"
        style="display: none; visibility: hidden"
      ></iframe
    ></noscript>
    <noscript
      ><iframe
        src="https://www.googletagmanager.com/ns.html?id=GTM-5DLX7XH"
        height="0"
        width="0"
        style="display: none; visibility: hidden"
      ></iframe
    ></noscript>

    <div id="story">
      <div class="modal-pre">
        <div class="pre-head"></div>
        <div class="pre-border">
          <div class="pre-inner">
            <h1 class="modal-animation">
              Do fairies really have tails? Do they even exist... Like them,<br />
              this place as an eternal mystery... A never ending adventure
            </h1>
            <div class="title modal-animation">
              <h2>
                Fairy Tail is the strongest guild in the Kingdom of Fiore!<br /><span
                  >It was founded by Mavis Vermilion</span
                >
              </h2>
            </div>
            <div class="pre-body modal-animation">
              <div class="slide-area first">
                <div class="slide-border top">
                  <img src="/static/img/common/slide_border.png" />
                </div>
                <ul class="battle_slider slide">
                  <li>
                    <img src="/static/img/stuff/mavis.jpg" alt="image01" />
                  </li>
                  <li>
                    <img src="/static/img/stuff/mavis3.jpg" alt="image01" />
                  </li>
                  <li>
                    <img src="/static/img/stuff/mavis6.jpg" alt="image01" />
                  </li>
                  <li>
                    <img src="/static/img/stuff/mavis5.jpg" alt="image01" />
                  </li>
                </ul>
                <div class="slide-border bottom third">
                  <img src="/static/img/common/slide_border_bottom.png" />
                </div>
                <div class="slide-pick third">
                  <img
                    src="/static/img/common/battle_modal_frame.png"
                    alt=""
                  />
                </div>
              </div>
              <h1 class="sub modal-animation">
                Mavis Varmilion, the founder of Fairy Tail Guild<br />
                Illusions master, truly creation of goodness
              </h1>
              <div class="original-chara">
                <div class="idis">
                  <img src="/static/img/stuff/big_mavis.png" />
                </div>
                <div class="line-top">
                  <img src="/static/img/common/slide_border.png" />
                </div>
                <div class="line-bottom">
                  <img src="/static/img/common/slide_border_bottom.png" />
                </div>
                <div class="chara-inner">
                  <div class="chara-detail">
                    <div class="first">
                      <p><span>Weapon: Magic</span></p>
                    </div>
                    <div class="second">
                      <p>
                        <span>Perfect Magic Control: Illisions</span>
                      </p>
                    </div>
                    <div class="third">
                      <p>
                        <span
                          >Her illusions are so detailed that they appear to be
                          truly life-like,
                        </span>
                      </p>
                    </div>
                    <div class="fource">
                      <p>
                        <span
                          >and Mavis has used them on occasion to intimidate
                          people,</span
                        >
                      </p>
                    </div>
                    <div class="five">
                      <p>
                        <span
                          >such as by creating fearsome beasts that look
                          deadly</span
                        >
                      </p>
                    </div>
                    <div class="first">
                      <p>
                        <span>and summoning an army of knights.</span>
                      </p>
                    </div>
                  </div>

                  <div class="detail-box">
                    <p>
                      Mavis is kind and protective of Fairy Tail. She cares,
                      guides and protects the guild whenever it's possible.<br />
                      She seems to be quite cheerful as she's smiling and happy
                      most of the time.
                    </p>
                    <p class="middle">
                      Mavis can also be quite carefree and reckless, and this
                      side of her is shown when she allowed Jellal Fernandes to
                      participate in the Grand Magic Games as a part of Team
                      Fairy Tail B, as long as it improved their chances of
                      winning, despite the fact that if anyone found out about
                      the ex-member of the Ten Wizard Saints and escaped
                      convict, it could be disastrous to the guild.
                    </p>
                    <p>
                      Another sign of her reckless nature is shown when she lent
                      Fairy Glitter to Cana Alberona just to win the MPF
                      event.<br />
                      She also seems to prefer going barefoot.
                    </p>
                  </div>
                </div>
              </div>
              <div class="close">
                <a id="close">
                  <p class="square">
                    <img src="/static/img/common/pre_close.png" alt="" />
                  </p>
                  <p class="txt">CLOSE</p>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="pre-foot"></div>
      </div>
    </div>
    <?php require_once(ROOT."/theme/views/blocks/scripts.php")?>
    <script src="../../assets/js/jquery-2.2.4.min.js"></script>
    <script src="../../assets/js/slick.min.js"></script>
    <script src="../../assets/js/modal.js"></script>
    <script>
      $(function () {
        $("#close").click(function () {
          parent.$.fn.colorbox.close();
          return false;
        });
      });
    </script>
    <script>
      $(function () {
        $(".slide").slick({
          prevArrow:
            '<img src="/static/img/common/modal_prev.png" class="slide-arrow prev-arrow">',
          nextArrow:
            '<img src="/static/img/common/modal_next.png" class="slide-arrow next-arrow">',
          arrows: true,
          dots: true,
          fade: true,
          autoplay: false,
        });
      });
    </script>
  </body>
</html>
