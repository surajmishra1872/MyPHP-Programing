<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link href="main.css" rel="stylesheet">
</head>

<body>
    <div id="outer">
        <?php include 'header.php';?>
        <?php include 'menu.php';?>

        <div id="content">
            <div id="left">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                software like Aldus PageMaker including versions of Lorem Ipsum.
                <ul>
                    <li> Lorem Ipsum is simply</li>
                    <li> dummy text of the printing</li>
                    <li> Lorem Ipsum is simply</li>
                </ul>
            </div>
            <?php include 'right.php';?>
            <!--  <?php include 'right.php';?>-->
        </div>
        <?php include 'footer.html';?>
        <!--  <?php include 'footer.html';?>-->
    </div>
</body>

</html>