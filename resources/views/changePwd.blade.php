<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="/changePassword">
        @csrf
        <h1>비밀번호 변경</h1>
          <fieldset>
            <legend></legend>
              <table>
                <tr>
                  <td>비밀번호 변경 : </td>
                  <td><input type="password" size="35" name="pw" placeholder="변경비밀번호"></td>
                </tr>
              </table>
            <input type="submit" value="변경하기" />
          </fieldset>
      </form>
</body>
</html>