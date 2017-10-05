<?php include_once ('header.php');?>
    <div class="container">

        <h1>Add New Post</h1>

        <?php echo form_open('welcome/save',['class'=>'form-horizontal']) ;?>

        <div class="form-group">
            <div class="col-md-12">
                <label for="" class=control-label">Title</label>
                <?php echo form_input(['name'=>'title','placeholder'=>'Title','class'=>'form-control']); ?><br/>
                <?php echo form_error('title',"<div class='text-danger'>","</div>"); ?>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-12">
                <label for="" class=control-label">Description</label>
                <?php echo form_textarea(['name'=>'description','placeholder'=>'Description','class'=>'form-control']); ?><br/>
                <?php echo form_error('description',"<div class='text-danger'>","</div>"); ?>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-12">
                <?php echo form_submit(['name'=>'submit', 'value'=>'Submit', 'class'=>'btn btn-default']); ?>
                <?php echo anchor('welcome', 'Back', ['class'=>'btn btn-default']) ?>
            </div>
        </div>

    </div>
<?php include_once ('footer.php');?>