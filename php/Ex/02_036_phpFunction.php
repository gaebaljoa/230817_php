<?php

// trim() : 문자열의 공백을 없애주는 함수
// echo "  sdsd  ", "\n", trim(" sdsd ");


// strtoupper // strtolower : 문자열을 대/소문자로 변환하는 함수
// echo strtoupper("asdfa"), strtolower("ASDFSA");


// strlen() : 문자열의 길이를 반환
// mb_strlen() : 멀티바이트 문자열의 길이를 반환
// echo strlen("asd");
// echo mb_strlen("가나다");


// // str_replace() : 특정 문자를 치환해주는 함수
// echo str_replace("찾고싶은 문자","변환할 문자", "적용시킬 문자열");


// // substr() : 문자열을 자르는 함수
// echo substr("적용시킬 문자열",시작위치, 얼마나 자를건지);


// strpos() : 문장려에서 특정 문자의 위치를 반환하는 함수
// $str = "abcdefg";
// echo strpos("abcdefg", "d");
// echo substr($str, strpos($str, "d"));


// isset() : 변수의 존재를 확인하는 함수
// $str = "";
// echo isset($str);  //true
// echo isset($asdfas); //false
// var_dump( isset($str) );

// empty() : 변수의 값이 비어있는지 확인하는 함수
// var_dump( empty($str) );  // 0, null, 공백 모두 empty로 봄.


// settype() : 변수의 데이터형을 바꿔주는 함수
// echo settype(1, "string");
// $num = 1;
// settype($num, "string");
// (string)$num;
// echo gettype($num);

// time() : 1970/01/01을 기준으로 타임스탬프(초단위) 시간 확인하는 함수
// echo time();

// date() : 원하는 형식으로 시간 표시해주는 함수
echo date("Y-m-d H:i:s", time());
?>