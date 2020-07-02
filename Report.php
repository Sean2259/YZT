<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta charset="UTF-8">
    <title>Report</title>
    <link rel="icon" href="">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/Report.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>
    <div class="header" style="color: white;"><H1>Yuan Ze Toilet</H1></div> <!--  上方的Title  -->
    <div id="a"> 
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="About.html">About</a></li>
            <li><a href="Content.html">Content</a></li>
            <li><a href="">Report</a></li>
        </ul>   
    </div>
    <div>
    <h3 id="h3">您的表單回報</h3>
    <form name="1" method="post" action="Report.html">
        <table>
            <tr>
                <td>回報的地點:</td>
                <td><?php echo $_POST['Name']?></td>
            </tr>
            <tr>
                <td>損壞的物品:</td>
                <td>
                    <?php echo $_POST['object']?>
                </td>
            </tr>
            <tr>
                <td>損壞情形:</td>
                <td><?php echo $_POST['qu1']?></td>
            </tr>
            <tr>
                <td>損壞原因:</td>
                <td>
                    <?php 
                        switch($_POST['grade']){
                            case 1:
                                echo "人為毀損";
                            break;
                            case 2:
                                echo "自然破損";
                            break;
                            case 3:
                                echo "不明原因";
                            break;
                        }
                        ?>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: right"><input type="button" name="back" onclick="history.back()" value="回表單"></td>
            </tr>
        </table>
    </form>
    </div>

</body>
</html>