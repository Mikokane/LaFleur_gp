<!DOCTYPE html>
<html>
	<head>
		<title>Société Lafleur - Produits</title>
		<meta charset="utf-8" />
		<link type="text/css" rel="stylesheet" href="fleurs.css" />
                <script type="text/javascript" src="code.js"></script> 
	</head>

	<body>
		<div id="bloc_page">
			<header>
				<p id="logo"><img width=50 height="50" src="images/ACCUEIL.jpg" alt="Bienvenue !!!"  /></p>
				<h1>Société Lafleur</h1>
				<h4>6, cloitre St Aignan</h4>
				<h4>45000 Orléans</h4>
			</header>
                        <div id="centre">
                            <nav>

                                    <p id="accueil"><a href="accueil.php" >Accueil</a></p>
                                    <p id="pdt">Nos produits</p>
                                    
                                    <select id="categorie" onChange=getProduit();>
                                    <?php
                                        Include "connexion.php" ;
                                        if ($connexion)
                                        {
                                                $requete="select * from categorie;";
                                                $resultat=$connexion->query($requete)or die(print_r($connexion->errorInfo()));
                                                while ($ligne = $resultat->fetch())
                                                {

                                    ?>
                                        <option value="<?php echo $ligne['cat_code'];?>"><?php echo $ligne['cat_libelle'];?></option>

                                    <?php
                                                }
                                                $resultat->closeCursor();
                                    }

                                    ?>
                                    </select>
                            </nav>
                            <section>
                                <div id="produit"><div id="liste"></div></div>
                                  
                                    
                            </section>
                        </div>
			<footer>
				<h2>&reg; copyrights Fanny Landon r&eacute;alis&eacute; le 22/09/2021 </h2>
			</footer>
		</div>
	</body>
</html>
