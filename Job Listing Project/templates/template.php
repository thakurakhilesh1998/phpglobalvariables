<?php
include_once 'inc/header.php';
?>
      <div class="jumbotron">
        <h1 class="display-3">Find A Job</h1>
        <form method="GET" action="index.php">
          <select name="category" class="form-control">
            <option value="0">Choose Category</option>
            <?php foreach($categorieslist as $cat): ?>
              <option value="<?php echo $cat->id; ?>"><?php echo $cat->name;?></option>
            <?php endforeach;?>
          </select>
              <br>
          <input type="submit" class="btn btn-success" value="Find">
        </form>
      </div>
      
     <h3> <?php echo $title; ?> </h3>
      <?php foreach($jobs as $job): ?>
      <div class="row marketing">
            <div class="col-md-10">
                <h4><?php echo $job->job_title; ?></h4>
                <p><?php echo $job->description;?> </p>
            </div>
            <div class='col-md-2'>
                <a class='btn btn-info' href="job.php?id=<?php echo $job->id; ?>">View</a>
            </div>
      </div>
      <?php endforeach; ?>
<?php
include_once 'inc/footer.php';    
?>