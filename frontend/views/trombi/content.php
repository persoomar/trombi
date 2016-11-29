<?php
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
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
	<section class="content">
        <!-- Main content -->
        <?= $content ?>
        <?= Alert::widget() ?>
        <!-- /.content -->
    </section>
</div>