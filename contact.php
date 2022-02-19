<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script>
        function refreshFocus() {
            if (document.hasFocus() == false) {
                document.title = "Come back now!"
                var link = document.querySelector("link[rel~='icon']");
                if (!link) {
                    link = document.createElement('link');
                    link.rel = 'icon';
                    document.getElementsByTagName('head')[0].appendChild(link);
                }
                link.href = 'http://localhost/angryy.ico';
            } else {
                document.title = "CorwinDev"
                var link = document.querySelector("link[rel~='icon']");
                if (!link) {
                    link = document.createElement('link');
                    link.rel = 'icon';
                    document.getElementsByTagName('head')[0].appendChild(link);
                }
                link.href = 'http://localhost/favicon.ico';

            }
            setTimeout(refreshFocus, 200);
        }
        refreshFocus();
    </script>
</head>
<!-- Why you looking here? Go coding!-->

<ul>
    <li><a href="./"><i class="fa fa-fw fa-home fa-beat"></i> Home</a></li>
    <li><a href="./contact.php"><i class="fa fa-fw fa-envelope"></i> Contact</a></li>
    <li><a href="./projects.php"><i class="fa fa-fw fa-list"></i> Projects</a></li>
</ul>

<body>
    <br>
<div class="languages">
<h1>I'm busy with this page! Hold on!
</div>
</body>
</html>