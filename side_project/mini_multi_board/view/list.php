<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/view/css/common.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>자유게시판 페이지</title>
</head>
<body>
    <div class="text-center mt-5 mb-5">
        <h1>자유게시판</h1>
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16" data-bs-toggle="modal" data-bs-target="#modalInsert">
          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
        </svg>
    </div>

    <main>
      <div class="card">
        <img src="https://picsum.photos/200/300.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button id="btnDetail" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDetail">상세</button>
        </div>
      </div>
      <div class="card">
        <img src="https://picsum.photos/200/300.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button id="btnDetail" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDetail">상세</button>
        </div>
      </div>
      <div class="card">
        <img src="https://picsum.photos/200/300.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button id="btnDetail" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDetail">상세</button>
        </div>
      </div>
      <div class="card">
        <img src="https://picsum.photos/200/300.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button id="btnDetail" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDetail">상세</button>
        </div>
      </div>
      <div class="card">
        <img src="https://picsum.photos/200/300.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button id="btnDetail" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDetail">상세</button>
        </div>
      </div>
    </main>

    <!-- 상세모달 -->
    <div class="modal" id="modalDetail" tabindex="-1">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">개발자입니다.</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>살려주세여</p>
            <img src="https://picsum.photos/400/500.jpg" alt="">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">닫기</button>
          </div>
        </div>
      </div>
    </div>

    <!-- 작성 모달 -->
    <div class="modal" id="modalInsert" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <form action="">
          <div class="modal-header">
            <input type="text" class="form-control" placeholder="제목을 입력하세요">
          </div>
          <div class="modal-body">
            <textarea class="form-control" cols="30" rows="10" placeholder="내용을 입력하세요"></textarea>
            <br><br>
            <input type="file" accept="image/*">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">닫기</button>
            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">작성</button>
          </div>
          </form>
        </div>
      </div>
    </div>


    <footer class="fixed-bottom bg-dark text-light text-center p-3">저작권</footer>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="/view/js/common.js"></script>
</body>
</html>