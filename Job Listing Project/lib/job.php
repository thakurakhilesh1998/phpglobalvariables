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

    public function createJob($data)
    {
        $this->db->query("INSERT INTO jobs(`category_id`, `company`, `job_title`, `description`, `salary`, `location`, `contact_user`, `contact_email`) 
        VALUES(:category_id,:company,:job_title,:description,:salary,:location,:contact_user,:contact_email)");

        $this->db->bind(":category_id",$data['category']);
        $this->db->bind(":company",$data['company']);
        $this->db->bind(":job_title",$data['job_title']);
        $this->db->bind(":description",$data['description']);
        $this->db->bind(":salary",$data['salary']);
        $this->db->bind(":location",$data['location']);
        $this->db->bind(":contact_user",$data['contact_user']);
        $this->db->bind(":contact_email",$data['contact_email']);

        if($this->db->execute())
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}
?>