<?php 
    include_once './config/init.php';
?>

<?php
$job=new Job;

$job_id=isset($_GET['id']) ? $_GET['id'] : null;
if(isset($_POST['submit']))
{
    $data=array();
    $data['job_title']=$_POST['job_title'];
    $data['company']=$_POST['company'];
    $data['category']=$_POST['category'];
    $data['description']=$_POST['description'];
    
    $data['location']=$_POST['location'];
    $data['salary']=$_POST['salary'];
    
    $data['contact_user']=$_POST['contact_user'];
    $data['contact_email']=$_POST['contact_email'];

    if($job->updateJob($job_id,$data))
    {
        echo "success";
        redirect("index.php","Your Job is listed Successfully","success");
    }
    else
    {
        echo "faliure";
        redirect("index.php","Something went wrong","failure");
    }
    
}

$template=new Templates('templates/edit_job.php');
$template->categorieslist=$job->getCategories();
$template->job_details=$job->getAllJobDetails($job_id);
echo $template;
?>

