<?php include 'inc/header.php'; ?>

<div class="container mt-5">
    <h2 class="page-header">Job Listing</h2>
    <form action="create.php" method="POST" id="createForm">
        <div class="form-group">
            <label for="company">Company</label>
            <input type="text" name="company" class="form-control">
        </div>
        <div class="form-group">
            <label for="company">Cateogry</label>
            <select name="category" class="form-control">
            <option value="" selected>Search by Category</option>
            <?php foreach($categories as $category): ?>
                <option value="<?= $category->id ?>"><?= $category->name?></option>
            <?php endforeach ?>
            </select>
        </div>
        <div class="form-group">
            <label for="company">Job Title</label>
            <input type="text" name="job_title" class="form-control">
        </div>
        <div class="form-group">
            <label for="company">Description</label>
            <textarea name="description" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="company">Location</label>
            <input type="text" name="location" class="form-control">
        </div>
        <div class="form-group">
            <label for="company">Salary</label>
            <input type="text" name="salary" class="form-control">
        </div>
        <div class="form-group">
            <label for="company">Contact User</label>
            <input type="text" name="contact_user" class="form-control">
        </div>
        <div class="form-group">
            <label for="company">Contact Email</label>
            <input type="text" name="contact_email" class="form-control">
        </div>
    </form>
    <button class="btn btn-primary" role="button" type="submit" name="submit" form="createForm">Create</button>
    
</div>

<?php include 'inc/footer.php'; ?>