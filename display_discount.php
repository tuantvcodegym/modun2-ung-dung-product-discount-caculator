<html>
<head>
    <title>Product Discount Calculator</title>
    <style>
        #all{
            border: 1px solid #ccc;
            width: 500px;
            margin: auto;
        }
        table{
            margin-left: 100px;
        }
        h2{
            margin-left: 100px;
            color: darkslateblue;
        }
    </style>
</head>
<body>
<div id="all">
    <h2>Product Discount Calculator:</h2>
    <table width="300px" height="100px">
        <tr>
            <td>list Price:</td>
            <td><?php echo $_POST["descripttion"]?></td>
        </tr>
        <tr>
            <td>Discount Percent:</td>
            <td><?php echo $_POST["percent"]."%"?></td>
        </tr>
        <tr>
            <td>Discount Amount:</td>
            <td><?php tinh()?></td>
        </tr>
        <tr>
            <td>Discount Price:</td>
            <td><?php tru()?></td>
        </tr>
    </table>
</div>
<?php
    function tinh(){
        $price = $_POST["price"];
        $percent = $_POST["percent"];
        $pheptinh = $price*$percent*0.1;
        echo $pheptinh;
    }
    function tru(){
        $price = $_POST["price"];
        $percent = $_POST["percent"];
        $pheptinh = $price*$percent*0.1;
        echo $pheptinh - $price;
    }
?>
</body>
</html>