<?php include_once ('header.php');?>
    <div class="container">

        <h1>View Post Data</h1>
        <hr/>
            <h4><?php echo $post->title; ?></h4>
            <small><?php echo $post->date_created; ?></small>
            <p><?php echo $post->description; ?></p>
        <hr/>
        <div class="pull-right">

            <?php echo anchor('welcome', 'Back', ['class'=>'btn btn-default']) ?>
        </div>

    </div>
<?php include_once ('footer.php');?>