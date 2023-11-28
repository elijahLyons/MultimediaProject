<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multimedia Interface</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0; /* Remove default margin to ensure full-screen display */
            background-color: black; /* Updated background color */
            color: #FFFFFF; /* Updated text color to white */
        }

        header {
            height: 10vh; /* Use viewport height unit */
            width: 100%; /* Full width */
            font: bold;
            font-family: 'Script MT';
            border-style: solid;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            background-color: #333333; /* Darker background color */
        }

        .logo {
            max-width: 70px;
            max-height: 70px;
        }

        .folder-container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
            position: relative;
            top: 10vh; /* Adjust as needed */
        }

        .folder {
            text-align: center;
        }

            .folder img {
                max-width: 100px;
                max-height: 100px;
            }

        h1 {
            flex-grow: 1;
            text-align: center;
            margin: 0;
        }

        nav {
            background-color: #333333;
            padding: 10px;
            width: 18%;
            height: 80vh; /* Adjust as needed */
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
                display: block;
                padding: 8px;
                transition: background-color 0.3s;
            }

                nav a:hover {
                    background-color: #555555;
                }

            nav li.active a {
                background-color: #333333;
                color: #FFD700;
            }

        .content {
            width: 85%;
            padding: 20px;
        }

        .introduction {
            font-family: 'Times New Roman', Times, serif;
            padding: 10px;
            text-align: center;
            background-color: #333333;
            color: #FFFFFF;
            margin-bottom: 20px;
        }

            .introduction h2 {
                font-size: 24px;
                margin-bottom: 10px;
            }

        input[type="search"] {
            width: 150px;
            padding: 5px;
            border: none;
            background-color: lightgray;
        }

        .div {
            z-index: -2;
            background-color: #372626;
            word-wrap: normal;
            font: bolder;
            position: absolute;
            top: 50%; /* Center vertically */
            left: 60%;
            transform: translate(-50%, -50%);
            width: 80%;
            height: 100vh;
            border-style: none;
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
        <h1>Welcome to Media Hub</h1>
        <input type="search" placeholder="Search...">
    </header>

    <nav>
        <ul>
            <li class="active"><a href="home.php">Home</a></li>
            <li><a href="imagegallery.php">Images</a></li>
            <li><a href="videogallery.php">Videos</a></li>
            <li><a href="files.php">Upload Files</a></li>
        </ul>
    </nav>

    <div class="div folder-container">
        <div class="introduction">
            <h2>About Media Hub</h2>
            <p>
                Media Hub is a cutting-edge multimedia interface designed to elevate your digital experience.
                Our platform seamlessly integrates with a powerful server infrastructure, providing users with fast and secure access to a diverse range of multimedia content.
                Whether you're uploading your latest creations or exploring the vast library of images, videos, and downloads, our server ensures efficient and reliable access to your files.
                Media Hub is not just a hub for content—it's a dynamic platform that leverages advanced server technology to deliver a seamless and responsive multimedia experience for all users.
            </p>
        </div>

        <div class="folder">
            <img src="images/folder.png" alt="Folder 1">
            <div class="folder-caption">
                <p><a href="#">Images</a></p>
            </div>
        </div>

        <div class="folder">
            <img src="images/folder.png" alt="Folder 2">
            <div class="folder-caption">
                <p><a href="#">Videos</a></p>
            </div>
        </div>

        <div class="folder">
            <img src="images/folder.png" alt="Folder 3">
            <div class="folder-caption">
                <p><a href="#">Downloads</a></p>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2023 Multimedia Interface</p>
    </footer>

</body>
</html>
