<?php
if (!$_GET) {
?>


    <head>
        <link rel="stylesheet" href="style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
        <script>
            var doalert = function() {
                url = window.location.href + "?language=nl"
                console.log(url)
                window.location.href = url
            }
        </script>
    </head>

    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/contact.php">Contact</a></li>
        <li><a href="/projects.php">Projects</a></li>
        <!-- window.location.href-->
        <div class="sliderr">
            <button class="button" onclick="doalert()">Switch to Dutch!</button>
        </div>

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
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<?php
} else {

?>

    <head>
        <link rel="stylesheet" href="style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
        <script>
            var doalert = function() {
                url = window.location.href
                 url = url.split( '?' );

                window.location.href = url[0]
            }
        </script>
    </head>

    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/contact.php">Contact</a></li>
        <li><a href="/projects.php">Projects</a></li>
        <div class="sliderr">
            <button class="button" onclick="doalert()">Switch to Dutch!</button>
        </div>

    </ul>


    <body>
        <br>
        <div class="headd">
            <br>

            <h1 class="animate-charcter"> Corwin</h1>


            <p class="underdev">Developer in veel codeer talen!</p>
            <br>
            <div class="ocean">
                <div class="wave"></div>
                <div class="wave"></div>
                <div class="wave"></div>
            </div>
        </div>
        <br>
        <div class="overmij">
            <h2 class="overmijh1">Over Corwin</h2>
            <p class="overmijtext">
                Ik ben een programmeur uit Nederland <br> en heb al 4 jaar ervaring!
            </p>
            <br>

        </div>
        <br>

    </body>
    <div class="languages">
        <br>
        <div class="languagesiu">Programmeer talen die ik kan:</div>
        <div class="word">
        </div>
        <br>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<?php
}
