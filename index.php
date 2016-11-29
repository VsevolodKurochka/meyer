<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package meyer
 */

get_header(); ?>
	<header class="header has-slider" id="main">
		<div class="slider-wrapper">
			<div id="main-slider">	          
			  <div class="item"><img src="<?php echo get_template_directory_uri();?>/img/bg1.jpg" alt="Owl Image"></div>
			  <div class="item"><img src="<?php echo get_template_directory_uri();?>/img/bg2.jpg" alt="Owl Image"></div>
			  <div class="item"><img src="<?php echo get_template_directory_uri();?>/img/bg3.jpg" alt="Owl Image"></div>
			  <div class="item"><img src="<?php echo get_template_directory_uri();?>/img/bg4.jpg" alt="Owl Image"></div>
			  <div class="item"><img src="<?php echo get_template_directory_uri();?>/img/bg5.jpg" alt="Owl Image"></div>
			  <div class="item"><img src="<?php echo get_template_directory_uri();?>/img/bg6.jpg" alt="Owl Image"></div> 
			</div>
		</div>
		<div class="header-text text-center">
			<h1 class="h1"><?php pll_e('We design things with love and passion.'); ?></h1>
			<button class="vbtn vbtn-effect-shutter-vertical-out vbtn-corp" data-modal="vmodal" data-modal-target="#modalform"><?php pll_e('связаться с нами.'); ?></button>
		</div>
	</header>
	<section class="vsection big bg-grey" id="feature">
		<div class="number-wrap text-center number-big">
			<div class="number number-light">01</div>
		</div>
		<div class="vcontainer">
			<div class="vrow">
				<div class="cf text-center title-wrap">
					<h3 class="h3"><?php pll_e('Наша особенность'); ?></h3>
					<h4 class="title-page color-grey"><?php pll_e('Текст под нашей особенностью'); ?></h4>
				</div>
				<div class="cf color-grey">
					<div class="vcol-xs-12 vcol-sm-6 vcol-md-3 feature-wrap wow fadeInUp">
						<div class="feature line line-red">
							<div class="feature-header"><img src="<?php echo get_template_directory_uri();?>/img/feat1.png" alt=""></div>
							<div class="feature-body">
								<p><?php pll_e('С «душой» предоставляем услуги сопровождения инностанцев в Украине, как будто Вы приехали  к своему другу'); ?></p>
							</div>
						</div>
					</div>
					<div class="vcol-xs-12 vcol-sm-6 vcol-md-3 feature-wrap wow fadeInUp" data-wow-delay="0.2s">
						<div class="feature line line-green">
							<div class="feature-header"><img src="<?php echo get_template_directory_uri();?>/img/feat2.png" alt=""></div>
							<div class="feature-body">
								<p><?php pll_e('Помогаем разобраться в абсолютно всех  сложных документарных вопросах в Украине'); ?></p>
							</div>
						</div>
					</div>
					<div class="vcol-xs-12 vcol-sm-6 vcol-md-3 feature-wrap wow fadeInUp" data-wow-delay="0.3s">
						<div class="feature line line-purple">
							<div class="feature-header"><img src="<?php echo get_template_directory_uri();?>/img/feat3.png" alt=""></div>
							<div class="feature-body">
								<p><?php pll_e('Советуем только лучшее  в плане провождения досуга, выборе отеля делаем все «как для себя»'); ?></p>
							</div>
						</div>
					</div>
					<div class="vcol-xs-12 vcol-sm-6 vcol-md-3 feature-wrap wow fadeInUp" data-wow-delay="0.4s">
						<div class="feature line line-orange">
							<div class="feature-header"><img src="<?php echo get_template_directory_uri();?>/img/feat4.png" alt=""></div>
							<div class="feature-body">
								<p><?php pll_e('Весело, быстро и вовремя решаем все Ваши вопросы'); ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="vsection about ovh" id="about">
		<div class="vcontainer">
			<div class="vrow">
				<div class="vcol-xs-12 vcol-md-6 vcol-lg-5 about-image-wrap max-md-center wow slideInLeft">
					<div class="about-image">
						<img src="<?php echo get_template_directory_uri();?>/img/about.jpg" alt="">
					</div>
				</div>
				<div class="vcol-xs-12 vcol-md-6 vcol-lg-7 about-text-wrap wow slideInRight">
					<div class="about-text">
						<div class="number-wrap number-big">
							<div class="number number-dark">02</div>
						</div>
						<h3 class="h3"><?php pll_e('о компании'); ?></h3>
						<div class="color-grey">
							<p><?php pll_e('Привет, я Ирина Маер.'); ?></p>
    					<p><?php pll_e('10 лет назад я переехала жить в совершенно не знакомую для меня страну - Канаду! Замечательная страна, вот только я с личного опыта знаю, как трудно адаптироваться на новом месте, и как много вопросов возникают. К сожалению, большая остаются без ответа. Поскольку не знаешь к кому и куда можно обратится за помощью.'); ?></p>
							<p><?php pll_e('В какую бы страну Вы не поехали всегда будут сложности в первую очередь в непонимании менталитета, недостаточном знании языка, простых вопросов от выбора продуктов в магазине до сложности оформления детей в школу и т.д.') ?></p>
    					<p><?php pll_e('В этом году мы всей семьей вернулись в Украину (у меня англоязычные дети и муж Канадец) в мою любимую, но не очень простую в плане понимания менталитета страну тех кто здесь не родился или вырос.') ?></p>
    					<p><?php pll_e('При переезде я приняла для себя решение, помогать людям, которые оказываются в новом для себя мире без знания языка.Я очень социальный человек, мне доставляет истинное наслаждение общение. Я ценю и люблю своих друзей и они отвечают мне взаимностью. У меня большой круг знакомых и благодаря этому я могу решить любые вопросы.') ?></p>
							<p><?php pll_e('Вот несколько: поиск англоязычных экскурсий, англоязычные тв каналы, англоязычные школы, какие больницы работают с нашей страховой компанией и миллион других вопросов.') ?></p>
    					<p><?php pll_e('Мне, как коренной киевлянке, все эти вопросы удается решить очень быстро. Без меня моя англоязычная семья бы не справилась.') ?></p>
   						<p><?php pll_e('Приезжайте к нам в гости я вам покажу-как умеет принимать гостей Украина!') ?></p>
   						<p><?php pll_e('Мой профиль на: ') ?><span class="verdana-bold">facebook</span> -</p>
							<p><span class="verdana-bold">Linkedin</span> - </p>
						</div>
						<div class="line-wrapper-all">
							<div class="line line-red"></div>
							<div class="line line-green"></div>
							<div class="line line-purple"></div>
							<div class="line line-orange"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="vsection text-center clients" id="clients">
		<div class="vcontainer">
			<div class="vrow">
				<h3 class="h3 b-m"><?php pll_e('НАШИ КЛИЕНТЫ'); ?></h3>
				<div class="cf clients-wrapper">
					<div class="vcol-xs-12 vcol-sm-6 vcol-md-3 client-wrap wow fadeInUp">
						<div class="client-inner"><img src="<?php echo get_template_directory_uri();?>/img/client1.png" alt=""></div>
					</div>
					<div class="vcol-xs-12 vcol-sm-6 vcol-md-3 client-wrap wow fadeInUp" data-wow-delay="0.1s">
						<div class="client-inner"><img src="<?php echo get_template_directory_uri();?>/img/client2.png" alt=""></div>
					</div>
					<div class="vcol-xs-12 vcol-sm-6 vcol-md-3 client-wrap wow fadeInUp" data-wow-delay="0.2s">
						<div class="client-inner"><img src="<?php echo get_template_directory_uri();?>/img/client3.png" alt=""></div>
					</div>
					<div class="vcol-xs-12 vcol-sm-6 vcol-md-3 client-wrap wow fadeInUp" data-wow-delay="0.3s">
						<div class="client-inner"><img src="<?php echo get_template_directory_uri();?>/img/client4.png" alt=""></div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="vsection service-section big" id="services">
		<div class="number-wrap text-center number-big">
			<div class="number number-light">03</div>
		</div>
		<div class="vcontainer">
			<div class="cf">
				
				<div class="cf text-center title-wrap big">
					<h3 class="h3"><?php pll_e('УСЛУГИ') ?></h3>
					<h4 class="title-page color-grey"><?php pll_e('«Meyer international» не скучная кампания, я ваш « друг»  в Украине, который поможет, подскажет, подеиться советами и связями  в следующи вопросах:') ?></h4>
				</div>
				<div class="cf service-wrap">
					<div class="service-row">
						<div class="service-image"><img src="<?php echo get_template_directory_uri();?>/img/service1.png" alt=""></div>
						<div class="service-block line line-red wow fadeInUp" data-wow-delay="0.1s">
							<div class="service-number">
								<div class="service-number-inner">01</div>
							</div>
							<div class="service-text">
								<p class="service-title">Встреча в аеропорту </p>
								<ul class="service-list list list-circle">
									<li>Предоставление услуг переводчика  и водителя</li>
									<li>Трансфер как из аэропорта Киева (Борисполь, Жуляны), железнодорожного или автовокзала</li>
									<li>Предоставление номера телефона местной компании связи</li>										
								</ul>
								<button class="vbtn vbtn-effect-shutter-vertical-out vbtn-border service-btn" data-modal="vmodal" data-modal-target="#modalform">Подробнее</button>
							</div>
						</div>
					</div>
					<div class="service-row">
						<div class="service-image"><img src="<?php echo get_template_directory_uri();?>/img/service2.png" alt=""></div>
						<div class="service-block line line-green wow fadeInUp" data-wow-delay="0.2s">
							<div class="service-number">
								<div class="service-number-inner">02</div>
							</div>
							<div class="service-text">
								<p class="service-title">Поселение: </p>
								<p>Бронирование гостиниц, квартиры, апартаменто, домов, на длительный период и посуточно.</p>
								<button class="vbtn vbtn-effect-shutter-vertical-out vbtn-border service-btn" data-modal="vmodal" data-modal-target="#modalform">Подробнее</button>
							</div>
						</div>
					</div>
					<div class="service-row">
						<div class="service-image"><img src="<?php echo get_template_directory_uri();?>/img/service3.png" alt=""></div>
						<div class="service-block line line-purple wow fadeInUp" data-wow-delay="0.3s">
							<div class="service-number">
								<div class="service-number-inner">03</div>
							</div>
							<div class="service-text">
								<p class="service-title">Решение всех вопросов</p>
								<p>Я возьму на себя все сложности, связанные с получением вами желанного документа и по своим связям сделаю это очень быстро</p>
								<ul class="service-list list list-circle">
									<li>Получение вида на жительство</li>
									<li>Продления срока пребывания</li>
									<li>Разрещение на трудоустройства</li>
									<li>Оформление приглашений</li>
									<li>Помощь в решении всех документальных вопросов в Украине</li>
									<li>Помощь в поиске "правильных людей"</li>
								</ul>
								<button class="vbtn vbtn-effect-shutter-vertical-out vbtn-border service-btn" data-modal="vmodal" data-modal-target="#modalform">Подробнее</button>
							</div>
						</div>
					</div>
					<div class="service-row">
						<div class="service-image"><img src="<?php echo get_template_directory_uri();?>/img/service4.png" alt=""></div>
						<div class="service-block line line-orange wow fadeInUp" data-wow-delay="0.4s">
							<div class="service-number">
								<div class="service-number-inner">04</div>
							</div>
							<div class="service-text">
								<p class="service-title">Досуг</p>
								<p>Персональный асистент по решению всех вопросов, покупок и звонков в любых сферах.</p>
								<ul class="service-list list list-circle">
									<li>Составление индивидуальных программ, современых экскурсии по Киеву</li>
									<li>Подбор и посещение самых стоящих  мероприятий  интрересам (театр, балет, тренинги, форумы, нетворкинг)</li>
									<li>Гастротуры по ресторанам, барам и другим мест </li>
								</ul>
								<button class="vbtn vbtn-effect-shutter-vertical-out vbtn-border service-btn" data-modal="vmodal" data-modal-target="#modalform">Подробнее</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="vsection big contact-wrap " id="contacts">
		<div class="number-wrap text-center number-big">
			<div class="number number-light">04</div>
		</div>
		<div class="vcontainer">
			<div class="vrow">
				<div class="cf text-center title-wrap big">
					<h3 class="h3">Контакты</h3>
					<h4 class="title-page color-grey">We understand your requirement and provide quality works.</h4>
				</div>
				<div class="cf vform vform-big">
					<?php echo do_shortcode('[contact-form-7 id="30" title="FormForMainPage"]'); ?>
				</div>
				<div class="cf contact-wrap-inner max-md-center wow fadeIn">
					<div class="vcol-xs-12 vcol-sm-6 vcol-md-3 contact-block-wrap">
						<div class="contact-block contact-logo">
							<a href="#"><img src="<?php echo get_template_directory_uri();?>/img/logoWhite.png" alt=""></a>
						</div>
					</div>
					<div class="vcol-xs-12 vcol-sm-6 vcol-md-3 contact-block-wrap">
						<div class="contact-block">
							<p class="contact-title color-green">Телефон, Viber</p>
							<a href="telto: +380734038134">+380734038134</a>
						</div>
					</div>
					<div class="vcol-xs-12 vcol-sm-6 vcol-md-3 contact-block-wrap">
						<div class="contact-block">
							<p class="contact-title color-purple">E-mail</p>
							<a class="contact-email" href="mailto: irinakelowna@gmail.com">irinakelowna@gmail.com</a>
						</div>
					</div>
					<div class="vcol-xs-12 vcol-sm-6 vcol-md-3 contact-block-wrap">
						<div class="contact-block contact-social-wrap text-md-right">
							<p class="contact-title color-orange">Мы в соц. сетях</p>
							<div class="contact-social-inner">
								<div class="contact-social"><a href="#"><img src="<?php echo get_template_directory_uri();?>/img/social-fb.png" alt=""></a></div>
								<div class="contact-social"><a href="#"><img src="<?php echo get_template_directory_uri();?>/img/social-in.png" alt=""></a></div>
								<div class="contact-social"><a href="#"><img src="<?php echo get_template_directory_uri();?>/img/social-inst.png" alt=""></a></div>
								<div class="contact-social"><a href="#"><img src="<?php echo get_template_directory_uri();?>/img/social-goog.png" alt=""></a></div>
							</div>
						</div>
					</div>
					<div class="line-wrapper-all">
						<div class="line line-red"></div>
						<div class="line line-green"></div>
						<div class="line line-purple"></div>
						<div class="line line-orange"></div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php
get_footer();
