<?php 
    include_once './config/init.php';
?>
<?php
 
$category=isset($_GET['category']) ? $_GET['category'] :null;


$job=new Job;
$template=new Templates('templates/template.php');
$template->jobs=$job->getAllJob();
$template->categorieslist=$job->getCategories();
$template->title="Latest Jobs";

if($category)
{
    $template->jobs=$job->getJobByCategory($category);
    $template->title="Jobs in ".$job->getCategory($category)[0]->name;
}
else
{
    $template->jobs=$job->getAllJob();
}
 echo $template;
?>
