<template>
	<!-- post 호출 -->
	<div v-if="$store.state.flgTapUI === 0">
		<PostComponent></PostComponent>
	</div>
	<!-- 글 작성용 -->
	<div v-if="$store.state.flgTapUI === 1">
		<div 
			class="upload-img"
			:style="{backgroundImage : `url('${$store.state.imgURL}')`}"></div>
		<div>
			<textarea 
				class="write-box"
				name="content" 
				id="content"
				placeholder="글을 써주세요."></textarea>
		</div>
	</div>
</template>
<script>
import PostComponent from './PostComponent.vue';

export default {
	name: 'ContainerComponent',
	components: {
    PostComponent,
}
}
</script>
<style>
	
</style>