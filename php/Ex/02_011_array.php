<?php
// // 인덱스 배열
// $arr = array(0, "a", 2); // 멀티 타입 배열
// 여러개의 타입이 들어있는(정수,문자,...)
// $arr1 = [0, "a", 2]; // 멀티 타입 배열

// print_r($arr1);

// $arr2 = [0, 1, 2];
// // 둘이 같음.
// $arr3 = ["배열", $arr[1], $arr2[1]];


// var_dump($arr);

// echo $arr[2];
// /* (가져오고 싶은 인수가 들어있는 방의 번호를 대괄호 안에 넣어준다.)
//     ( 방번호는 순서대로 : [0],[1],[2]... )
// */


// // 연상 배열
// $arr4 = [
//     "name" => "홍길동"
//     ,"age" => 18
//     ,"gender" => "남자"
// ];

// echo $arr4["name"];

// // 다차원 배열
// $arr5 = [
//     [11,12,13]
//     ,[
//         [211,212,213]
//         ,[221,222,223]
//     ]
//     ,[31,32,33]
// ];

// var_dump($arr5[1][1][1]);

// $arr6 = [
//     "msg" => "ok"
//     ,"info" => [
//         "name" => "홍길동"
//         ,"age" => 20
//     ]
// ];

// var_dump($arr6["info"]["name"]);
// echo $arr6["info"]["age"];
// // (인덱스배열이랑 연상배열이랑 내가 원하는 값 찾아가는 방법은 똑같음. 큰방 > 작은방 > 더작은방 순으로 찾아가는거.)


// // unset() : 배열의 원소 삭제
// $arr_week = ["Sun", "Mon", "delete", "Tue", "Wed"];
// unset($arr_week[2]);
// print_r($arr_week);



// // 배열의 정렬 : asort(), arsort(), ksort(), krsort()
// // asort() : 배열의 값을 오름차순 정렬
// $arr_asort = ["b","a","d","c"];
// asort($arr_asort);
// print_r( $arr_asort );


// // arsort() : 배열의 값을 내림차순 정렬
// arsort($arr_asort);
// print_r( $arr_asort );



// // ksort() : 배열의 키를 오름차순 정렬
// $arr_ksort = [
//     "b" => "1"
//     ,"d" => "2"
//     ,"a" => "3"
//     ,"c" => "4"
// ];
// ksort($arr_ksort);
// print_r( $arr_ksort );


// // krsort() : 배열의 키를 내림차순 정렬
// krsort($arr_ksort);
// print_r($arr_ksort);


// // count() : 배열 혹은 그 외 것들의 사이즈를 반환하는 함수
// echo count($arr_ksort);

// //  array_diff() : A배열과 B배열을 비교해서 중복되지 않는 A배열의 원소를 반환
// $arr_diff1 = [1,2,3];
// $arr_diff2 = [1,4,5];
// $arr_diff = array_diff($arr_diff1, $arr_diff2);
// print_r($arr_diff);


// // array_push() : 기존 배열에 값을 추가 하는 함수
// $arr_push = [1,2,3];
// array_push( $arr_push, 4, 5);
// print_r($arr_push);

// $arr_push2 = [
//     "a" => 1
//     ,"b" => 2
// ];
// $arr_push2["c"]=3;
// print_r($arr_push2);


?>