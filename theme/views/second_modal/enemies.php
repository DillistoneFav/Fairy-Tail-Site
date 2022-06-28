
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="/static/css/index.css">
	<link rel="stylesheet" href="/static/css/lang.css">
	<link rel="stylesheet" href="/static/css/en/index.css">
	<link rel="stylesheet" type="text/css" href="/static/css/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="/static/css/slick.css">
	<link rel="stylesheet" href="/static/css/modal-animation.css"></head>
<body id="en">

<div id="battle">
	<div class="modal-pre">
		<div class="pre-head"></div>
		<div class="pre-border">
			<div class="pre-inner">
				<h1 class="modal-animation">There are different types of enemies...<br><span>But all of them will be defeated!</span></h1>
				<div class="pre-body modal-animation">
					<div class="slide-area first">
						<div class="slide-border top">
							<img src="/static/img/common/slide_border.png">
						</div>
						<ul class="battle_slider">
							<li>
								<h2 class="caption-title">Zeref, dark magic king<br>The head of antagonists</h2>
								<img src="/static/img/stuff/angry-zeref.png" alt="image01">
							</li>
						</ul>
						<div class="slide-border bottom">
							<img src="/static/img/common/slide_border_bottom.png">
						</div>
						<div class="slide-pick">
							<img src="/static/img/common/battle_modal_frame.png" alt="">
						</div>
					</div>
					<div class="slide-area second">
						<div class="slide-border top">
							<img src="/static/img/common/slide_border.png">
						</div>
						<ul class="battle_slider">
							<li>
								<h2 class="caption-title">The king of dragons, Acnologia!</h2>
								<img src="/static/img/stuff/angry-acnologia.png" alt="image01">
							</li>
						</ul>
						<div class="slide-border bottom">
							<img src="/static/img/common/slide_border_bottom.png">
						</div>
						<div class="slide-pick second">
							<img src="/static/img/common/battle_modal_frame.png" alt="">
						</div>
					</div>
					<div class="slide-area third">
						<div class="slide-border top">
							<img src="/static/img/common/slide_border.png">
						</div>
						<ul class="battle_slider slide">
							<li>
								<h2 class="caption-title">Spriggan 12, the strongest Wizards in Fiore!</h2>
								<img src="/static/img/stuff/spriggan-12.png" alt="image01">
							</li>
							<li>
								<h2 class="caption-title">Oración Seis, dark guild association</h2>
								<img src="/static/img/stuff/Oración Seis.jpg.opdownload" alt="image01">
							</li>
							<li>
								<h2 class="caption-title">Grimoire Heart, dark guild association</h2>
								<img src="/static/img/stuff/Grimoire Heart.jpg" alt="image01">
							</li>
							<li>
								<h2 class="caption-title">Tartaros, dark guild association</h2>
								<img src="/static/img/stuff/Tartaros.jpg" alt="image01">
							</li>
						</ul>
						<div class="slide-border bottom third">
							<img src="/static/img/common/slide_border_bottom.png">
						</div>
						<div class="slide-pick third">
							<img src="/static/img/common/battle_modal_frame.png" alt="">
						</div>
					</div>
					<div class="slide-area fource">
						<div class="slide-border top">
							<img src="/static/img/common/slide_border.png">
						</div>
						<ul class="battle_slider slide">
							<li>
								<h2 class="caption-title">Upcoming: Magia Dragon wizards guild</span></h2>
								<img src="/static/img/stuff/Magia Dragon.webp" alt="image01">
							</li>
							<li>
								<h2 class="caption-title second">Upcoming: Diabolos wizards guild</span></h2>
								<img src="/static/img/stuff/diabolos.jpg" alt="image01">
							</li>
						</ul>
						<div class="slide-border bottom fource">
							<img src="/static/img/common/slide_border_bottom.png">
						</div>
						<div class="slide-pick fource">
							<img src="/static/img/common/battle_modal_frame.png" alt="">
						</div>
					</div>
					<div class="close">
						<a id="close">
							<p class="square"><img src="/static/img/common/pre_close.png" alt=""></p>
							<p class="txt">CLOSE</p>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="pre-foot"></div>
	</div>
</div>
<script src="/static/js/jquery-2.2.4.min.js"></script>
<script src="/static/js/slick.min.js"></script>
<script src="/static/js/modal.js"></script>
<script>
	$(function(){
		$('#close').click(function () {
			parent.$.fn.colorbox.close(); return false;
		});
	})
</script>
<script>
	$(function() {
		$('.slide').slick({
			prevArrow: '<img src="/static/img/common/modal_prev.png" class="slide-arrow prev-arrow">',
			nextArrow: '<img src="/static/img/common/modal_next.png" class="slide-arrow next-arrow">',
			arrows: true,
			dots: true,
			fade: true,
			autoplay: false
		});
	});
</script>
</body>