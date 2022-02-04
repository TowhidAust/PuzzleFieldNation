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
    <div class="hundred-pixel-container" id="hundred-pixel-box" onclick="myMove()">
        100 * 100
    </div>

    <script>
        setInterval(moveBox, 1000);

        function moveBox() {

            let element = document.getElementById('hundred-pixel-box');
            let rect = element.getBoundingClientRect(); // to find the position according to its viewport
            let move = 10;

            let goRight = ((rect.right + move) <= window.innerWidth) ? true : false;
            let goBottom = ((rect.bottom + move) <= window.innerHeight) ? true : false;

            let goBottomRight = (goRight && goBottom) ? true : false;

            
            if (typeof(goDirection) == 'undefined') goDirection = 'bottomRight';
            if (goDirection == 'topLeft') {
                if (rect.left == 0) goDirection = 'bottomRight';
                if (rect.left > 0) goDirection = 'topLeft';
            } else if (goDirection == 'bottomRight') {
                goDirection = (goBottomRight) ? 'bottomRight' : 'topLeft';
            }

            if (goDirection == 'bottomRight') {
                element.style.top = (rect.top + move) + "px";
                element.style.left = (rect.left + move) + "px";
            } else if (goDirection == 'topLeft') {
                element.style.top = (rect.top - move) + "px";
                element.style.left = (rect.left - move) + "px";
            }

        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>