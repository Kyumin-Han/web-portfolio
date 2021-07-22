<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous">
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>

        <title>login</title>

        <style>
            body {
                margin: 3%;
            }
        </style>
    </head>
    <body>
        <form action="/action" method="post">
        <!-- id -->
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">
                ID
            </label>
            <input
                type="text"
                class="form-control"
                id="exampleFormControlInput1"
                placeholder="아이디를 입력 해 주세요">
        </div>

        <!-- pw -->
        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword">
            </div>
        </div>
        <button>
            login
        </button>
    </form>
    </body>
</html>