<?php
session_start();
?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ISIDETTE</title>

    <!-- Bootstrap core CSS -->
    <!-- <link href="../css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
        integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <!-- Bootstrap core JS -->
    <!-- <script src="../js/bootstrap.min.js"></script> -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ"
        crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"
        integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd"
        crossorigin="anonymous"></script>
    <!-- Style CSS -->
    <link href="../css/style.css" rel="stylesheet">
    <!-- Script JS -->
    <script src="../js/script.js"></script>
    <!-- Jquery core JS -->
    <!-- <script src="../js/jquery-1.12.4.min.js"></script> -->
</head>

<body>
    <header class="navbar sticky-top flex-md-nowrap">
        <div class="container">
            <div class="row">
                <div id="logo">
                    <img src="../images/logoISI.png">
                </div>
            </div>
        </div>

    </header>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="bloc-img">
                    <img src="https://image.freepik.com/free-vector/tiny-teachers-with-educational-tools-stationery-isolated-flat-vector-illustration-cartoon-teachers-different-disciplines-as-geography-math-physical-culture-education-school-concept_74855-13261.jpg">
                </div>
                <div class="bloc-text">
                    <p>
                        
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item active">
                        <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab"
                            aria-controls="login" aria-selected="true">Connexion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="signup-tab" data-toggle="tab" href="#signup" role="tab"
                            aria-controls="signup" aria-selected="false">Inscription</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade active in" id="login" role="tabpanel" aria-labelledby="login-tab">
                        <form action="login_prof.php" method="post">


                            <div>
                                <input type="text" name="username" placeholder="E-mail" required id="user_login">
                            </div>
                            <div>
                                <input type="password" name="password" placeholder="mot de passe" required
                                    id="password">
                            </div>
                            <div>
                                <button type="submit" name="submit">Se connecter</button>
                            </div>

                            <?php if (isset($_GET['log'])) { ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $_GET['log']; ?>
                            </div>
                            <?php } ?>

                        </form>
                    </div>
                    <div class="tab-pane fade" id="signup" role="tabpanel" aria-labelledby="signup-tab">
                        <form action="register_prof.php" method="post">
                            <div>
                                <label></label>
                                <input type="text" placeholder="Prénom de l'enseignant" name="prenom" required
                                    id="user_login_register">
                            </div>
                            <div>
                                <label></label>
                                <input type="text" placeholder="Nom de l'enseignant" name="nom" required id="user_logi">
                            </div>
                            <div>
                                <label></label>
                                <input type="email" placeholder="Email institutionnel" id="mail" required name="mail">
                            </div>
                            <div>
                                <label></label>
                                <input name="password" required type="password"
                                    placeholder="Mot de passe">
                            </div>
                            <div>
                                <label></label>
                                <input name="repass" placeholder="confirmez votre mot de passe" required
                                    type="password">
                            </div>
                            <div>
                                <label>Département</label>
                                <select name="Departement" id="diplome">
                                    <option value="math">math appliqué</option>
                                    <option value="informatique">informatique</option>
                                    <option value="électronique">electronique</option>
                                    <option value="langues">langues</option>
                                    <option value="physique">physique</option>

                                </select>
                            </div>

                            <div>
                                <button type="submit" name="submit">Inscription</button>
                            </div>

                            <?php if (isset($_GET['error'])) { ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $_GET['error']; ?>
                            </div>
                            <?php } ?>


                            <?php if (isset($_GET['success'])) { ?>
                            <div class="alert alert-dismissible alert-success">
                                <?php echo $_GET['success']; ?>
                            </div>
                            <?php } ?>

                        </form>

                    </div>
                </div>
            </div>
        </div>


</body>

</html>