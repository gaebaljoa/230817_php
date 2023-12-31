<?php
define("ROOT", $_SERVER["DOCUMENT_ROOT"]."/1105/src/");
define("FILE_HEADER",ROOT."header.php");
define("ERROR_MSG_PARAM", "Parameter Error : %s");
require_once(ROOT."lib/lib.php");

$conn = null; 
$http_method = $_SERVER["REQUEST_METHOD"]; 
$arr_err_msg = []; 

try {
	if(!my_db_conn($conn)) {
		throw new Exception("DB Error : PDO Instance");
	}

	if($http_method === "GET") {
		// GET Method
		$id = isset($_GET["id"]) ? $_GET["id"] : ""; 
		$page = isset($_GET["page"]) ? $_GET["page"] : ""; 

		if($id === "") {
			$arr_err_msg[] = sprintf(ERROR_MSG_PARAM, "id");
		}
		if($page === "") {
			$arr_err_msg[] = sprintf(ERROR_MSG_PARAM, "page");
		}
		if(count($arr_err_msg) >= 1) {
			throw new Exception(implode("<br>", $arr_err_msg));
		}
	} else {
		// POST Method
		$id = isset($_POST["id"]) ? $_POST["id"] : ""; 
		$page = isset($_POST["page"]) ? $_POST["page"] : ""; 
		$title =  trim( isset($_POST["title"]) ? $_POST["title"] : "" ); 
		$content = trim( isset($_POST["content"]) ? $_POST["content"] : "" ); 

		if($id === "") {
			$arr_err_msg[] = sprintf(ERROR_MSG_PARAM, "id");
		}
		if($page === "") {
			$arr_err_msg[] = sprintf(ERROR_MSG_PARAM, "page");
		}
		if($title === "") {
			$arr_err_msg[] = sprintf(ERROR_MSG_PARAM, "title");
		}
		if($content === "") {
			$arr_err_msg[] = sprintf(ERROR_MSG_PARAM, "content");
		}
		if(count($arr_err_msg) >= 1) {
			throw new Exception(implode("<br>", $arr_err_msg));
		}
		

        // 에러 없을 경우
		if(count($arr_err_msg) === 0) {
			$arr_param = [
				"id" => $id
				,"title" => $title
				,"content" => $content
			];
			
			$conn->beginTransaction(); 
			
			if(!db_update_boards_id($conn, $arr_param)) {
				throw new Exception("DB Error : Update_Boards_id");
			}
			$conn->commit(); 
			// 수정 완료 후 디테일 페이지로 이동
			header("Location: /1105/src/detail.php/?id={$id}&page={$page}"); 
			exit;
		}
	}

	$arr_param = [
		"id" => $id
	];

	// 게시글 데이터 조회
	$result = db_select_boards_id($conn, $arr_param);

	if($result === false) {
		throw new Exception("DB Error : PDO Select_id");
	} else if(!(count($result) === 1)) {
		throw new Exception("DB Error : PDO Select_id Count,".count($result));
	}

	$item = $result[0];

} catch(Exception $e) {
	if($http_method === "POST") {
		$conn->rollBack(); 
	}
	echo $e->getMessage(); // 예외발생 메세지 출력
	exit;
} finally {
	db_destroy_conn($conn);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/1105/src/css/common.css">
    <title>수정페이지</title>
</head>
<body>
    <?php
		require_once(FILE_HEADER);
	?>
    <main>
        <?php
			foreach($arr_err_msg as $val) {
		?>
				<p><?php echo $val ?></p>
		<?php
			}
		?>
        <form action="/1105/src/update.php" method="post">
            <table>
                <input type="hidden" name="id" value="<?php echo $id; ?>">
				<input type="hidden" name="page" value="<?php echo $page; ?>">				
                <tr>
					<td class="detail_head"><?php echo $item["id"]; ?></td>
					<td class="detail_head">
						<input class="input_txt" type="text" name="title" id="title" value="<?php echo $item["title"]; ?>">
					</td>              
					<td class="detail_head detail_at"><?php echo $item["create_at"]; ?></td>
				</tr>
                <tr>
                    <td>
                        <textarea class="detail_cell" name="content" id="content"><?php echo $item["content"]?></textarea> 
                    </td>
                </tr>
            </table>
            <div>
                <button class="com_b" type="submit">저장</button>
                <a class="com_a" href="/1105/src/detail.php?id=<?php echo $id; ?>&page=<?php echo $page; ?>">취소</a>  
            </div>
        </form>
    </main>
</body>
</html>