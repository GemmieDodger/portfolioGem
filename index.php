<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta description="About Gemma, website designer and developer">
        <title>Gemma's Portfolio</title>
        <link rel="stylesheet" href="/portfolioGem/public/css/bootstrap.min.css"  type="text/css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="/portfolioGem/public/css/styles.css" type="text/css">   
        <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5e9ed92b81693d0012e58860&product=image-share-buttons&cms=website' async='async'></script>
        
        
    </head>
    <body>
        <?php
    require_once('connection.php');
        
    if (isset($_GET['controller']) && isset($_GET['action'])) {
        $controller = $_GET['controller'];
        $action     = $_GET['action'];
  } else {
        $controller = 'pages';

        $action = 'about';
  }

    require_once('views/layout.php');
        ?>

    </body>
</html>