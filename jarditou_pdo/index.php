<?php
if (file_exists("controller/functions.php") ) 
{
    include("controller/functions.php");
} 
else 
{
    echo "The file functions does not exist";
} 
?>

<?=template_header('')?>

    <!-- navbar -->
    <div class="row">
        <nav class="navbar navbar-expand-lg navbar-light bg-light col-12">
            <a class="navbar-brand" href="#">Jarditou</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                    <a class="nav-link" href="#">Accueil</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="views/liste.php">Tableau</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="views/contact.php">Contact</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Votre promotion" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </div>
    <!--promo banner -->
    <div class="row">
        <img src="src/img/promotion.jpg" class="image-fluid w-100" alt="promotion" title="promotion">    
    </div>
    <!-- main -->
    <main class="max-width">
        <div class="row">
            <!-- left column -->
            <div id="leftColumnAccueil" class="col-12 col-sm-6 col-md-7 col-lg-8 col-xl-9">
                    <h3>Nouveaux clients</h3>
                    <h5>Veuillez saisir vos coordonnées</h5>
                <form class="row g-3 needs-validation" novalidate>
                    <div class="col-md-6">
                        <label for="validationCustom01" class="form-label">First name</label>
                        <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom02" class="form-label">Last name</label>
                        <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="validationCustom02" class="form-label">Email</label>
                        <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom02" class="form-label">Username</label>
                        <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom03" class="form-label">Password</label>
                        <input type="text" class="form-control" id="validationCustom03" required>
                        <div class="invalid-feedback">
                            Please provide a valid city.
                        </div>
                    </div>

                    <div class="col-md-3">
                        <label for="validationCustom05" class="form-label">Zip</label>
                        <input type="text" class="form-control" id="validationCustom05" required>
                        <div class="invalid-feedback">
                            Please provide a valid zip.
                        </div>
                    </div>

                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Submit form</button>
                    </div>
                </form>

            </div>
            <!-- right column -->
            <div id="rightColumn" class="col-12 col-sm-6 col-md-5 col-lg-4 col-xl-3 bg-warning text-center p-3">
                <h4>[Colonne de droite]</h4>
            </div>
        </div>        
    </main>
    <br>
    <!-- navbar -->
    <div class="row">
        <nav class="navbar navbar-expand-lg navbar-light bg-dark col-12">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link text-white" href="views/mentions_legale.html">mentions légales</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link text-white" href="views/horaires.html">horaires</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link text-white" href="views/plan_du_site.html">plan du site</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>


       
<?=template_footer()?>


