<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multimedia Interface</title>
    <style>
        header {
            z-index: -1;
            height: 30%;
            width: 91%;
            left: 0;
            font: bold;
            font-family: 'Script MT';
            border-style: solid;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            background-color: #333333; /* Darker background color */
        }

        a:link {
            color: lightgray;
            
        }

        a:visited {
            color: lightgray;
        }

        a:hover {
            color: white;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: black; /* Updated background color */
            color: #FFFFFF; /* Updated text color to white */
        }

        .logo {
            align-self: flex-end;
            max-width: 70px;
            max-height: 70px;
        }

        

        .folder-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px 20px;
            
            
        }

        .folder {
            text-align: center;
            margin-top: 15px;
        }

            .folder img {
                max-width: 100px;
                max-height: 100px;
                
            }

        .folder-caption {
            margin-top: 5px;
        }

        h1 {
            flex-grow: 1; /* Takes remaining space */
            text-align: center;
            margin: 0;
        }

        nav {
            background-color: #333333;
            padding: 10px;
            width: 18%;
            height: 400px;
            
        }

            nav ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
            }

            nav li {
                margin-bottom: 10px;
                border: 1px solid #372626;
                width: 100%;
            }

            nav a {
                text-decoration: none;
                color: #FFFFFF;
                display: block; /* Make the entire area clickable */
                padding: 8px;
                transition: background-color 0.3s; 
            }

                nav a:hover {
                    background-color: #555555; /* Change background color on hover */
                }

            nav li.active a {
                background-color: #333333; /* Change background color for active item */
                color: #FFD700; 
            }

        .content {
            width: 85%; 
            padding: 20px;
        }

        input[type="search"] {
            width: 150px; 
            padding: 5px;
            border: none;
            background-color: lightgray;
        }

        .div {
            
            background-color: #372626;
            word-wrap: normal;
            font: bolder;
            position: absolute;
            top: 269px;
            margin-left: 5px;
            width: 70%;
            height: 419px;
            left: 56%;
            transform: translate(-50%, -44%);
            border-style: none;
            overflow-y: scroll;
            
        }

        footer {
            margin-top: 20px;
            padding: 10px;
            background-color: #333333; 
            color: #FFFFFF;
            text-align: center;
        }
    </style>
</head>
<body>

    <header>
        <img class="logo" src="images/mult.png" alt="Logo">
        <h1>Image Gallery</h1>
        <input type="search" placeholder="Search...">
    </header>

    <nav>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li class="active"><a href="imagegallery.php">Images</a></li>
            <li><a href="videogallery.php">Videos</a></li>
            <li><a href="files.php">Upload Files</a></li>
        </ul>
    </nav>

    <div class="div folder-container">

    <?php

        $dir = "UserImages";

        $images = scandir($dir);

        foreach ($images as $image) {

            $file = $dir ."/". $image;

            if (is_file($file)) {
                echo (
                '<div class="folder">
                <img src="' . $file . '" alt="Folder 1">
                    <div class="folder-caption">
                        <p><a href="download.php?file=' . $file . '">' . $image . '</a></p>
                    </div>
                </div>');
            }
            
        }

    ?>



    <!--
        <div class="folder">
            <img src="images/Financial/TaxIncome.jpg" alt="Folder 1">
            <div class="folder-caption">
                <p><a href="download.php?file=images/Financial/TaxIncome.jpg">Download</a></p>
            </div>
        </div>

        <div class="folder">
            <img src="images/Health/Soul.jpg" alt="Folder 2">
            <div class="folder-caption">
                <p><a href="download.php?file=images/Health/Soul.jpg">Download</a></p>
            </div>
        </div>

        <div class="folder">
            <img src="images/Programming/python.jpg" alt="Folder 2">
            <div class="folder-caption">
                <p><a href="download.php?file=images/Programming/python.jpg">Download</a></p>
            </div>
        </div>
    -->

    </div>
    
    <footer>
        <p>&copy; 2023 Multimedia Interface</p>
    </footer>

</body>
</html>
