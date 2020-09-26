<?php

 include_once 'config/init.php';

 $job = new Job;

 if(isset($_POST['job_id'])){
     $job_id = $_POST['job_id'];
     if($job->delete($job_id)){
         redirect('index.php','Job has been removed from the list','success');
     }else{
         redirect('index.php','It doesn\'t work','error');
     }
 }

 $template = new Template('templates/job-single.php');

 $job_id = isset($_GET['id'])? $_GET['id']:NULL;

 
 $template->job = $job->getJob($job_id);

 echo $template;

?>