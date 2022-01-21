<!DOCTYPE html>
<html lang="en">
<head>
    <title>Images</title>
</head>
<body>
<p><?= anchor('upload', 'Upload File') ?></p>

    <?php 
        foreach ($result->getResult() as $image) :
    ?>

            <a target="_blank" href="<?php echo base_url($image->FileName); ?>">
            </br>
                <img height="150px" width="150px" src="<?php echo base_url($image->FileName); ?>"title="<?php echo $image->Title ?>">
            </a>
            <?php echo $image->Title ?>


    <?php endforeach; ?>


</body>
</html>