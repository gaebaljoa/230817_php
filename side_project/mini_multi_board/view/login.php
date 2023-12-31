<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>로그인 페이지</title>
</head>
<body class="vh-100 vw-100">
    <?php require_once("view/inc/header.php"); ?>

    <main class="d-flex justify-content-center align-items-center h-75">
       <form style="width: 300px;" action="/user/login" method="POST">
        <div id="errorMsg" class="form-text text-danger">
          <?php echo count($this->arrErrorMsg) > 0 ? implode("<br>", $this->arrErrorMsg) : "" ?>
        </div>
        <div class="mb-3">
          <label for="u_id" class="form-label">아이디</label>
          <input type="text" class="form-control" id="u_id" name="u_id">
          <!-- 아이디가 이메일형식이면 type=email, 그냥 아이디형식이면 type=text로 해줌 -->
        </div>
        <div class="mb-3">
          <label for="u_pw" class="form-label">비밀번호</label>
          <input type="password" class="form-control" id="u_pw" name="u_pw">
        </div>
        <button type="submit" class="btn btn-dark">로그인</button>
        <a href="/user/regist" class="btn btn-secondary float-end">회원가입</a>
      </form> 
    </main>

    
    


    <footer class="fixed-bottom bg-dark text-light text-center p-3">저작권</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>