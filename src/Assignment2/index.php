<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="hundred-pixel-container" id="myAnimation" onclick="myMove()">
        100 * 100
    </div>

    <script>
        const windowScreenLeft = window.screenLeft;
        const windowScreenTop = window.screenTop;
        console.log(window.innerWidth);
        console.log(window.innerHeight);

        var id = null;

        function myMove() {
            var elem = document.getElementById("myAnimation");
            var posLeft = 0;
            var posTop = 50;
            var posRight = 0;
            var posBottom = 0;

            clearInterval(id);
            id = setInterval(frame, 1);

            function frame() {
                if (posLeft === window.innerWidth - 100 && posTop !== window.innerHeight - 100) {
                    posTop++;
                    elem.style.top = posTop + 'px';

                } else if (posLeft === window.innerWidth - 100 && posTop === window.innerHeight - 100 && posRight !== window.innerWidth) {
                    elem.style.left = 'unset';
                    posRight++;
                    elem.style.right = posRight + 'px';

                } else if (posRight === window.innerWidth && posBottom !== window.innerHeight - 100) {
                    console.log("test");
                    posLeft=0;
                    posTop = 50;
                    // posRight = 0;

                    elem.style.left = 0 + 'px';
                    elem.style.top = 'unset';
                    elem.style.right = 'unset';

                    posBottom++;
                    elem.style.bottom = posBottom -50 + 'px';

                } else {
                    posBottom = 0;
                    posRight = 0;

                    posLeft++;
                    elem.style.left = posLeft + 'px';
                }
            }
        }
        myMove();
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>