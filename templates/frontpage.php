<?php

 include 'inc/header.php';

?>

<main role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div class="container">
      <h1 class="display-3">Hello, Welcome to Job Lister!</h1>
      <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. </p>
      <form action="index.php" method="GET" id="searchForm">
        <select name="category" class="form-control">
          <option value="" selected>Search by Category</option>
          <?php foreach($categories as $category): ?>
              <option value="<?= $category->id ?>"><?= $category->name?></option>
          <?php endforeach ?>
        </select>
      </form><br>
      <button class="btn btn-primary btn-lg" role="button" type="submit" form="searchForm">Find Job &raquo;</button>
    </div>
  </div>

  <div class="container">
    <!-- Example row of columns -->
    <h3><?= $title ?></h3><hr>

    <?php foreach($jobs as $job): ?>
    <div class="row">
      <div class="col-md-10">
        <h2><?= $job->job_title ?></h2>
        <p><?= $job->description ?></p>
      </div>
      <div class="col-md-2">
        <p><a class="btn btn-secondary" href="job.php?id=<?= $job->id?>" role="button">View details &raquo;</a></p>
      </div>
    </div>
    <?php endforeach ?>
      
    </div>

    <hr>

  </div> <!-- /container -->

</main>


<?php

 include 'inc/footer.php';

?>