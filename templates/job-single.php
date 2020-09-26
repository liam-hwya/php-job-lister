<?php include 'inc/header.php' ?>

<div class="container mt-5">
    <h2 class="page-header">
        <?= $job->job_title ?> (<?= $job->location ?>)
    </h2>
    <small>
        Posted by <?= $job->contact_user ?> // <?= $job->post_date?>
    </small>
    <p><?= $job->description ?></p>
    <ul class="list-group">
        <li class="list-group-item"><strong>Company : </strong><?= $job->company?></li>
        <li class="list-group-item"><strong>Salary : </strong><?= $job->salary?></li>
        <li class="list-group-item"><strong>Contact : </strong><?= $job->contact_email?></li>
    </ul>
    <br><br>
    <a href="edit.php?id=<?= $job->id?>" class="btn btn-primary">Edit</a>
    <form action="job.php" method="POST" style="display: inline;">
        <input type="hidden" name="job_id" value="<?=$job->id?>">
        <input type="submit" value="Delete" class="btn btn-danger">
    </form>
    <br><br>
    <a href="index.php">Go Back</a> 
    
</div>


<?php include 'inc/footer.php' ?>
