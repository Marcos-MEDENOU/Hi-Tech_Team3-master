<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="../ressources/css/style.css">
    <link rel="stylesheet" href="../ressources/css/media.css">
    <link rel="stylesheet" href="../ressources/css/normalize.css">
    <title>Hi-Tech</title>
</head>

<body>
    <script src="https://kit.fontawesome.com/b48549a02e.js" crossorigin="anonymous"></script>
    <header>
        <div class="container">
            <div class="accessibilty flex_row_gap">
                <span>Options d'affichage/accessibilité</span>
                <span>Theme:
                    <span>
                        <a href="#">sombre</a>
                        <a href="#">contrasté</a>
                        <a href="#">clair</a>
                    </span>
                </span>
                <span>Interlignage:
                    <span>
                        <a href="#">simple</a>
                        <a href="#">augmenté</a>
                    </span>
                </span>
            </div>
            <div class="header_page flex_row_gap">
                <div class="no_user_item flex_row_gap">
                    <div>
                        <a href="#"><img src="../../../Public/ressources/images/logo.svg" alt="Logo Hi-Tech"></a>
                        <h1 class="reset">HiTech.NET</h1>
                        <p class="reset">Tout le matériel High-Tech</p>
                    </div>
                    <form action="GET" class="search-bar flex_row_gap ">
                        <input class="reset" type="search" name="search_bar" id="search_bar" placeholder="Chercher un produit, une marque, une boutique.">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                        </div>
                        <select class="reset" name="search_shop_list" id="search_shop_list">
                            <option value="toutes le boutiques" selected>Toutes le boutiques</option>
                            <option value="ordinateurs">Ordinateurs</option>
                            <option value="Périphériques & composants">Périphériques & composants</option>
                            <option value="Téléphones">Téléphones</option>
                            <option value="Objects connectés">Objects connectés</option>
                        </select>
                        <div><button type="submit" class="validate_search">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="search_glass"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                </div>
                <div class="user_item flex_row_gap">
                    <div class="user-account-item">
                        <div>
                            <a><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                </svg>

                                Mon compte

                            </a>
                        </div>


                        <div class="div1">
                            <div id="openModal" class="modalDialog">
                                <div class="div1">
                                    <a title="Close" class="close" id="close1">X</a>
                                    <h2>Mon compte</h2>
                                    <form action="#">
                                        <fieldset>
                                            <p class="form_redirect">J'ai déja un compte</p>
                                            <div class="form-connexion-flex">
                                                <div>
                                                    <label for="email_connect">Mon addresse email</label>
                                                </div>
                                                <div>
                                                    <input type="text" id="email_connect"> <br>
                                                </div>

                                            </div>
                                            <div class="vertical-line"></div>
                                            <div class="form-connexion-flex">
                                                <div>
                                                    <label for="pwd_connect">Mon mot de passe</label>
                                                </div>
                                                <div>
                                                    <input type="password" id="pwd_connect"> <br>
                                                </div>
                                            </div>
                                            <div class="vertical-line"></div>

                                            <div class="form-connexion-flex">
                                                <a href="home.html">Se connecter</a>
                                                <a href="#">J'ai oublier mon mot de passe</a>
                                            </div>
                                        </fieldset>

                                        <fieldset class="form_footer">
                                            <p>Je n'ai pas de compte</p> <br>
                                            <button type="submit" id="create_account" name="register">S'inscrire</button>
                                        </fieldset>
                                    </form>

                                </div>
                            </div>

                            <div class="div2">
                                <div id="openModal2" class="modalDialog2">
                                    <div>
                                        <a title="Close" class="close" id="close2">X</a>
                                        <h2>Création de compte</h2>
                                        <form action="../../controllers/registercontroller.inc.php" method="post" id="myForm">
                                            <fieldset>
                                                <p>Informations personnelle</p>
                                                <div class="vertical-line"></div>
                                                <div class="form-connexion-flex">
                                                    <div>
                                                        <label for="lname">Nom</label>
                                                    </div>
                                                    <div>
                                                        <input type="text" name="lname" id="lname"> <br>
                                                    </div>

                                                </div>
                                                <div class="form-connexion-flex">
                                                    <div>
                                                        <label for="fname">Prénom</label>
                                                    </div>
                                                    <div>
                                                        <input type="text" name="fname" id="fname"> <br>
                                                    </div>
                                                </div>
                                                <div class="form-connexion-flex">
                                                    <div>
                                                        <label for="email">Email</label>
                                                    </div>
                                                    <div>
                                                        <input type="email" name="email" id="email"> <br>
                                                    </div>

                                                </div>
                                                <div class="vertical-line"></div>
                                                <div class="form-connexion-flex">
                                                    <div>
                                                        <label for="pwd">Mot de passe</label>
                                                    </div>
                                                    <div>
                                                        <input type="password" name="pwd" id="pwd"> <br>
                                                    </div>
                                                </div>
                                                <div class="form-connexion-flex">
                                                    <div>
                                                        <label for="confirm_pwd">Confirmer mot de passe</label>
                                                    </div>
                                                    <div>
                                                        <input type="password" name="confirm_pwd" id="confirm_pwd"> <br>
                                                    </div>
                                                </div>
                                                <div class="vertical-line"></div>

                                                <div class="form-connexion-flex">
                                                    <button type="submit" name="register">S'inscrire</button>
                                                    <a href="#" id="redirect_connexion">J'ai déja un compte </a>
                                                </div>
                                                <div id="res"></div>
                                            </fieldset>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="user-cart-item">
                        <a><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                            </svg>
                            Mon panier</a>
                        <span class="add_click"><span class="quantity_paner">0</span></span>
                        <div class="container_total_shop">
                            <span class="total_shop">0</span><span>€</span>
                        </div>
                    </div>

 



                </div>
            </div>
            <nav class="shop_list">
                <ul class="nobullets flex_row_gap ">
                    <li><span class="shop-title " id="shop_computer"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25" />
                            </svg>
                            Ordinateurs</span>
                        <div class="scroll_menu_shop novisible shop-left">
                            <ul class="nobullets flex_column">
                                <li><span class="shop_shelf title_little">Portables</span>
                                    <ul class="nobullets">
                                        <li><a href="#">PC Portable</a></li>
                                        <li><a href="#">Macbook</a></li>
                                        <li><a href="#">Extension mémoire</a></li>
                                        <li><a href="#">Disque dur 2"1/2</a></li>
                                        <li><a href="#">Sacs & sacoches</a></li>
                                        <li><a href="#">Refroidisseur</a></li>
                                        <li><a href="#">Station d'accueil</a></li>
                                        <li><a href="#">Chargeur</a></li>
                                        <li><a href="#">Garantie</a></li>
                                        <li><a href="#">Batterie</a></li>
                                    </ul>
                                </li>
                                <li><span class="shop_shelf title_little">Fixes</span>
                                    <ul class="nobullets">
                                        <li><a href="#">Ordinateur PC fixe</a></li>
                                        <li><a href="#">Ordinateur Apple</a></li>
                                        <li><a href="#">Barebone</a></li>
                                    </ul>
                                </li>
                                <li><span class="shop_shelf title_little">Tablettes</span>
                                    <ul class="nobullets">
                                        <li><a href="#">Tablette</a></li>
                                        <li><a href="#">iPad</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><span class="shop-title" id="shop_comp&feat"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
                            </svg>
                            Périphériques & composants</span>
                        <div class="scroll_menu_shop novisible  shop-right1">
                            <ul class="nobullets flex_column">
                                <li><span class="shop_shelf title_little">Périphériques</span>
                                    <ul class="nobullets">
                                        <li><a href="#">Écran PC</a></li>
                                        <li><a href="#">Clavier/souris</a></li>
                                        <li><a href="#">Imprimante</a></li>
                                        <li><a href="#">Clef USB</a></li>
                                        <li><a href="#">Disque dur externe</a></li>
                                        <li><a href="#">Onduleur</a></li>
                                        <li><a href="#">Enceinte PC</a></li>
                                        <li><a href="#">Casque audio</a></li>
                                        <li><a href="#">Casque VR</a></li>
                                        <li><a href="#">Musique pro</a></li>
                                        <li><a href="#">Tablette graphique</a></li>
                                    </ul>
                                </li>
                                <li><span class="shop_shelf title_little">Boitier</span>
                                    <ul class="nobullets ">
                                        <li><a href="#">Alimentation</a></li>
                                        <li><a href="#">Disque dur</a></li>
                                        <li><a href="#">Disque SSD</a></li>
                                        <li><a href="#">Carte mère</a></li>
                                        <li><a href="#">Carte graphique</a></li>
                                        <li><a href="#">Mémoire PC</a></li>
                                        <li><a href="#">Processeur</a></li>
                                        <li><a href="#">Refroidissement</a></li>
                                        <li><a href="#">Kit upgrade PC</a></li>
                                        <li><a href="#">Batterie PC portable</a></li>
                                    </ul>
                                </li>
                                <li><span class="shop_shelf title_little">Imprimantes</span>
                                    <ul class="nobullets ">
                                        <li><a href="#">Cartouche</a></li>
                                        <li><a href="#">Toner</a></li>
                                        <li><a href="#">Ruban</a></li>
                                        <li><a href="#">Papier</a></li>
                                    </ul>
                                </li>
                                <li><span class="shop_shelf title_little">Connectique</span>
                                    <ul class="nobullets ">
                                        <li><a href="#">Câbles PC</a></li>
                                        <li><a href="#">Adaptateurs PC</a></li>
                                        <li><a href="#">Parafoudre</a></li>
                                        <li><a href="#">Multiprise</a></li>
                                        <li><a href="#">Câble secteur</a></li>
                                        <li><a href="#">Câble HDMI</a></li>
                                        <li><a href="#">Switch HDMI</a></li>
                                        <li><a href="#">Adaptateur HDMI</a></li>
                                        <li><a href="#">Câble RJ45</a></li>
                                        <li><a href="#">Connectique RJ45</a></li>
                                        <li><a href="#">Câble RJ11/RJ12</a></li>
                                        <li><a href="#">Câble audio numérique</a></li>
                                        <li><a href="#">Câble audiophile</a></li>
                                        <li><a href="#">Adaptateur Audio</a></li>
                                        <li><a href="#">Câble audio Jack</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><span class="shop-title" id="shop_mobiles"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                            </svg>
                            Téléphones</span>
                        <div class="scroll_menu_shop novisible shop-left">
                            <ul class="nobullets flex_column">
                                <li><span class="shop_shelf title_little">Mobile</span>
                                    <ul class="nobullets">
                                        <li><a href="#">Mobile & smartphone</a></li>
                                    </ul>
                                </li>
                                <li><span class="shop_shelf title_little">Accessoires</span>
                                    <ul class="nobullets">
                                        <li><a href="#">Carte mémoire</a></li>
                                        <li><a href="#">Étuis</a></li>
                                        <li><a href="#">Kit piéton/casque</a></li>
                                        <li><a href="#">Batterie</a></li>
                                        <li><a href="#">Accessoires iPhone</a></li>
                                        <li><a href="#">Chargeur</a></li>
                                        <li><a href="#">Câble & adaptateur</a></li>
                                        <li><a href="#">Station d'accueil</a></li>
                                        <li><a href="#">Pile & chargeur</a></li>
                                        <li><a href="#">Batterie téléphone</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><span class="shop-title " id="shop_smart-object"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" />
                            </svg> Objets connectés</span>
                        <div class="scroll_menu_shop novisible shop-right2">
                            <ul class="nobullets flex_column">
                                <li><span class="shop_shelf title_little">Maison</span>
                                    <ul class="nobullets">
                                        <li><a href="#">Caméra de surveillance</a></li>
                                        <li><a href="#">Détecteur & capteur</a></li>
                                        <li><a href="#">Kit alarme</a></li>
                                        <li><a href="#">Centrale multifonction</a></li>
                                        <li><a href="#">Enregistrement vidéo</a></li>
                                        <li><a href="#">Stations météo</a></li>
                                        <li><a href="#">Ampoule connectée</a></li>
                                        <li><a href="#">Enceinte connectée</a></li>
                                    </ul>
                                </li>
                                <li><span class="shop_shelf title_little">Loisirs</span>
                                    <ul class="nobullets">
                                        <li><a href="#">Drone</a></li>
                                        <li><a href="#">Gyropode</a></li>
                                        <li><a href="#">Accessoire drone</a></li>
                                        <li><a href="#">Montre connectée</a></li>
                                    </ul>
                                </li>
                                <li><span class="shop_shelf title_little">Sport</span>
                                    <ul class="nobullets">
                                        <li><a href="#">Montre running</a></li>
                                        <li><a href="#">Bracelet connecté</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </header>