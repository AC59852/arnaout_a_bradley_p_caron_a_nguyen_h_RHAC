<?php 

    require_once '../load.php';
    confirm_logged_in();

    $info_table = 'tbl_moreInfo';
    $about_table = 'tbl_aboutInfo';

    $getTblInfo = getAll($info_table);
    $getTblAbout = getAll($about_table);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
</head>
<body>
    <h2>Hello, <?php echo $_SESSION['user_name']; ?></h2>
    <?php echo !empty($message)? $message: ''?>

    <div>
        <?php while($row = $getTblInfo->fetch(PDO::FETCH_ASSOC)):?>
        <div class="info">
            <h2><?php echo $row['info_title']?></h2>
            <p><?php echo $row['info_para1']?></p>
            <p><?php echo $row['info_para2']?></p>
            <p><?php echo $row['info_para3']?></p>
            <a href="admin_deleteinfo.php?id=<?php echo $row['info_id']; ?>">Delete</a>
        </div>
        <?php endwhile;?>

        <form action="admin_addinfo.php" method="post">
        <label>Info Title:</label>
        <input type="text" name="name" value="" required>

        <label>Info Content 1:</label>
        <textarea name="infopara1"></textarea>

        <label>Info Content 2:</label>
        <textarea name="infopara2"></textarea>

        <label>Info Content 3:</label>
        <textarea name="infopara3"></textarea>

        <button type="submit" name="infosubmit">Submit Info</button>
    </form>

        <?php while($row = $getTblAbout->fetch(PDO::FETCH_ASSOC)):?>
        <div class="info">
            <h2><?php echo $row['para']?></h2>
            <h2><?php echo $row['para2']?></h2>
        </div>
        <?php endwhile;?>
    </div>

    <div>
    <?php echo !empty($message)? $message: ''?>

        <div>
        <form action="admin_addabout.php" method="post" enctype="multipart/form-data">
        <label>About Image</label>
        <input type="file" name="aboutimg" value="">


        <label>About Description 1</label>
        <textarea name="aboutdesc1"></textarea>

        <label>About Description 2</label>
        <textarea name="aboutdesc2"></textarea>

        <button type="submit" name="aboutSubmit">Add Product</button>
    </form>

        </div>

    </div>

    <div>

    </div>
</body>
</html>