<?php require 'header.php';?>
<div class="container">
 <div class="card mt-5">
 <div class="card-header">
     <h2>Update person</h2>
</div>
<div class="card-body">
    <?php if(!empty($message)):?>
    <div class="alert alert-success">
        <?=$message; ?>
    </div>
    <?php endif; ?>
    <form method="POST" action="import.php" method="post" name="upload_excel"
    enctype="multipart/form-data">
    <div class ="form-group">
        <label >Upload Excel file</label>
        <input type="file" name="file" id="name">
    </div>
    <div class ="form-group">
        <button type="submit" name="Import" class="btn btn-primary button-olading"
        data-loading-text="Loading...">Upload </button>
    </div>
</form>
</div>
</div>
</div>