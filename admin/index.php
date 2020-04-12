<?php 

    require_once '../load.php';
    confirm_logged_in();

    $info_table = 'tbl_moreInfo';
    $about_table = 'tbl_aboutInfo';
    $partners_table = 'tbl_newPartner';

    $getTblInfo = getAll($info_table);
    $getTblAbout = getAll($about_table);
    $getTblPartner = getAll($partners_table);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.typekit.net/wvm1igw.css">
    <link rel="stylesheet" href="../public/css/reset.css">
    <link rel="stylesheet" href="../public/css/main.css">
    <title>Admin Panel</title>
</head>
<body>
    <div class="adminheading">
    <h2>Hello, <?php echo $_SESSION['user_name']; ?></h2>
    <a class="adminLogout" href="admin_logout.php">Sign Out</a>
</div>
<?php echo !empty($message)? $message: ''?>
    <div class="answersAdmin">
        <h1>I Need Answers Section</h1>
        <?php while($row = $getTblInfo->fetch(PDO::FETCH_ASSOC)):?>
        <div class="infoAdmin">
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
    </div>
    
    <div class="answersAdmin">
    <h1>About Section</h1>
        <?php while($row = $getTblAbout->fetch(PDO::FETCH_ASSOC)):?>
            <div class="infoAdmin">
                <p><?php echo $row['para']?></p>
                <p><?php echo $row['para2']?></p>
            </div>
            <?php endwhile;?>
    <div>
    <?php echo !empty($message)? $message: ''?>

        <div>
        <form action="admin_addabout.php" method="post" enctype="multipart/form-data">

        <label>About Description 1</label>
        <textarea name="aboutdesc1"></textarea>

        <label>About Description 2</label>
        <textarea name="aboutdesc2"></textarea>

        <button type="submit" name="aboutSubmit">Add Product</button>
    </form>

        </div>
    </div>
    </div>

    <div class="partnersAdmin">
    <h1>Partners Section</h1>
        <?php while($row = $getTblPartner->fetch(PDO::FETCH_ASSOC)):?>
            <div class="info">
                <img src="../public/images/<?php echo $row['img']?>">
                <h2><?php echo $row['name']?></h2>
                <a href="admin_deletepartner.php?id=<?php echo $row['id']; ?>">Delete</a>
            </div>
            <?php endwhile;?>
    </div>
    <div>
    <form action="admin_addpartner.php" class="partnerForm" method="post" enctype="multipart/form-data">
            <label>Partner Image</label>
            <input type="file" name="partnerimg" value="">

            <label>Partner Name</label>
            <input type="text" name="partnername" value=""></input>

            <label>Partner Link (Optional)</label>
            <input type="text" name="partnerlink" value=""></input>
            
        <button type="submit" name="partnerSubmit">Add Product</button>
    </form>
    </div>

</body>
</html>