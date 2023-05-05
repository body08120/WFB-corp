<?php
session_start();
?>

<!doctype html>


<html lang="fr">


<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <script src="script.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
		
		<!-- LOADING FONTS AND ICONS -->
		<link href="http://fonts.googleapis.com/css?family=Poppins:700|Oswald:300" rel="stylesheet" property="stylesheet" type="text/css" media="all">
		
		<link rel="stylesheet" type="text/css" href="../assets/css/pe-icon-7-stroke.css">
		<link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">
		
		<!-- REVOLUTION STYLE SHEETS -->
		<link rel="stylesheet" type="text/css" href="../assets/css/settings.css">
		
		<!-- FONT AND STYLE FOR BASIC DOCUMENTS, NO NEED FOR FURTHER USAGE IN YOUR PROJECTS-->
		<link href="http://fonts.googleapis.com/css?family=Roboto%3A700%2C300" rel="stylesheet" property="stylesheet" type="text/css" media="all" />
		<link rel="stylesheet" type="text/css" href="../assets/css/noneed.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/accueil.css">
		
		<!-- REVOLUTION JS FILES -->
		<script type="text/javascript" src="../assets/js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="../assets/js/jquery.themepunch.revolution.min.js"></script>
		
		<!-- PARTICLES ADD-ON FILES -->
		<link rel='stylesheet' href='../assets/js/revolution.addon.particles.css?ver=1.0.3' type='text/css' media='all' />
		<script type='text/javascript' src='../assets/js/revolution.addon.particles.min.js?ver=1.0.3'></script>

		<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->	
		<script type="text/javascript" src="../assets/js/revolution.extension.actions.min.js"></script>
		<script type="text/javascript" src="../assets/js/revolution.extension.carousel.min.js"></script>
		<script type="text/javascript" src="../assets/js/revolution.extension.kenburn.min.js"></script>
		<script type="text/javascript" src="../assets/js/revolution.extension.layeranimation.min.js"></script>
		<script type="text/javascript" src="../assets/js/revolution.extension.migration.min.js"></script>
		<script type="text/javascript" src="../assets/js/revolution.extension.navigation.min.js"></script>
		<script type="text/javascript" src="../assets/js/revolution.extension.parallax.min.js"></script>
		<script type="text/javascript" src="../assets/js/revolution.extension.slideanims.min.js"></script>
		<script type="text/javascript" src="../assets/js/revolution.extension.video.min.js"></script>

  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#1D1D1F',
            card: '#1C242A',
            blanc: '#F1F5F2',
            rose: '#8c7284',
            grenat: '#70163c',
          }
        }
      }
    }
  </script>
</head>

<?php
// On vérifie on est sur quel page
if (isset($_GET['page']) && !empty($_GET['page'])) {
    $currentPage = (int) strip_tags($_GET['page']);
} else {
    $currentPage = 1;
}

// On se connecte à la db
require_once('../../assets/config/config.php');

// On détermine le nombre de film et on renomme
$sql = "SELECT COUNT(*) AS nb_articles 
        FROM articles";
$stmt = $pdo->prepare($sql);
$stmt->execute();

//On récupère le nombre de film
$result = $stmt->fetch();
// on force en nombre entier, autre sécu si on veut
$nbArticles = (int) $result['nb_articles'];

// On détermine le nombre de film par page
$parPage = 10;
$pages = ceil($nbArticles / $parPage);

// Calcul du premier film de la page
$premier = ($currentPage * $parPage) - $parPage;

// On récupère les id, img et nom des films
$sql = "SELECT id_article, title
        FROM articles
        LIMIT :premier, :parpage";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':premier', $premier, PDO::PARAM_INT);
$stmt->bindValue(':parpage', $parPage, PDO::PARAM_INT);
$stmt->execute();

// On stock les films dans un tableau associatif
$films = $stmt->fetchAll();

// var_dump($films);
// die();


?>




    <!--catalogue-->
    <section class="my-9">
        <div class="text-[#EAD7D7] uppercase">
        <div id="result-zone" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">

                <!-- On boucle sur les films -->
                <?php foreach ($films as $film): ?>
                    <div class="w-4/5 h-96 mx-auto my-9">
                        <div class="mx-auto my-2 text-center h-96">

                            <!-- On envoie vers le film avec l'id en paramètres GET -->
                            <a href="content/pages/film.php?id=<?php echo $film['id_film']; ?>">
                                <!-- On affiche ce qu'on veut afficher du film, et qu'on récupère de la db -->
                                <img class="h-96 mx-auto" src="<?php echo $film['img_film'] ?>" alt="Affiche" />
                                <span>
                                    <?php echo $film['nom_film'] ?>
                                </span>
                            </a>
                        </div>
                    </div>

                    <!-- fin de la boucle -->
                <?php endforeach; ?>
            </div>
        </div>

        <br><br>
        <!-- navigation pagination -->
        <nav class="my-9 flex justify-center" aria-label="Page navigation example">
            <ul class="inline-flex -space-x-px">

                <!-- précedent -->
                <li>
                    <!-- Si la page courante + grand que 1: -->
                    <?php if ($currentPage > 1): ?>
                        <!-- Le lien soustrait 1 de la page courante -->
                        <a href="content/pages/catalogue.php?page=<?php echo $currentPage - 1; ?>"
                            class="px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                    <?php endif; ?>
                </li>

                <!-- on boucle les pages -->
                <?php for ($page = 1; $page <= $pages; $page++): ?>
                    <li>
                        <a href="content/pages/catalogue.php?page=<?php echo $page; ?>" aria-current="page"
                            class="px-3 py-2 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white"><?php echo $page; ?></a>
                    </li>
                <?php endfor; ?>

                <!-- suivant -->
                <li>
                    <!-- si la page courante est + petite que le nombre de pages -->
                    <?php if ($currentPage < $pages): ?>
                        <!-- Le lien additionne 1 à la page courante -->
                        <a href="content/pages/catalogue.php?page=<?php echo $currentPage + 1; ?>"
                            class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                    <?php endif; ?>
                </li>

            </ul>
        </nav>

    </section>
    <!---->


    </body>


</html>