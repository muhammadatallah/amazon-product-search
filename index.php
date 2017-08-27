<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Amazon Product Search</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- stylesheets -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
</head>
<body>
<form class="form-horizontal" action="amazonAPI.php">
    <fieldset>

        <!-- Form Name -->
        <legend class="text-center">Amazon Product Search</legend>


        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="search">Search for product</label>

            <div class="col-md-4">
                <input id="search" name="search" type="text" placeholder="Search Keyword" class="form-control input-md">
                <span class="help-block">type UPC, ASIN, EAN code  (ex: 4005556154142)
                                         <br/>OR product title (ex:Harry) </span>
            </div>
        </div>
        <div id="filter">
            <!-- Select Basic -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="category">Category</label>

                <div class="col-md-4">
                    <select name="category" id="category" class="form-control">
                        <option value="All">ALL</option>
                        <option value="Books">Books</option>
                        <option value="DVD">DVD</option>
                        <option value="Apparel">Apparel</option>
                        <option value="Automotive">Automotive</option>
                        <option value="Electronics">Electronics</option>
                        <option value="GourmetFood">GourmetFood</option>
                        <option value="Kitchen">Kitchen</option>
                        <option value="Music">Music</option>
                        <option value="PCHardware">PCHardware</option>
                        <option value="PetSupplies">PetSupplies</option>
                        <option value="Software">Software</option>
                        <option value="SoftwareVideoGames">SoftwareVideoGames</option>
                        <option value="SportingGoods">SportingGoods</option>
                        <option value="Tools">Tools</option>
                        <option value="Toys">Toys</option>
                        <option value="VHS">VHS</option>
                        <option value="VideoGames">VideoGames</option>
                    </select>
                </div>
            </div>

            <!-- Select Basic -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="country">Country</label>

                <div class="col-md-4">
                    <select name="country" id="country" class="form-control">
                        <option value="us">United States</option>
                        <option value="de">Germany</option>
                        <option value="uk">United Kingdom</option>
                        <option value="ca">Canada</option>
                        <option value="fr">France</option>
                        <option value="jp">Japan</option>
                        <option value="it">Italy</option>
                        <option value="cn">China</option>
                        <option value="es">Spain</option>
                    </select>
                </div>
                </div>
        </div>
        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="submit"></label>

            <div class="col-md-4">
                <button id="submit" name="submit" class="btn btn-primary">Search</button>
            </div>
        </div>

    </fieldset>
</form>


<!-- javascript/jQuery -->
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script>
    $('#product').on('change', function () {
        if (this.value == 'code') {
            $('#filter').hide("fast", function () {
                $('#filter').hide("fast", arguments.callee);
            });
        } else {
//            $('#filter').show(
        }
    });

</script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>
<![endif]-->
</body>
</html>