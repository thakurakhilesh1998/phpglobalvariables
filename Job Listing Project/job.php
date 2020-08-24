<?php 
    include_once './config/init.php';
?>
<?php
 
$job_id=isset($_GET['id']) ? $_GET['id'] :null;
$job=new Job;

if(isset($_POST['del_id']))
 {
     $del_id=$_POST['del_id'];
     if($job->deleteJob($del_id))
     {
         redirect("index.php","job deleted successfully","success");
     }
     else
     {
        redirect("index.php","job not deleted successfully","error");
     }
 }

$template=new Templates('templates/job_details.php');
$template->jobs=$job->getAllJobDetails($job_id);
echo $template;
?>