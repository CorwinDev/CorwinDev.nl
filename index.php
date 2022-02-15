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
    <script>
        var words = ['HTML', 'PHP', 'JS', 'JAVA'],
            part,
            i = 0,
            offset = 0,
            len = words.length,
            forwards = true,
            skip_count = 0,
            skip_delay = 15,
            speed = 70;
        var wordflick = function() {
            setInterval(function() {
                if (forwards) {
                    if (offset >= words[i].length) {
                        ++skip_count;
                        if (skip_count == skip_delay) {
                            forwards = false;
                            skip_count = 0;
                        }
                    }
                } else {
                    if (offset == 0) {
                        forwards = true;
                        i++;
                        offset = 0;
                        if (i >= len) {
                            i = 0;
                        }
                    }
                }
                part = words[i].substr(0, offset);
                if (skip_count == 0) {
                    if (forwards) {
                        offset++;
                    } else {
                        offset--;
                    }
                }
                $('.word').text(part);
            }, speed);
        };

        $(document).ready(function() {
            wordflick();
        });
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
    <div class="headd">
        <br>

        <h1 class="animate-charcter"> Corwin</h1>


        <p class="underdev">Developer in many languages!</p>
        <br>
        <div class="ocean">
            <div class="wave"></div>
            <div class="wave"></div>
            <div class="wave"></div>
            <div class="wave"></div>
            <div class="wave"></div>

        </div>
    </div>
    <br>
    <div class="overmij">
        <h2 class="overmijh1">About Corwin</h2>
        <p class="overmijtext">
            I'm a programmer from the Netherlands <br> and have about 4 years experience in development!
        </p>
        <br>

    </div>
    <br>

</body>
<div class="languages">
    <br>
    <div class="languagesiu">Languages I understand:</div>
    <div class="word">
    </div>
    <br>
</div>
<br>
<div class="projects">
    <br>
    List of my projects:
    <div class="row">
        <div class="column">CoreFire:
            <div class="under">
                Hosting for Websites and Minecraft<br>
            </div>
            <a href="./projects.php" class="href">More info</a>

        </div>
        <div class="column">Botscord:
            <div class="under">
                Botlist for Discord<br>
            </div>
            <a href="./projects.php" class="href">More info</a>
        </div>
    </div>
    <br>
</div>
<footer>
    <p class="footer">&copy; Copyright Corwin 2021-<?php echo date("Y"); ?></p>
</footer>

</html>