<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title></title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- stylesheets -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <style>
        .custab {
            border: 1px solid #ccc;
            padding: 5px;
            margin: 5% 0;
            box-shadow: 3px 3px 2px #ccc;
            transition: 0.5s;
        }

        .custab:hover {
            box-shadow: 3px 3px 0px transparent;
            transition: 0.5s;
        }
    </style>

</head>
<body>
<div class="container">
    <div class="row col-md-6 col-md-offset-3 custyle">
        <table class="table table-striped custab">
            <thead>
            <br/>
            <a href="javascript:history.go(-1)" class="btn btn-primary btn-xs pull-right"><b><-</b> Back to Search </a>
            <tr>
                <th>ASIN</th>
                <th>Title</th>
                <th>Price</th>
                <th>Image</th>
                <th>Buy</th>
            </tr>
            </thead>
            <?php if (!is_null($_SESSION['items'])) { ?>
                <?php foreach ($_SESSION['items'] as $item) { ?>
                    <tr>
                        <td><?php echo $item['asin'] ?></td>
                        <td><?php echo $item['title'] ?></td>
                        <td><?php echo $item['lowestPrice'] ?></td>
                        <td><img src="<?php echo $item['mediumImage'] ?>"/></td>
                        <td><a href="<?php echo $item['url'] ?>" target="_blank"
                               class="btn btn-danger btn-xs pull-right">Buy Now </a></td>
                    </tr>
                <?php } ?>
            <?php } else { ?>
                <td><p>There is no result for yur search.</p></td>
            <?php } ?>
        </table>
    </div>
</div>

<!-- javascript/jQuery -->
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>
<![endif]-->
</body>
</html>

