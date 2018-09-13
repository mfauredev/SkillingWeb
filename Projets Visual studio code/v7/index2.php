<?php
session_start();
if(file_exists('compteur_visites.txt'))
{
        $compteur_f = fopen('compteur_visites.txt', 'r+');
        $compte = fgets($compteur_f);
}
else
{
        $compteur_f = fopen('compteur_visites.txt', 'a+');
        $compte = 0;
}
if(!isset($_SESSION['compteur_de_visite']))
{
        $_SESSION['compteur_de_visite'] = 'visite';
        $compte++;
        fseek($compteur_f, 0);
        fputs($compteur_f, $compte);
}
fclose($compteur_f);
?>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=7"/>
	<link rel="shortcut icon" href="images/icone.ico" />
	<title>Trait Gourmand - Les peintures de vinaigre</title>
	<script type="text/javascript" src="highslide/highslide-with-gallery.js"></script>
	<script type="text/javascript" src="highslide/highslide.config.js" charset="utf-8"></script>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="scripts.js"></script>		
	<link rel="stylesheet" type="text/css" href="highslide/highslide.css" />	  
	<!--[if IE]>  	
	<link rel="stylesheet" type="text/css" href="policeIE.css" />		
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="police.css" />	
	<link rel="stylesheet" type="text/css" href="style.css" />								  
</head> 
													
 <body>
<div id="site">



<div id="logo"></div>

<div id="menuFond"></div>
<div id="bandeau1"></div>
<div id="bandeau2"></div>


<div id="menuConteneur">
	<div style="height:39px;"></div>
	<div id="hautmenu"></div>
	<div id="menuPrincipal1"> <a class="image1" href="#">Présentation des peintures</a> </div>
	<div id="menuPrincipal2"> <a class="image2" href="#">Acheter nos peintures</a> </div>
	<div id="menuPrincipal3"> <a class="image3" href="#">Démonstrations</a> </div>
	<div id="menuPrincipal4"> <a class="image4" href="#">Galerie</a> </div>
	<div id="menuPrincipal5"> <a class="image5" href="#">Presse</a> </div>
	<div id="menuPrincipal6"> <a class="image6" href="#">Contact & compléments</a> </div>
</div>
<div id="image">
	<div style="background:url('images/logo.png') no-repeat 0 0;"  id="logoAccueil"></div> 
	<div style="background:url('images/image1.png') no-repeat 0 0;" id="image1"></div>
	<div style="background:url('images/image2.png') no-repeat 0 0;"  id="image2"></div>	 
	<div style="background:url('images/image3.png') no-repeat 0 0;" id="image3"></div>
	<div style="background:url('images/image4.png') no-repeat 0 0;"  id="image4"></div>
	<div style="background:url('images/image5.png') no-repeat 0 0;" id="image5"></div>
	<div style="background:url('images/image6.png') no-repeat 0 0;"  id="image6"></div>	
</div> 
<div id="cache"></div>
<div id="textes">
	<div id="titre">
		<div id="texteLogoAccueil" style= "z-index: 1000; font-size: 25px"><br><br><br><br><br><br><br><br><br><br><br><br><center>La décoration culinaire à la portée de tous.</center><br></div>
		<div id="titre1" style= "z-index: 1000"><div style="margin-left:12px">Présentation des <br>&nbsp;&nbsp;&nbsp;&nbsp; peintures</div></div>
		<div id="titre2" style= "z-index: 1000"><br><br><br>&nbsp&nbspAcheter nos<br>&nbsp;&nbsp peintures</div>
		<div id="titre3" style= "z-index: 1000; margin-top:20px">&nbsp;Démonstrations</div>
		<div id="titre4" style= "z-index: 1000; margin-top:120px"><br><br>&nbsp;Galerie</div>
		<div id="titre5" style= "z-index: 1000"><br>&nbsp;&nbsp;&nbsp;&nbsp;Presse</div>
		<div id="titre6" style= "z-index: 1000; margin-left:200px; margin-top:35px"><br>&nbsp;&nbsp;&nbsp;Contact <br><br><br> Compléments</div>
	</div>	
	<div id="texte">
		
		<div id="texte1" style= "z-index: 1000; font-family: 'Merienda One', cursive;color: #2f2f2f">
			<center><h2>Bienvenue sur le site des Peintures de vinaigre!</h2></center><br>
			Décorez vos assiettes en toute simplicité, comme dans les grands restaurants!<br>
			Peintures à base de vinaigre, d'arômes naturels et de pigments de fruits.<br><br>
			Avec ce concept unique, vous donnerez une note personnelle à chacun de vos plats...<br>
			En les embellissant ainsi, vous deviendrez rapidement un artiste de l'art culinaire.<br><br>
			Analysées par le laboratoire HAMAC sis à perpignan, les peintures de vinaigre sont homologuées.
					
		</div>
		
		<div id="texte2" style= "z-index: 1000">
			<div id="contenuAchat" style="height:100%; width:420px; float:left">
				<div id="contenuAchat1" style= "font-family: 'Merienda One', cursive;color: #2f2f2f">
					<div id="etape1" style="height:50px; width:100%; text-align: center">Achetez ici notre packaging au prix de 22.50€ TTC<br><br>Celui-ci est composé de 6 pots dont les parfums sont les suivants:<br>
					Thé, Balsamique, Framboise, Groseille,<br>Curcuma, Thé & Herbes de provence<br><br>Il comporte aussi 3 pipettes:<br>Curcuma, Groseille, Balsamique<br><br>
					Fournis: 2 pinceaux et une méthode d'utilisation de kit.<br><br>
					<img src="images/pots/packaging.jpg"  border="1">
					</div>
					<div id="etape2" style="height:490px; width:100%; overflow:auto; font-family: 'Merienda One', cursive;color: #2f2f2f">
					</div>
					<div id="etape3" style="font-family: 'Merienda One', cursive;color: #2f2f2f; text-align:center; margin-top:25px; height:50px; width:100%;font-size: 15px; font-family: 'Merienda One', cursive;color: #2f2f2f">
						<button type="button" OnClick='ajouterQuantiteProduit(0,1)' >Ajouter au Panier</button> <!-- style=" float:right;background:white; cursor:hand; border:solid 1px black;" -->
					</div>
				</div>
				<div id="contenuAchat2" style="font-family: 'Merienda One', cursive;color: #2f2f2f; text-align:center; margin-top:25px; height:50px; width:100%;font-size: 15px; font-family: 'Merienda One', cursive;color: #2f2f2f">
					Cette catégorie est pour l'instant en construction.<br>Les produits correspondants seront bientôt disponibles.
				</div>
				<div id="contenuAchat3" style="text-align: center">
					<div id="etape1" style="font-family: 'Merienda One', cursive;color: #2f2f2f; text-align:center; height:70px; width:100%">Composez ici un lot de pots selon vos goûts.<br>Attention, vous devez choisir un minimum de 4 pots pour que votre commande soit valide.</div>
						<div id="etape2" style="font-family: 'Merienda One', cursive;color: #2f2f2f; height:470px; width:100%; overflow:auto">
							<table width="100%" cellpadding="1" cellspacing="1">
								<tr>
									<td><img src="images/pots/1.jpg" style="height: 80px; width: 124px" border="1"></img></td>
									<td><input id="inputNb1" onchange='setInputNb(1)' type="number" width="10px" step="1" value="0" min="0" max="99"></td>
									<td> x 4.50€</td>
								</tr>								
								<tr>
								<td>Balsamique</td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td><img src="images/pots/2.jpg" style="height: 80px; width: 124px" border="1"></img></td>
									<td><input id="inputNb2" onchange='setInputNb(2)' type="number" step="1" value="0" min="0" max="99"></td>
									<td> x 4.50€</td>
								</tr>
								<tr>
									<td>Thé</td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td><img src="images/pots/3.jpg" style="height: 80px; width: 124px" border="1"></img></td>
									<td><input id="inputNb3" onchange='setInputNb(3)' type="number" step="1" value="0" min="0" max="99"></td>
									<td> x 4.50€</td>
								</tr>
								<tr>
									<td>Framboise</td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td><img src="images/pots/4.jpg" style="height: 80px; width: 124px" border="1"></img></td>
									<td><input id="inputNb4" onchange='setInputNb(4)' type="number" step="1" value="0" min="0" max="99"></td>
									<td> x 4.50€</td>
								</tr>
								<tr>
									<td>Mûre</td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td><img src="images/pots/5.jpg" style="height: 80px; width: 124px" border="1"></img></td>
									<td><input id="inputNb5" onchange='setInputNb(5)' type="number" step="1" value="0" min="0" max="99"></td>
									<td> x 4.50€</td>
								</tr>
								<tr>
									<td>Groseille</td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td><img src="images/pots/6.jpg" style="height: 80px; width: 124px" border="1"></img></td>
									<td><input id="inputNb6" onchange='setInputNb(6)' type="number" step="1" value="0" min="0" max="99"></td>
									<td> x 4.50€</td>
								</tr>
								<tr>
									<td>Thé & Herbes de Provence</td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td><img src="images/pots/7.jpg" style="height: 80px; width: 124px" border="1"></img></td>
									<td><input id="inputNb7" onchange='setInputNb(7)' type="number" step="1" value="0" min="0" max="99"></td>
									<td> x 4.50€</td>
								</tr>
								<tr>
									<td>Curcuma</td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td><img src="images/pots/8.jpg" style="height: 80px; width: 124px" border="1"></img></td>
									<td><input id="inputNb8" onchange='setInputNb(8)' type="number" step="1" value="0" min="0" max="99"></td>
									<td> x 5.50€</td>
								</tr>
								<tr>
									<td>Curaçao</td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td><img src="images/pots/9.jpg" style="height: 80px; width: 124px" border="1"></img></td>
									<td><input id="inputNb9" onchange='setInputNb(9)' type="number" step="1" value="0" min="0" max="99"></td>
									<td> x 4.50€</td>
								</tr>
								<tr>
									<td>Curry</td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td><img src="images/pots/10.jpg" style="height: 80px; width: 124px" border="1"></img></td>
									<td><input id="inputNb10" onchange='setInputNb(10)' type="number" step="1" value="0" min="0" max="99"></td>
									<td> x 4.60€</td>
								</tr>
								<tr>
									<td>Paprika</td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td><img src="images/pots/11.jpg" style="height: 80px; width: 124px" border="1"></img></td>
									<td><input id="inputNb11" onchange='setInputNb(11)' type="number" step="1" value="0" min="0" max="99"></td>
									<td> x 4.50€</td>
								</tr>
								<tr>
									<td>Curcuma & Cassis</td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td><img src="images/pots/12.jpg" style="height: 80px; width: 124px" border="1"></img></td>
									<td><input id="inputNb12" onchange='setInputNb(12)' type="number" step="1" value="0" min="0" max="99"></td>
									<td> x 4.50€</td>
								</tr>
								<tr>
									<td>Grillotte</td>
									<td></td>
									<td></td>
								</tr>
							</table>
						</div>
						<div id="etape3" style="margin-top:25px; height:50px; width:100%;font-size: 15px; font-family: 'Merienda One', cursive;color: #2f2f2f">
							<div id="compteurPots" style="float:left; margin-left:10%">0/4 Pots minimums</div>
							<button type="button" id="ajouterPanier" OnClick="ajouterUnLotDePots()" disabled="true" >Ajouter au Panier</button> <!-- style=" float:right;background:white; cursor:hand; border:solid 1px black;" -->
						</div>
				</div>
				<div id="contenuPanier"></div>
			</div>
			<div id="bandeauAchat" style="height:100%; width:175px; float:right">
				<div id="menuAchat">
					<div id="menu1"><a class="achat1" href="#">Packaging</a></div>
					<div id="menu2"><a class="achat2" href="#">Lot de pipettes</a></div>
					<div id="menu3"><a class="achat3" href="#">Pots à l'unité</a></div>
			</div>
			<div id="panier" style="margin-top:5px">
			</div>
		</div>
		</div>
		<div id="texte3" style= "font-family: 'Merienda One', cursive;color: #2f2f2f; z-index: 1000">
			<center>
				<iframe width="560" height="315" src="http://www.youtube.com/embed/B38fAtqUoWY" frameborder="4" allowfullscreen></iframe>
			</center>
		</div>
		
		<div id="texte4" style= "font-family: 'Merienda One', cursive;color: #2f2f2f; z-index: 1000">
<!------------------------------------------------------------Galerie JS--------------->
	<div class="highslide-gallery">
				<ul>
				<li>
				<a href="images/galerie/DSC_0944.JPG" class="highslide" 
						title="" 
						onclick="return hs.expand(this, config1 )">
					<img src="images/galerie/DSC_0944.JPG" height="100" alt=""/>
				</a>
				<li>
				<a href="images/galerie/DSC_0946.JPG" class="highslide" 
						title="" 
						onclick="return hs.expand(this, config1 )">
					<img src="images/galerie/DSC_0946.JPG" height="100" alt=""/>
				</a>
				<li>
				<a href="images/galerie/DSC_0948.JPG" class="highslide" 
						title="" 
						onclick="return hs.expand(this, config1 )">
					<img src="images/galerie/DSC_0948.JPG" height="100" alt=""/>
				</a>
				<li>
				<a href="images/galerie/DSC_0958.JPG" class="highslide" 
						title="" 
						onclick="return hs.expand(this, config1 )">
					<img src="images/galerie/DSC_0958.JPG" height="100" alt=""/>
				</a>
				<li>
				<a href="images/galerie/DSC_0959.JPG" class="highslide" 
						title="" 
						onclick="return hs.expand(this, config1 )">
					<img src="images/galerie/DSC_0959.JPG" height="100" alt=""/>
				</a>
				<li>
				<a href="images/galerie/DSC_0961.JPG" class="highslide" 
						title="" 
						onclick="return hs.expand(this, config1 )">
					<img src="images/galerie/DSC_0961.JPG" height="100" alt=""/>
				</a>
				<li>
				<a href="images/galerie/DSC_0969.JPG" class="highslide" 
						title="" 
						onclick="return hs.expand(this, config1 )">
					<img src="images/galerie/DSC_0969.JPG" height="100" alt=""/>
				</a>
				<li>
				<a href="images/galerie/DSC_0973.JPG" class="highslide" 
						title="" 
						onclick="return hs.expand(this, config1 )">
					<img src="images/galerie/DSC_0973.JPG" height="100" alt=""/>
				</a>
				<li>
				<a href="images/galerie/DSC_0975.JPG" class="highslide" 
						title="" 
						onclick="return hs.expand(this, config1 )">
					<img src="images/galerie/DSC_0975.JPG" height="100" alt=""/>
				</a>
				<li>
				<a href="images/galerie/DSC_0977.JPG" class="highslide" 
						title="" 
						onclick="return hs.expand(this, config1 )">
					<img src="images/galerie/DSC_0977.JPG" height="100" alt=""/>
				</a>
				<li>
				<a href="images/galerie/DSC_0979.JPG" class="highslide" 
						title="" 
						onclick="return hs.expand(this, config1 )">
					<img src="images/galerie/DSC_0979.JPG" height="100" alt=""/>
				</a>
				<li>
				<a href="images/galerie/DSC_0982.JPG" class="highslide" 
						title="" 
						onclick="return hs.expand(this, config1 )">
					<img src="images/galerie/DSC_0982.JPG" height="100" alt=""/>
				</a>
				<li>
				<a href="images/galerie/DSC_0983.JPG" class="highslide" 
						title="" 
						onclick="return hs.expand(this, config1 )">
					<img src="images/galerie/DSC_0983.JPG" height="100" alt=""/>
				</a>
				<li>
				<a href="images/galerie/DSC_0992.JPG" class="highslide" 
						title="" 
						onclick="return hs.expand(this, config1 )">
					<img src="images/galerie/DSC_0992.JPG" height="100" alt=""/>
				</a>
				<li>
				<a href="images/galerie/DSC_1000.JPG" class="highslide" 
						title="" 
						onclick="return hs.expand(this, config1 )">
					<img src="images/galerie/DSC_1000.JPG" height="100" alt=""/>
				</a>
				<li>
				<a href="images/galerie/103.JPG" class="highslide" 
						title="" 
						onclick="return hs.expand(this, config1 )">
					<img src="images/galerie/103.JPG" height="100" alt=""/>
				</a>
				<li>
				<a href="images/galerie/110.JPG" class="highslide" 
						title="" 
						onclick="return hs.expand(this, config1 )">
					<img src="images/galerie/110.JPG" height="100" alt=""/>
				</a>
				<li>
				<a href="images/galerie/153.JPG" class="highslide" 
						title="" 
						onclick="return hs.expand(this, config1 )">
					<img src="images/galerie/153.JPG" height="100" alt=""/>
				</a>
				</ul>
				<div style="clear:both"></div></div>
			</div>
<!------------------------------------------------------------Fin galerie JS--------------->		
		<div id="texte5" style= "font-family: 'Merienda One', cursive;color: #2f2f2f; z-index: 1000; text-align:center">
			Retrouvez ici les communications médiatiques à notre sujet:<br><br>
			<a class="notice" target="_blank" href="presse/articleBonProfit.pdf">Article "Bon Profit"</a><br><br>
			
			Nous sommes fier de vous annoncer que nous avons obtenu le premier prix au concours de l'innovation agro-alimentaire 'Sud'Innov'<br>
			<a class="notice" target="_blank" href="http://youtu.be/6CCQ8X3JMO4"> Vidéo de présentation de Trait Gourmand pour le concours Sud'Innov</a><br>
			<a class="notice" target="_blank" href="presse/sudInnov.pdf"> Article de presse du concours Sud'Innov</a><br><br>
			
			<a class="notice" target="_blank" href="presse/brochure.pdf"> Notre brochure publicitaire</a><br><br>
		</div>
		
		
		
		<div id="texte6" style= "font-family: 'Merienda One', cursive;color: #2f2f2f; z-index: 1000">
		<div style="width:100%; height:100px">
			<div style="float:left; width:60%; height:100px">
				Tel : 06.30.64.13.71<br><br>
				Mail : traitgourmand@gmail.com
			</div>
			<div style="float:right; width:40%; text-align:right; height:100px">
				11 rue Porte de France<br>
				66 230<br>
				Prats-de-mollo la preste
			</div>
			</div>
			<div id="divButtonCetC1"><a class="nousEcrire" href="#">Nous écrire</a></div>
			<div id="divContenuCetC1" style="display: none; width:100%;">
				Fonctionalité bientôt disponible.
			</div>
			<div id="divButtonCetC2"><a class="nousTrouver" href="#">Nous trouver</a></div>
			<div id="divContenuCetC2" style="display: none; width:100%;">
				
				<iframe width="590" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.fr/maps?f=q&amp;source=s_q&amp;hl=fr&amp;geocode=&amp;q=prats+de+mollo&amp;aq=&amp;sll=43.809086,1.562298&amp;sspn=4.066761,10.821533&amp;ie=UTF8&amp;hq=&amp;hnear=Prats-de-Mollo-la-Preste,+Pyr%C3%A9n%C3%A9es-Orientales,+Languedoc-Roussillon&amp;t=m&amp;ll=42.449808,2.565994&amp;spn=0.177329,0.291824&amp;z=11&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.fr/maps?f=q&amp;source=embed&amp;hl=fr&amp;geocode=&amp;q=prats+de+mollo&amp;aq=&amp;sll=43.809086,1.562298&amp;sspn=4.066761,10.821533&amp;ie=UTF8&amp;hq=&amp;hnear=Prats-de-Mollo-la-Preste,+Pyr%C3%A9n%C3%A9es-Orientales,+Languedoc-Roussillon&amp;t=m&amp;ll=42.449808,2.565994&amp;spn=0.177329,0.291824&amp;z=11&amp;iwloc=A" style="color:#0000FF;text-align:left">Agrandir le plan</a></small>
					
			</div>
			<div id="divButtonCetC3"><a class="Brevet" href="#">Brevet & Marque déposée</a></div>
			<div id="divContenuCetC3" style="display: none; width:100%;">
				<div style="width:100%;height:180px">
					<div style="float: left;"><img src="images/inpi.jpg" style="height:100px"></img></div>
					<div style="float: right; width:420px">
						Pour se prémunir d’éventuels contrefacteurs et dissuader les agissements frauduleux.
						Trait Gourmand commercialise une peinture culinaire dont le brevet a été déposé à l'INPI
						(Institut National de la Propriété Industrielle) sous le N° 101376081.
					</div>
				</div>
			</div>
			<div id="divButtonCetC4"><a class="notice" href="#">Notice PDF</a></div>
			<div id="divButtonCetC5"><a class="webDesign" href="#">Web-design & intégration</a></div>
			<div id="divContenuCetC5" style="display: none; width:100%;">
				Ce site a été créé par David BERNARD et Mathias FAURE.<br>
				Contact: mathias.faure.31@gmail.com
			</div>

	</div>
	
	<div id="grandTitre">Trait Gourmand</div>

	<div id="sousTitre">Les peintures culinaires</div>
	
</div>
</div>
 </body>
