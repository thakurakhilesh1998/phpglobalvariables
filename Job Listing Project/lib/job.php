<?php

class Job{

    private $db;
    public function __construct()
    {
        $this->db=new Database;
    }
    
    //Get All Jobs

    public function getAllJob()
    {
        $this->db->query("SELECT jobs.*, categories.name 
        AS cname FROM jobs INNER JOIN categories ON jobs.category_id=categories.id ORDER BY post_date DESC");
        $results=$this->db->resultset();
        return $results;
    }


    public function getCategories()
    {
        $this->db->query("SELECT * FROM categories");
        $results=$this->db->resultset();
        return $results;
    }

    public function getJobByCategory($catid)
    {
        $this->db->query("SELECT jobs.*, categories.name 
        AS cname FROM jobs INNER JOIN categories ON jobs.category_id=categories.id WHERE jobs.category_id=$catid ORDER BY post_date DESC");
        $results=$this->db->resultset();
        return $results;
    }

    public function getCategory($category_id){
        $this->db->query("SELECT * FROM categories WHERE id = $category_id LIMIT 1");
        $results=$this->db->resultset();
        return $results;
    }

    public function getAllJobDetails($job_id)
    {
        $this->db->query("SELECT * FROM jobs WHERE id = $job_id");
        $results=$this->db->resultset();
        return $results[0];
    }
}
?>