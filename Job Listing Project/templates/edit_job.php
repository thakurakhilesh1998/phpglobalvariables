<?php
include_once 'inc/header.php';
?>
<h2 class="page-header">Edit Job Listing</h2>
<form method="POST" action="edit.php?id=<?php echo $job_details->id; ?>">
    <div class="form-group">
        <label>Company</label>
    <input type="text" class="form-control" name="company" value="<?php echo $job_details->company;?>">
    </div>
    <div class="form-group">
        <label>Category</label>
    <select class="form-control" name="category">
        <option value="0">Choose Category</option>
        <?php foreach($categorieslist as $catlist):?>

            <?php if($job_details->category_id==$catlist->id): ?>
            <option value="<?php echo $catlist->id;?>" selected><?php echo $catlist->name;?></option>
            <?php else: ?>
                <option value="<?php echo $catlist->id;?>"><?php echo $catlist->name; ?></option>
            <?php endif;?>

        <?php endforeach;?>
    </select>
    </div>
    <div class="form-group">
        <label>Job Tile</label>
    <input type="text" class="form-control" name="job_title" value="<?php echo $job_details->job_title;?>">
    </div>

    <div class="form-group">
        <label>Description</label>
    <textarea class="form-control" name="description"><?php echo $job_details->description;?></textarea>
    </div>

    <div class="form-group">
        <label>Location</label>
    <input type="text" class="form-control" name="location" value="<?php echo $job_details->location;?>">
    </div>

    <div class="form-group">
        <label>Salary</label>
    <input type="text" class="form-control" name="salary" value="<?php echo $job_details->salary;?>">
    </div>

    <div class="form-group">
        <label>Contact User</label>
    <input type="text" class="form-control" name="contact_user" value="<?php echo $job_details->contact_user;?>">
    </div>
    <div class="form-group">
        <label>Contact Email</label>
    <input type="text" class="form-control" name="contact_email" value="<?php echo $job_details->contact_email;?>">
    </div>

    <input type="submit" class="btn btn-success" value="submit" name="submit">
</form>
<?php
include_once 'inc/footer.php';    
?>