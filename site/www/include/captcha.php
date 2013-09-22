<?php

// longueur du code
$CODE_LENGTH = 6;


// On démarre une session
session_start();

// On précise qu on va envoyer une image
header("Content-Type: image/png");

// tire une chaine aléatoirement sur 6 caractères
$rand_str = substr( sha1( mt_rand() ), 0, $CODE_LENGTH);

// On hash ensuite cette valeur avec md5() puis on stocke ce résultat
//dans variable de session $_SESSION['secure_code'] de la session en cours
$_SESSION['secure_code'] = md5($rand_str);

// Afin de personnaliser chacun de nos caractères, on les stocke un
//par un dans des variables
for ($i = 0; $i < $CODE_LENGTH; $i++) {
	$char[$i] = substr($rand_str, $i, 1);
}

/*
imagecreatefrompng() crée une nouvelle image PNG à partir d'un
fichier
On la stocke dans $image pour pouvoir y mettre ensuite nos caractères
*/
$image = imagecreatefrompng("../images/bruit.png");

$files = glob("../fonts/*.ttf");
foreach ($files as $filename) {
//	$filename = substr($filename,0,-4); // retire l'extension .tff
	$fonts[] = $filename;
}

/*
imagecolorallocate() retourne un identifiant de couleur
On définit les couleurs RVB qu'on va utiliser pour nos polices et on
les stocke dans le tableau $colors[]
Vous pouvez ajouter autant de couleurs que vous voulez
*/
$colors = array(
	imagecolorallocate($image, 255,0,0),	// rouge
	imagecolorallocate($image, 109,30,100),	// violet
	imagecolorallocate($image, 30,80,180),	// bleu
	imagecolorallocate($image, 40,100,20),	// vert
	imagecolorallocate($image, 255,90,0),	// orange
	imagecolorallocate($image, 130,130,130)	// gris
);

/*
On crée la fonction aleatoire() qui va retourner une valeur prise au hasard dans un tableau
Elle sera utilisée pour piocher une couleur et une police au hasard pour chaque caractère
*/
function aleatoire($tab){
	$max = count($tab) - 1;
	$hasard = mt_rand(0, $max);
	return ($tab[$hasard]);
}

/*
On met en forme nos caractères un par un pour les disposer sur notre
image d'origine bruit.png
imagettftext(image, taille_de_la_police, angle, coordonnée_X_à_partir_du_bord,
coordonnée_Y_à_partir_du_bord, couleur_RVB, police_de_caractères,
texte) dessine un texte avec une police TrueType
*/
$y = 10;
for ($i = 0; $i < $CODE_LENGTH; $i++) {
	$x = mt_rand(-30, 30);
	imagettftext($image, 25, $x, $y, 35, aleatoire($colors), aleatoire($fonts), $char[$i]);
	$y += 30;
}

// imagepng() crée une image PNG en utilisant l'image $image
imagepng($image);

//L'image a été créée, on appelle donc imagedestroy() qui libère toute la mémoire associée à l'image $image
imagedestroy($image);
?>
