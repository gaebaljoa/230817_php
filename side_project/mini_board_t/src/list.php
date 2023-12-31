<?php
define("ROOT", $_SERVER["DOCUMENT_ROOT"]."/mini_board/src/"); // 웹서버 root 패스 생성
define("FILE_HEADER", ROOT."header.php"); // 헤더 패스 상수 선언
require_once(ROOT."lib/lib_db.php"); // DB관련 라이브러리

$conn = null; // DB Connection 변수	
$list_cnt = 5; // 한 페이지 최대 표시 수
$page_num = 1; // 페이지 번호 초기화

try {
	// DB 접속
	if(!my_db_conn($conn)) {
		// DB Instance 에러
		throw new Exception("DB Error : PDO Instance"); // 강제 예외발생 : DB Instance
	}

	// ---------------
	// 페이징 처리
	// ---------------
	// 총 게시글 수 검색
	$boards_cnt = db_select_boards_cnt($conn);
	if($boards_cnt === false) {
		throw new Exception("DB Error : SELECT Count"); // 강제 예외발생 : SELECT Count
	}

	$max_page_num = ceil($boards_cnt / $list_cnt); // 최대 페이지 수

	// GET Method 확인
	if(isset($_GET["page"])) {
		$page_num = $_GET["page"]; // 유저가 보내온 페이지 셋팅
	}
	$offset = ($page_num - 1) * $list_cnt; // 오프셋 계산

	// 이전버튼
	$prev_page_num = $page_num - 1;
	if($prev_page_num === 0) {
		$prev_page_num = 1;
	}

	// 다음버튼
	$next_page_num = $page_num + 1;
	if($next_page_num > $max_page_num) {
		$next_page_num = $max_page_num;
	}

	// DB 조회 시 사용할 데이터 배열
	$arr_param = [
		"list_cnt" => $list_cnt
		,"offset" => $offset
	];

	// 게시글 리스트 조회
	$result = db_select_boards_paging($conn, $arr_param);

	if(!$result) {
		// select 게시글 리스트 조회 에러
		throw new Exception("DB Error : SELECT boards"); // 강제 예외발생 : SELECT boards
	}

} catch(Exception $e) {
	// echo $e->getMessage(); // 예외발생 메세지 출력	//v002 del
	header("Location: /mini_board/src/error.php/?err_msg={$e->getMessage()}");
	exit; // 처리 종료
} finally {
	db_destroy_conn($conn); // DB 파기
}

?>

<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/mini_board/src/css/common.css">
	<title>리스트 페이지</title>
</head>
<body>
	<?php
		require_once(FILE_HEADER); // 헤더 참조
	?>
	<main>
		<a href="/mini_board/src/insert.php">글 작성</a>
		<table>
			<colgroup>
				<col width="20%">
				<col width="50%">
				<col width="30%">
			</colgroup>
			<tr class="table-title">
				<th>번호</th>
				<th>제목</th>
				<th>작성일자</th>
			</tr>
			<?php
				// 리스트를 생성하는 반복문
				// 배열 요소를 반복해서 출력함
				foreach($result as $item) {
			?>
				<tr>
					<!-- 게시글 번호 -->
					<td><?php echo $item["id"]; ?></td>
					<td>
						<!-- 글 제목(클릭하면 링크로 이동함) -->
						<a href="/mini_board/src/detail.php/?id=<?php echo $item["id"]; ?>&page=<?php echo $page_num; ?>">
							<?php echo $item["title"]; ?>
						</a>
					</td>
					<!-- 게시글의 생성일자 -->
					<td><?php echo $item["create_at"]; ?></td>
				</tr>
			<?php
				} 
			?>
		</table>
		<section>
			<a class="page-btn" href="/mini_board/src/list.php/?page=<?php echo $prev_page_num ?>">이전</a>
			<?php 
				// 페이지 반복문 시작
				for($i = 1; $i <= $max_page_num; $i++) {
			?>
				<!-- 페이지 버튼(반복문을 통해서 모든 페이지의 버튼을 출력해냄) -->
				<a class="page-btn" href="/mini_board/src/list.php/?page=<?php echo $i; ?>"><?php echo $i; ?></a>
			<?php
				}
			?>
			<a class="page-btn" href="/mini_board/src/list.php/?page=<?php echo $next_page_num ?>">다음</a>
		</section>
	</main>
</body>
</html>
