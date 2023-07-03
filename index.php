<?php
    /**
    * Written by Flen Plnens
    * Version: 1.0
    * https://github.com/Flen-Plnens/DirectoryNavigator
    */
    require_once __DIR__ . '/config.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="theme-color" content="#f2f2f2">
    <title><?php echo BROWSER_TITLE; ?></title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1><?php echo PAGE_TITLE; ?></h1>
    </header>
    <ul>
        <?php
        $directories = array_filter(glob('*'), 'is_dir');
        $basePath = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

        foreach ($directories as $directory) {
            $url = (USE_HTTPS ? 'https://' : 'http://') . $basePath . $directory;
            $title = '';

            $indexFile = $directory . '/index.txt';
            if (file_exists($indexFile)) {
                $indexContent = file_get_contents($indexFile);
                $titlePattern = '/title=(.+)/';
                preg_match($titlePattern, $indexContent, $matches);
                if (isset($matches[1])) {
                    $title = $matches[1];
                }
            }

            if (!empty($title)) {
                echo "<li><a href='$url'>$title</a></li>";
            } else {
                echo "<li><a href='$url'>$url</a></li>";
            }
        }
        ?>
    </ul>
</body>
</html>
