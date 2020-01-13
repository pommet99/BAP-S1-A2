    <body>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="photos/baby.jpg" class="d-block w-100" alt="image enfant-maman">
        </div>
        <div class="carousel-item">
            <img src="photos/baby2.jpg" class="d-block w-100" alt="image enfant-maman">
        </div>
        <div class="carousel-item">
            <img src="photos/baby3.jpg" class="d-block w-100" alt="image enfant-maman">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
</body>
<br><br><br>

<!-- Body  -->
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 id="titre1">Présentation</h2>
            <br>
            <p>FamoSport est une association sportive créer par Marion Choieb, l'on vise ici à sortir les femmes de leurs maison pour les encourager 
                à socialisé avec d'autres femmes comme elles. Le sport est une un créateur de liens, l'on encourage les femmes à être la meileure version 
                d'elles même et être en meilleur santé possible.
            </p>
            <br>
        </div>
    </div>

    <br><br><br>
    <hr>
    <br><br><br>

    <div class="row">
        <div class="col-12">
            <h2 id="titre2">Activités</h2>
            <br>
            <p>Voici un petit calendrier des évènements à venir</p>
            <br>
        </div>
    </div>

<br><br>
<hr>
<br><br><br>

        <div class="row">
        <div class="col-12">
            <h2 id="titre3">Envie de nous aider ? faites un don !</h2>
            <br>
            <iframe id="haWidget" allowtransparency="true" src="https://www.helloasso.com/associations/famosport/formulaires/1/widget-bouton" style="width:100%;height:70px;border:none;">
            </iframe><div style="width:100%;text-align:center;"><a href="https://www.helloasso.com" rel="nofollow"></a></div>
            <br>
            <iframe id="haWidget" allowtransparency="true" src="https://www.helloasso.com/associations/famosport/adhesions/adhesion-a-famosport/widget-bouton" style="width:100%;height:70px;border:none;"></iframe><div style="width:100%;text-align:center;"><a href="https://www.helloasso.com" rel="nofollow"></a></div>
        </div>
    </div>

    <br><br><br>
    <hr>
    <br><br><br>
    </div>
</div>
<br><br>


<div class="blog-post">
	<h2 class="blog-post-title"><?php the_title(); ?></h2>
	<p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>

 <?php the_content(); ?>

</div>