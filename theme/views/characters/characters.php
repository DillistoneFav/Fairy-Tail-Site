<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8" />
    <title>Fairy Tail</title>
    <script src="/static/js/jquery-2.2.4.min.js"></script>
    <meta content="width=767" name="viewport" />

    <link rel="shortcut icon" href="/static/img/stuff/favicon.ico" />
    <link
      rel="stylesheet"
      type="text/css"
      href="/static/css/index.css"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Long+Cang&display=swap" rel="stylesheet">
    <link
      rel="stylesheet"
      type="text/css"
      href="/static/css/lang.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="/static/css/colorbox.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="/static/css/slick-theme.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="/static/css/slick.css"
    />

    <link
      rel="stylesheet"
      type="text/css"
      href="/static/css/animation.css"
    />

    <link
      rel="stylesheet"
      type="text/css"
      href="/static/css/en/index.css"
    />
    <style>
		@font-face {
			font-family: Script_Italic;
			src: url(stuff/Script_Italic.ttf);
		}
		@font-face {
			font-family: AirstreamNF;
			src: url(stuff/AirstreamNF.ttf);
		}
	</style>
	<link rel="stylesheet" type="text/css" href="/static/css/Universe.css">
<body id="en">
<div class="wrapper">
	<?php require_once(ROOT."/theme/views/blocks/header.php")?>
	<?php require_once(ROOT."/theme/views/blocks/loader.php")?>
	<article class="lock-padding characbg">
		<div class="all">
			<div class="characters-slider pc">
				<p class="pcharacters">Characters</p>
				<div class="main">
					<div class="slider slider-for">
						<div><img src="/static/img/stuff/NatsuChar.png"></div>
						<div><img src="/static/img/stuff/grayChar.png"></div>
						<div><img src="/static/img/stuff/lucy-slider.png"></div>
						<div><img src="/static/img/stuff/ErzaCharpng.png"></div>
						<div><img src="/static/img/stuff/wendy.png"></div>
					</div>
					<div class="slider slider-nav">
						<div class="descSlide">
							<p class="descToChar"><span>Natsu</span> is a lean, muscular young man of average height with a slightly tan skin tone, black eyes, spiky pink-colored hair, and has abnormal sharp canines. <br><span>Natsu</span> has a scar on the right side of his neck, hidden by his scarf. Following his intense battle with the Rogue Cheney of the future, Natsu gains a cross-shaped scar on the left side of his abdomen, a result of the two fatal wounds the man dealt to him during their altercations. He later attains a new scar, this one being a jagged blemish on his right cheek, which he gained following his battle with Zeref. Natsu's guild mark is red and is located just below his right shoulder.</p>
						</div>
						<div class="descSlide">
							<p class="descToChar">
								<span>Gray's</span> most prominent feature is his spiky black-colored hair. He has dark blue eyes, and his body is toned and muscular.
								<br>After the mission on Galuna Island, he gets a scar on his forehead above his left eye that is partially covered by his hair.
								<br>He also has a cross-shaped scar on his lower abdomen received from using Seven Slice Dance: Blood Version on Tenrou Island. His member stamp is below his collarbone on his right pectoral muscle and is dark blue in color.
								<br>Unlike almost all other characters, <span>Gray</span> does not consistently wear the same type of clothes (that is, when he is wearing some), though he is often shown wearing some kind of white coat.
							</p>
						</div>
						<div class="descSlide">
							<p class="descToChar">
							<span>Lucy</span> has brown eyes and shoulder-length blonde hair that is usually tied by ribbons in a variety of colors in a small ponytail to the right side of her head with the rest of the hair loose. However, in the year X791 she appears to keep her hair up more often in pigtails. She is buxom and has a curvaceous body. In X792, her hair is considerably longer, and she keeps it all in a side ponytail.
							Her pink <span>Fairy Tail</span> stamp is located at the back of her right hand. Additionally, <span>Lucy</span> does not consistently wear the same outfit. However, she always has a belt that, along with keeping her skirt up, holds her Celestial Spirit keys and a whip with a heart-shaped end. She often wears black, leather high heeled boots. She also bears a striking resemblance to her mother.
							</p>
						</div>
						<div class="descSlide">
							<p class="descToChar">
							<span>Erza</span> is a young woman with long, scarlet hair and brown eyes. She lost her right eye as a child and now has an artificial one which was created by Porlyusica. She has a slender, voluptuous figure that <span>Lucy</span> Heartfilia described as "amazing." <br>Her most common attire consists of a custom-made armor by Heart Kreuz smiths, a blue skirt, black boots, and diamond shaped silver earrings. Her <span>Fairy Tail</span> stamp is blue and is located on the middle of her left upper arm. <span>Erza's</span> specialty in Requip Magic allows her to requip not only armors but different outfits as well, enabling her to change her attire at any given time.
							</p>
						</div>
						<div class="descSlide">
							<p class="descToChar">
							<span>Wendy</span> is a petite girl with fair skin. As of her introduction, she has long, dark blue hair that reaches down to her waist, with two bangs framing her face which reach down to her chest alongside her brown eyes. Like all Dragon Slayers, she has elongated canine teeth. At first, she wears a simple dress with two wavy stripes running across the dress and ending in small pointed edges at the bottom. Around her arms and legs she wears wing like attachments. <span>Wendy's</span> Cait Shelter Guild stamp was located on her right shoulder, but after the Guild disbanded and she joined <span>Fairy Tail</span>, the stamp was replaced by <span>Fairy Tail's</span> Guild stamp.
							</p>
						</div>
					</div>
				</div>
				<div class="for-arrows">
					<div class="dots-here">

					</div>
				</div>
			</div>
		<div class="magic">
				<div class="magictop">
                    <img class="magicimgs pc" src="/static/img/stuff/fire.gif">
					<p class="pmagic">Magic</p>
					<img class="magicimgs pc" src="/static/img/stuff/fire.gif">
				</div>
				<div class="magicbot"><button onclick="window.location.href = '#modal_1';" class="buttons"><img style="height: 25px; margin-right: 5px;" src="/static/img/stuff/history.png">History</button>
					<button onclick="window.location.href = '#modal_2';" class="buttons"><img style="height: 25px; margin-right: 5px;" src="/static/img/stuff/review.png">Review</button>
					<button onclick="window.location.href = '#modal_3';" class="buttons"><img style="height: 20px; margin-right: 5px;" src="/static/img/stuff/usage.png">Usage</button>
					<button onclick="window.location.href = '#modal_4';" class="buttons"><img style="height: 28px; margin-right: 5px;" src="/static/img/stuff/magicpower.png">Magic power</button>
					<button onclick="window.location.href = '#modal_5';" class="buttons"><img style="height: 20px; margin-right: 5px;" src="/static/img/stuff/transfer.png">Magic Transfer</button>
					<button onclick="window.location.href = '#modal_6';" class="buttons"><img style="height: 20px; margin-right: 5px;" src="/static/img/stuff/taboo.png">Taboo</button>
					<button onclick="window.location.href = '#modal_7';" class="buttons"><img style="height: 20px; width: 20px; margin-right: 5px;" src="/static/img/stuff/class.png">Classifications</button>
				</div>
			</div>
			<div class="guilds">
				<div class="guildstop">
					<img class="magicimgs pc" src="/static/img/stuff/swords.png">
					<p class="pmagic">Guilds</p>
					<img class="magicimgs pc" src="/static/img/stuff/swords.png">
				</div>
				<div class="guildsbot">
					<button class="btn_guilds"><span style="padding-top: 10px;">Fairy Tail</span><img style="position:absolute; left: 50%; height: 50px;" src="/static/img/stuff/fticon.png"></button>
					<div class="content">
						<p class="pguilds">
							Fairy Tail is currently the most powerful guild in Fiore.<br>
							This guild is greatly disliked by the Magic Council because of the destructive nature of its members.<br>
							Fairy Tail allied with Lamia Scale, Blue Pegasus, and Cait Shelter so that they could defeat Oración Seis, one of three Dark Guilds in the Balam Alliance.<br>
							The guild lost its status as the top guild in Fiore due to the disappearance of several of its core members. <br>
							After seven years, the Team Tenrou finally returned and has decided to regain their title as strongest guild by entering the X791 Grand Magic Games.<br>
							Two teams were sent to represent Fairy Tail and both managed to pass the Preliminaries
						</p>
					</div>
					<button class="btn_guilds"><span style="padding-top: 10px;">Sabertooth</span><img style="position:absolute; left: 50%; height: 50px;" src="/static/img/stuff/sabericon.webp"></button>
					<div class="content">
						<p class="pguilds">
							It was formerly the most powerful guild in Fiore, having gained five powerful members in the past seven years.<br>
							Sabertooth participated in the Grand Magic Games of X791 and their representative team was able to place first in the preliminaries.
						</p>
					</div>
					<button class="btn_guilds"><span style="padding-top: 10px;">Twilight Ogre</span><img style="position:absolute; left: 50%; height: 50px;" src="/static/img/stuff/ogreicon.png"></button>
					<div class="content">
						<p class="pguilds">
							Representative Guild in Magnolia Town.<br>
							They were one of the many guilds who participated in the X791 Grand Magic Games, but were also among the majority who did not manage to move past the Preliminary round.
						</p>
					</div>
					<button class="btn_guilds"><span style="padding-top: 10px;">Lamia Scale</span><img style="position:absolute; left: 50%; height: 50px;" src="/static/img/stuff/lamiaicon.png"></button>
					<div class="content">
						<p class="pguilds">
							Formerly the second strongest guild in Fiore,<br>
							They allied with Fairy Tail, Blue Pegasus, and Cait Shelter to defeat the Oración Seis, one of the three Dark Guilds of the Balam Alliance.
						</p>
					</div>
					<button class="btn_guilds"><span style="padding-top: 10px;">Blue Pegasus</span><img style="position:absolute; left: 50%; height: 50px;" src="/static/img/stuff/pegicon.webp"></button>
					<div class="content">
						<p class="pguilds">
							One of the top guilds in Fiore, the guild is mostly a guild for women and effeminate males known for having beautiful members.<br>
							Blue Pegasus allied with Fairy Tail, Lamia Scale, and Cait Shelter to defeat the Oración Seis, one of the three Dark Guilds of the Balam Alliance.
						</p>
					</div>
					<button class="btn_guilds"><span style="padding-top: 10px;">Quatro Cerberus</span><img style="position:absolute; left: 50%; height: 50px;" src="/static/img/stuff/cericon.png"></button>
					<div class="content">
						<p class="pguilds">
							A guild lead by former Fairy Tail member, Goldmine.<br>
							Members of this guild are known for their eccentricity, and most wear spiked collars, a reference to their guild's name.<br>
							Quatro Cerberus participated in the Grand Magic Games of X791, placing 7th in the Preliminaries.
						</p>
					</div>
					<button class="btn_guilds"><span style="padding-top: 10px;">Mermaid Heel</span><img style="position:absolute; left: 50%; height: 50px;" src="/static/img/stuff/heelicon.png"></button>
					<div class="content">
						<p class="pguilds">
							An all-female guild. They participated in the Grand Magic Games of X791 and placed 6th in the Preliminaries.
						</p>
					</div>
					<button class="btn_guilds"><span style="padding-top: 10px;">Raven Tail</span><img style="position:absolute; left: 50%; height: 50px;" src="/static/img/stuff/ravicon.png"></button>
					<div class="content">
						<p class="pguilds">
							Raven Tail is a powerful Guild that was founded by Makarov's son, Ivan.<br>
							It was formerly a Dark Guild pre-timeskip but was approved by the Magic Council in the past seven years following the Team Tenrou’s disappearance.<br>
							Raven Tail participated in the Grand Magic Games of X791 and placed 3rd in the preliminaries.
						</p>
					</div>
					<button class="btn_guilds"><span style="padding-top: 10px;">Orochi's Fin</span><img style="position:absolute; left: 50%; height: 50px;" src="/static/img/stuff/oroicon.webp"></button>
					<div class="content">
						<p class="pguilds">
							Orochi's Fin is a Legal Guild operating in the kingdom of Fiore as long as until X792, and are sworn rivals of Lamia Scale.
						</p>
					</div>
					<button class="btn_guilds"><span style="padding-top: 10px;">Dullahan Head</span><img style="position:absolute; left: 50%; height: 50px;" src="/static/img/stuff/headicon.webp"></button>
					<div class="content">
						<p class="pguilds">
							A guild that competed in the X792 Grand Magic Games, losing to Scarmiglione.
						</p>
					</div>
					<button class="btn_guilds"><span style="padding-top: 10px;">Phantom Lord</span><img style="position:absolute; left: 50%; height: 50px;" src="/static/img/stuff/lordicon.webp"></button>
					<div class="content">
						<p class="pguilds">
							Once, Phantom Lord was the most powerful Magic guild in Fiore but over time, Fairy Tail started gaining recognition until both guilds became the signature guilds of Fiore.<br>
							The guild master, Jose Porla, one of the Ten Wizard Saints, then instigated a guild war with Fairy Tail out of jealousy.<br>
							After Phantom Lord was defeated, the Magic Council dissolved the guild and stripped Jose of his positions.
						</p>
					</div>
					<button class="btn_guilds"><span style="padding-top: 10px;">Cait Shelterl</span><img style="position:absolute; left: 50%; height: 50px;" src="/static/img/stuff/calticon.png"></button>
					<div class="content">
						<p class="pguilds">
							This guild sent delegates to participate in the alliance against the Dark Guild, Oración Seis.<br>
							After all the members of the Oración Seis were defeated and Nirvana was destroyed, the guild master Roubaul revealed that the guild never truly existed and that its members were all spirits of the Nirvit.<br>
							Roubaul used his Illusion to create the guild and its members for Wendy and Carla after he was left to take care of Wendy.
						</p>
					</div>
					<button class="btn_guilds"><span style="padding-top: 10px;">Red Lizard</span><img style="position:absolute; left: 50%; height: 50px;" src="/static/img/stuff/redicon.png"></button>
					<div class="content">
						<p class="pguilds">
							This was a guild operating in Tenrou Island, inside the kingdom of Fiore, in X679.
						</p>
					</div>
					<button class="btn_guilds"><span style="padding-top: 10px;">Fairy Tail (Edolas)</span><img style="position:absolute; left: 50%; height: 50px;" src="/static/img/stuff/ftedicon.png"></button>
					<div class="content">
						<p class="pguilds">
							Fairy Tail (Edolas) is an alternate universe counterpart of the Fairy Tail Guild from Earth Land.<br>
							The Fairy Tail Guild was the only guild in the entire Edolas realm and was formerly treated like a Dark Guild since Mage guilds are banned.<br>
							Now that Edolas doesn't have any Magic anymore the guild became a courier guild.
						</p>
					</div>
				</div>
			</div>
			<div class="locations">
				<div class="locationstop">
					<div class="guildstop">
						<p class="pmagic">locations</p>
					</div>
				</div>
				<div class="locationsbot">
					<div class="first">
						<div class="Alvarez">
							<div class="desc">
								<p class="zag">Alvarez</p>
								<p class="opisanie">
									Is a large country located in the Western Continent, Alakitasia.
									Alvarez Empire was founded at an unspecified time before X781 by Zeref Dragneel, who subjugated 730 guilds of Alakitasia by martial force and crowned himself Emperor by the name of Spriggan.
									It started out as a small nation but over the years it absorbed many other guilds and nations until it finally became the huge empire that it is today.
									Zeref created this empire for the sole purpose of defeating Acnologia, obtaining Fairy Heart, and annihilating Ishgar.
									His plans regarding with Fairy Heart once captured was to relive his life with the Time Magic, Neo Eclipse. A plan the Spriggan 12 were not aware of.
								</p>
							</div>
						</div>
						<div class="fiore">
							<div class="desc">
								<p class="zag">The kingdom of Fiore</p>
								<p class="opisanie">
									Is one of the countries located on the Earth Land. Fiore is also the main setting of "Fairy Tail".
									Fiore is located on the westernmost peninsula. It is surrounded on three sides by ocean, and has land borders with Bosco and Seven.
									Additionally, Caelum and Fiore combine their sea trade routes.
								</p>
							</div>
						</div>
						<div class="Tenrou">
							<div class="desc">
								<p class="zag">The Tenrou Island</p>
								<p class="opisanie">
									Is the holy ground of the Fairy Tail guild.
									X784's S-Class Mage Promotion Trial was held on this island.
									It is also the resting place of Fairy Tail's first Guild Master, Mavis Vermillion.
									It was once a location of the now-destroyed Red Lizard Guild in X679.
								</p>
							</div>
						</div>
					</div>
					<div class="second">
						<div class="Edolas">
							<div class="desc">
								<p class="zag">Edolas</p>
								<p class="opisanie">
									Is a universe parallel to Earth Land.
									The world of Edolas used to have floating island terrains levitating off the main land, as well as streams of flouting rivers that flow threw them,
									all of which is naturally suspended in the air by the worlds magic.
									The daytime sky is colored lime green with visible celestial objects such as moons and planets.
								</p>
							</div>
						</div>
						<div class="Elentir">
							<div class="desc">
								<p class="zag">Elentir</p>
								<p class="opisanie">
									Is an alternate universe parallel to Earth Land and Edolas.
									The world of Elentir has various heavenly bodies in its sky and tangible clouds islands that can support multiple people on it, as well as having a vast ocean surrounded by islands.
									It has a single moon that doesn't wax or wane, so it stays a full moon at all times.
									This world also has various mountains, a snowy area where snow rising up from the ground and into the sky and a forest.
								</p>
							</div>
						</div>
						<div class="Altair">
							<div class="desc">
								<p class="zag">Altair</p>
								<p class="opisanie">
									Is the capital city of the Kingdom of Stella.
									Altair is the capital city of the country of Stella, ruled over formally by Animus.
								</p>
							</div>
						</div>
					</div>
					<div class="third">
						
					</div>
				</div>
			</div>
		</div>
    </article>
    <?php require_once(ROOT."/theme/views/blocks/footer.php")?>
    </div>
	<div id="modal_1" class="modal">
		<a href="#fix" class="modal_area"></a>
		<div class="modal_body">
			<div class="modal_content">
				<a href="#fix" class="modal_close close-modal">x</a>
				<div class="modal_title">History</div>
				<div class="modal_text">
					Magic has been around for centuries. <br>
					Every type of Magic comes from The One Magic, the original source of all types of Magic. <br>
					Magic was once oppressed and feared, but gradually became an everyday phenomenon.
				</div>
			</div>
		</div>
	</div>

	<div id="modal_2" class="modal">
		<a href="#fix" class="modal_area"></a>
		<div class="modal_body">
			<div class="modal_content">
				<a href="#fix" class="modal_close close-modal">x</a>
				<div class="modal_title">Review</div>
				<div class="modal_text">
					Magic is the physical embodiment of the spirit.
					When the physical spirit of an organism connects with the spiritual flow of nature, the spirit forms Magic as a product of the connection. <br>
					Though Magic goes beyond reason, it is still born of reason and it takes an enormous amount of concentration and mental ability to use it.	<br>
					One's magical powers are also tied to one's life force. <br>
					Only ten percent of the world's population is able to use Magic, which is noted to keep a balance between ordinary people and those with Magic.<br>
					According to Zeref, ones strength of feelings places an important part in Magic.
				</div>
			</div>
		</div>
	</div>

	<div id="modal_3" class="modal">
		<a href="#fix" class="modal_area"></a>
		<div class="modal_body">
			<div class="modal_content">
				<a href="#fix" class="modal_close close-modal">x</a>
				<div class="modal_title">Usage</div>
				<div class="modal_text">
					All kinds of Magic are used in Earth Land and formerly in Edolas,<br>
					And they can be used for many purposes such as:<br> Offense, defense, support, and healing, as well as other, more practical purposes.<br>
					Magic is used by exerting Magic Power as a wide variety of spells <br>
					or by focusing it into an external source.<br>
					However, some items and weapons such as Edolas Items use Lacrima to power them.<br>
					In order to learn Magic, you must train your intellect and spirit.<br>
					However, it should be noted that the stronger the Magic, the more it tends on selecting its wielder<br>
					if the Mage's mind is frail, the Magic will take over and destroy them.
				</div>
			</div>
		</div>
	</div>

	<div id="modal_4" class="modal">
		<a href="#fix" class="modal_area"></a>
		<div class="modal_body">
			<div class="modal_content">
				<a href="#fix" class="modal_close close-modal">x</a>
				<div class="modal_title">Magic power</div>
				<div class="modal_text">
					To utilize Magic, a Mage must use the Magic Power (魔力 Maryoku) in their body, which is composed of Ethernano (エーテルナノ Ēterunano), the source of Magic Power for all Mages.<br>
					Every Mage has a container of Ethernano inside their body that determines the limits of their Magic Power. <br>
					In the case that it becomes empty, Ethernano will come from the atmosphere and enter the Mage's body and, after a while, their Magic Power shall return to normal.<br>
					However, recent studies have identified another, unused, part of a Mage's Magic container that contains a large amount of dormant power: the Second Origin (二番原セカンド・オリジン Sekando Orijin).<br>
					If a Mage somehow manages to unlock their Second Origin, they will then receive an enormous boost in Magic Power, or they can wait until the right moment to unleash the Magic Power of their Second Origin in order to gain an advantage in the battle.<br>
					It has been later revealed by Ultear that a Mage can access the magical strength they will possess in the future via her Arc of Time: Third Origin (第三魔法源サードオリジン Sādo Orijin); <br>
					however, after the power fades, the receiver will never be able to use Magic again.
				</div>
			</div>
		</div>
	</div>

	<div id="modal_5" class="modal">
		<a href="#fix" class="modal_area"></a>
		<div class="modal_body">
			<div class="modal_content">
				<a href="#fix" class="modal_close close-modal">x</a>
				<div class="modal_title">Magic transfer</div>
				<div class="modal_text">
					<p>
						Some powerful Mages (or certain other magical beings) are able to pass on Magics, often the most rare, to other Mages for them to utilize. <br>
						Doing this leaves a mark in the form of a tattoo on the Mage's body that seems to fade away if they don't have access to the Magic that was given to them. <br>
						Only four cases of this are currently known:
					</p>
					<ul style="text-align: left;">
						<li style= "border: 2px solid #c968c2; padding: 8px; border-radius: 15px; margin-top: 20px;">
							<p style="color:#c968c2">Mavis Vermillion</p> thrice has momentarily allowed Cana Alberona to borrow Fairy Glitter. <br>
							The mark left was a tattoo on Cana's right forearm.
						</li>
						<br>
						<li style= "border: 2px solid #006545; padding: 8px; border-radius: 15px;">
							<p style="color: #006545;">The Celestial Spirit King</p> transferred Aquarius' Water Magic to Lucy Heartfilia. <br>
							The mark appears across her collar bone and is the same one Aquarius has in the same spot.
						</li>
						<br>
						<li style= "border: 2px solid #5299D8; padding: 8px; border-radius: 15px;">
							<p style="color: #5299D8;">Silver Fullbuster</p> transferred his Ice Devil Slayer Magic to Gray Fullbuster. <br>
							The mark appears on his right arm.<br>
							Unlike the other cases, the Magic seems to be permanent, and he is able to make the mark appear or disappear using his own free will.
						</li>
						<br>
						<li style= "border: 2px solid #FEA231; padding: 8px; border-radius: 15px;">
							<p style="color: #FD8C27;">Natsu Dragneel</p> managed to gather the residual Magic that the deceased Fire Dragon King Igneel left within him to use a one-time ability known as Fire Dragon King Mode. <br>
							This manifested itself in the form of a Dragon-shaped tattoo on his right bicep.
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div id="modal_6" class="modal">
		<a href="#fix" class="modal_area"></a>
		<div class="modal_body">
			<div class="modal_content">
				<a href="#fix" class="modal_close close-modal">x</a>
				<div class="modal_title">Taboo</div>
				<div class="modal_text">
					Every Magic has its own set of rules that must never be broken, known as a taboo. <br>
					Different taboos that are broken have different effects on the user's body. One of them can lead to death or sickness.
				</div>
			</div>
		</div>
	</div>

	<div id="modal_7" class="modal">
		<a href="#fix" class="modal_area"></a>
		<div class="modal_body">
			<div class="modal_content">
				<a href="#fix" class="modal_close close-modal">x</a>
				<div class="modal_title">Classifications</div>
				<div class="modal_text">
					<p style="text-align: left;">There are <strong>two</strong> main classifications of Magic: <u>Caster Magic</u> and <u>Holder Magic</u>. Within these two classifications there are many sub categories such as Edolas Items, Lost Magic, and Magic Items.</p>
					<ul type="disc" style="text-align: left;">
						<li><strong>Caster Magic</strong>: (キャスターマジック Kyasutā Majikku) is Magic that is expelled from the body as opposed to Magic done through the use of a weapon or outside source.</li>
						<li><strong>Holder Magic</strong>: (ホルダーマジック Horudā Majikku) is Magic that requires a Mage to use an external source to produce the Magic. It usually requires the use of Magic Power, though there are some exceptions such as Edolas Items that are powered by Lacrima.</li>
						<li><strong>Ancient Spell</strong>: (古代魔法エンシェントスペル Enshento Superu), as its name implies, is Magic from ancient times. It includes all forms of Lost Magic, Nirvana, Memory-Make, Ars Magia as well as all of the Black Arts.</li>
						<li><strong>Lost Magic</strong>: (失われた魔法ロストマジック Rosuto Majikku) is a type of Magic that has been obliterated from the history of the world due to their immense power and the sheer gravity of their side effects on the users.</li>
						However, users of such Magic still exist, though the Magic itself is believed to be extremely rare.
					</ul>
				</div>
			</div>
		</div>
	</div>
    <?php require_once(ROOT."/theme/views/blocks/scripts.php")?>
	<script src="/static/js/sliderchar.js"></script>
</body>
</html>