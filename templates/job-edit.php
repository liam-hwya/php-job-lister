<?php include 'inc/header.php'; ?>

<div class="container mt-5">
    <h2 class="page-header">Edit Job Listing</h2>
    <form action="edit.php?id=<?=$job->id?>" method="POST" id="editForm">
        <div class="form-group">
            <label for="company">Company</label>
            <input type="text" name="company" class="form-control" value="<?=$job->company?>">
        </div>
        <div class="form-group">
            <label for="company">Cateogry</label>
            <select name="category" class="form-control">
            <option value="" selected>Search by Category</option>
            <?php foreach($categories as $category): ?>
                <option 
                    value="<?= $category->id ?>"
                    <?php echo ($job->category_id == $category->id)? "selected":""; ?>
                >
                    <?= $category->name?>
                </option>
            <?php endforeach ?>
            </select>
        </div>
        <div class="form-group">
            <label for="company">Job Title</label>
            <input type="text" name="job_title" class="form-control" value="<?=$job->job_title?>">
        </div>
        <div class="form-group">
            <label for="company">Description</label>
            <textarea name="description" cols="30" rows="10" class="form-control">
                <?=$job->description?>"
            </textarea>
        </div>
        <div class="form-group">
            <label for="company">Location</label>
            <input type="text" name="location" class="form-control" value="<?=$job->location?>">
        </div>
        <div class="form-group">
            <label for="company">Salary</label>
            <input type="text" name="salary" class="form-control" value="<?=$job->salary?>">
        </div>
        <div class="form-group">
            <label for="company">Contact User</label>
            <input type="text" name="contact_user" class="form-control" value="<?=$job->contact_user?>">
        </div>
        <div class="form-group">
            <label for="company">Contact Email</label>
            <input type="text" name="contact_email" class="form-control" value="<?=$job->contact_email?>">
        </div>
    </form>
    <button class="btn btn-primary" role="button" type="submit" name="submit" form="editForm">Update</button>
    
</div>

<?php include 'inc/footer.php'; ?>