<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="robots" content="noindex, nofollow">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>.htaccess status</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        html {position: relative; min-height: 100%;}
        body {margin-bottom: 60px;}
        .alert h2 {margin:10px;}
        .alert a {color:#a94442; text-decoration: underline;}
        .alert a:hover {color:#D9534F;}
        .alert-info {margin-top: 10%; opacity: 0.7;}
        a {color:#4385F5;}
        a:hover {color:#4385F5;}
        footer {background-color: #f5f5f5; position: absolute; bottom: 0; width: 100%; height: 60px;}
        footer p {margin: 20px 0;}
        textarea {border-radius:4px; border-color: rgba(0, 0, 0, 0.3);background-color: #272822; color:#75715D;padding:16px;font-family: 'Lucida Console', 'Lucida Sans Typewriter', monaco, 'Bitstream Vera Sans Mono', monospace;}
    </style>
  </head>
  <body>
    <div class="jumbotron">
      <div class="container">
        <h1>Apache .htaccess status.</h1>
        <p>This page will show an <span class='label label-danger'>Error</span> if an .htaccess file is not present. You can then use a tool like <a href="https://www.statuscake.com" target="_blank">StatusCake</a> or <a href="https://www.pingdom.com">Pingdom</a> to monitor this page's URL and alert you if a desired status phrase string isn't found on the page by the monitor.</p>
      </div>
    </div>
    <div class="container">
      <?php
        if (is_readable(__DIR__.'/.htaccess') ) {
            echo "<div class='alert alert-success' role='alert'><h2><span class='label label-success'>Ok</span> <span class='lead'>The .htaccess file exists and is readable to the webserver.</span></div>";
            
            // ================ DISPLAY THE .HTACCESS TO VISITORS ================
            // It's not recomended to leave this uncommented for more than a short period.
            //
            // Uncomment the 4 lines below to display the .htaccess inline, right on the page.
            //
            // echo "<h3>File contents:</h3>";
            // echo "<textarea style='width: 100%; height: 400px;'>";
            // echo file_get_contents(__DIR__.'/.htaccess');
            // echo "</textarea>";

        } else {
            echo "<div class='alert alert-danger' role='alert'><h2><span class='label label-danger'>Error</span> <span class='lead'>The .htaccess file does not exist or it is not readable to the webserver.</div>";
        }
      ?>
      <div class="row">
        <div class="col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-3">
          <div class="alert alert-info" role="alert"> <strong>Did you know?</strong> This file can also be used to let other people see your site's live .htaccess file without granting them FTP access. Simply open this php file in your favorite code editor and uncomment the lines for "Display the htaccess to visitors".</div>
        </div>
      </div>
    </div> <!-- /.container -->
    <footer>
      <div class="container">
        <p class="text-muted text-center"><small>Made with love by: <a href="https://github.com/JayHoltslander">Jay Holtslander</a></small></p>
      </div>
    </footer>
</body>
</html>