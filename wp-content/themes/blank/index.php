<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>TITLE</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">

</head>

<body>
    <h1>
        This is an h1.
    </h1>
    <h3>
        <?php
        $site_title = get_bloginfo('name');
        $site_url = network_site_url('/');
        $site_description = get_bloginfo('description');
        echo 'The Network Home URL is: ' . $site_url;
        echo "<br>";
        echo 'The Network Home Name is: ' . $site_title;
        echo "<br>";
        echo 'The Network Home Tagline is: ' . $site_description;
        ?>
    </h3>
</body>