<?php 
    include_once './config/init.php';
?>
<?php
 
$job_id=isset($_GET['id']) ? $_GET['id'] :null;
$job=new Job;
$template=new Templates('templates/job_details.php');
$template->jobs=$job->getAllJobDetails($job_id);
echo $template;
?>