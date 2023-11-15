@extends('layout.layout')

@section('title', 'List')

@section('main')
	<main>
		<div>번호 : {{$data->b_id}}</div>
		<div>조회수 : {{$data->b_hits}}</div>
		<div>제목 : {{$data->b_title}}</div>
		<div>내용 : {{$data->b_content}}</div>
		<div>작성일 : {{$data->created_at}}</div>
		<div>수정일 : {{$data->updated_at}}</div>
	</main>
@endsection