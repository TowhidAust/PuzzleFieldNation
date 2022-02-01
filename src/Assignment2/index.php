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
        var id = null;

        function myMove() {
            var elem = document.getElementById("myAnimation");
            var pos = 0;
            clearInterval(id);
            id = setInterval(frame, 10);

            function frame() {
                if (pos == 360) {
                    clearInterval(id);
                } else {
                    pos++;
                    elem.style.left = pos + 'px';
                    elem.style.top = pos + 'px';
                }
            }
        }
        myMove();
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>