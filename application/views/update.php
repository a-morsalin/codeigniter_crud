<?php include_once ('header.php');?>
    <div class="container">
        <h1>Update Post</h1>

        <?php echo form_open("welcome/change/{$post->id}",['class'=>'form-horizontal']) ;?>

        <div class="form-group">
            <div class="col-md-12">
                <label for="" class=control-label">Title</label>
                <?php echo form_input(['name'=>'title','placeholder'=>'Title','class'=>'form-control','value'=>set_value('title', $post->title)]); ?><br/>
                <?php echo form_error('title',"<div class='text-danger'>","</div>"); ?>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-12">
                <label for="" class=control-label">Description</label>
                <?php echo form_textarea(['name'=>'description','placeholder'=>'Description','class'=>'form-control','value'=>set_value('description',$post->description)]); ?><br/>
                <?php echo form_error('description',"<div class='text-danger'>","</div>"); ?>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-12">
                <?php echo form_submit(['name'=>'submit', 'value'=>'Update', 'class'=>'btn btn-warning']); ?>
                <?php echo anchor('welcome', 'Back', ['class'=>'btn btn-default']) ?>
            </div>
        </div>

    </div>
<?php include_once ('footer.php');?>