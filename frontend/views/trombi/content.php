<?php
use yii\widgets\Breadcrumbs;
?>
<div class="content-wrapper">
	<selection class="content-header">
		<h1>
			<?= $this->title ?>
		</h1>
		<?= Breadcrumbs::widget([
			'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : []
			])
		?>
	</section>	
	<selection class="content">
		<?= $content ?>
	<selection>
</div>