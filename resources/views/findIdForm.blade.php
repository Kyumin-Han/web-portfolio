<html>
    <body>
        <form action="/findid" method="post">
            @csrf
            <label for="id">아이디</label>
            <input type="text" name="id" id="id">
        </form>
    </body>
</html>