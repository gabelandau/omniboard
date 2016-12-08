<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.css" />
        <link type="text/css" rel="stylesheet" href="assets/css/bootstrap-theme.css" />
        <link type="text/css" rel="stylesheet" href="assets/css/style.css" />
        <script src="assets/js/boostrap.js"></script>
        <title>OMIBoard</title>
    </head>

    <?php require("database.php") ?>

    <body>
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <form>
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" placeholder="Title">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" class="form-control" id="description" placeholder="Description">
                        </div>
                        <div class="form-group">
                            <label for="file">File</label>
                            <input type="file" id="file">
                            <p class="help-block">Max file size: 500MB</p>
                        </div>
                        <button type="submit" class="btn btn-default">Upload</button>
                    </form>
                </div>
            </div>
            <div class="col-md-8">
                <div class="panel panel-default">
                    <?php require("board.php") ?>
                </div>
            </div>
        </div>
    </body>
</html>
