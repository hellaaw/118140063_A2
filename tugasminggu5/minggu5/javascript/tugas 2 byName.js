<html>
    <head>
        <title>DOM</title>
    </head>
    <body>
        <div id="container">
            <h1 class="heading">kota</h1>
            <p>Seoul</p>
            <p>Vancouver</p>
            <p>Amsterdam</p>
            <p>Jakarta</p>
            <p>Tokyo</p>
            <h2 class="heading">menghitung</h2>

            <form action="post" id="comments">
                <input type="text"
                    name="comment-title"
                    id="comment-title"><br></br>

                    <textarea name="comment-box"
                        id="comment-box"
                        class="box"></textarea><br></br>

                    <input type="reset" class="button"></input>
                    <input type="submit" class="button submit"></input>
                </input>
            </form>
        </div>

        <script>
            var x = document.getElementsByName("comment-title");
            x[1];
        </script>
    </body>
</html>