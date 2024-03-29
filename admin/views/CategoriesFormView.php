<?php 
    //load file Layout.php vao day
    $this->fileLayout = "Layout.php";
 ?>
 <div class="col-md-12" style="font-size: 16px;"> 
    <div class="panel panel-primary">
        <div class="panel-heading">Add edit category</div>
        <div class="panel-body">
        <form method="post" action="<?php echo $action; ?>">
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Name</div>
                <div class="col-md-10">
                    <input style="font-size: 16px;" type="text" value="<?php echo isset($record->name)?$record->name:""; ?>" name="name" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->  
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Category</div>
                <div class="col-md-10">
                    <select name="parent_id">
                        <option value="0"></option>
                        <?php 
                            $categories = $this->modelCategories();
                        ?>
                         <?php foreach($categories as $rows): ?>
                            <option <?php if(isset($record->parent_id)&&$record->parent_id==$rows->id): ?> selected <?php endif; ?> value="<?php echo $rows->id; ?>"><?php echo $rows->name; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <!-- end rows -->          
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <input type="submit" style="font-size: 16px;" value="Process" class="btn btn-primary">
                </div>
            </div>
            <!-- end rows -->
        </form>
        </div>
    </div>
</div>