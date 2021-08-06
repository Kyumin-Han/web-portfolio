<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
            crossorigin="anonymous">

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
        <script
            src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>

        <style>
            body {
                margin: 3%;
                text-align: center;
                background-color: #E6E6FA;
            }

            /* 로고이미지 */
            .logo {
                width: 300px;
                height: 300px;
            }
        </style>

        <script>

            function firstI() {

                $('#defaultMypage').remove("#defaultMypage");

                let temp_html = `  <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="goCheck">
                            <label class="form-check-label" for="defaultCheck1">
                              어유 반가워요
                            </label>
                            </div>
                        `;

                let temp_html_div = `<label class="form-check-label" for="defaultCheck1">
                                
                        </label>
                        <br>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        <br>
                        `;

                $('#plusDiv').append(temp_html, temp_html_div)

            }
        </script>

        <title>MyPage</title>

    </head>

    <body>
        <img
            class="logo"
            alt="사진없어여"
            src="/image/HatchfulExport-All/logo_transparent.png">

        <!-- 사진 -->
        <img src="..." class="rounded mx-auto d-block" alt="이미지를 찾을 수 없습니다.">

        <!-- 내용 -->
        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">read ME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">참여한 프로젝트 리스트</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">메뉴2</a>
                    </li>
                </ul>
            </div>

            <div class="card-body">
                {{-- 로그인한 사용자 이름 값을 받아와 넣어야 함 --}}
                <h5 class="card-title">{{ auth()->user()->name }}</h5>

                <div id="defaultMypage">어차피 없어질 목숨...
                    <button onclick="firstI()">
                        내정보 등록하기
                    </button>
                </div>

                <div id="plusDiv"></div>

            </div>
        </div>
    </body>
</html>