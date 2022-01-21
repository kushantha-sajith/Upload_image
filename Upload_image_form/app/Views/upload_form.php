<!DOCTYPE html>
<html lang="en">

<head>
    <title>Upload Images</title>
    <link rel="stylesheet" href="<?php echo base_url('css/style.css'); ?>">
</head>

<body>
    <?php foreach ($errors as $error) : ?>
        <li><?= esc($error) ?></li>
    <?php endforeach ?>

    <?= form_open_multipart('upload/upload') ?>
    <h3>Upload Images</h3>

    <label>Title of the image : </label>
    <input type="text" name="title" placeholder="Enter title here..." /><br>

    <label>Image : </label>
    <input type="file" name="userfile" size="20" />

    <br /><br />

    <input type="submit" value="Upload" />
    <p class="btn"><?= anchor('viewimages', 'View Uploaded Images') ?></p><br>

    </form>

</body>

</html>