<?php
// switch문
// 조건에 따라서 서로 다른 처리를 할 수 있습니다.
// 값이 고정되어 있는 경우 if문 대신 사용할 수 있다.

$food = "마파두부";

switch( $food ){
    case "김밥":
        echo "한식";
        break;
    // case에 지정된 조건이 참이면 echo 출력하고 break(switch 종료.)함.
    // 근데 조건이 거짓이면 계속 아래로 진행.
    case "마파두부":
        echo "중식";
        break;
    default:
        echo "기타";
        break;
}
?>