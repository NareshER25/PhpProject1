<!DOCTYPE html>
<html>
    <head>
        <title>Addmission Form</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="form_valid.js" ></script>

        <link rel="stylesheet" href="form.css">
    </head>
    <body class="body">
        <form  action="file.php" method="POST" enctype="multipart/form-data">
           

                        <input id="choose" class="inpu mar col-sm-12 bg-transparent border-white border-top-0 border-start-0 border-end-0 text-white wid" type="file" name="choose"  placeholder="Upload Your photo" accept="image/jpeg">
                    <div id="choose_error" class="error blink"></div>
                    
                    <button id="su" class="sub col-sm-6 mt-3 border border-5 bg-white border-white rounded-pill text-center display-9 text-black " type="submit">Submit</button>
                
        </form>
    </body>
</html>
