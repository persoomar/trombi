<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\TemplateAsset;
use common\widgets\Alert;

//$asset = TrombiAsset::register($this);
$asset = TemplateAsset::register($this);
$baseUrl = $asset->baseUrl;

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="fixed hold-transition skin-blue sidebar-mini">
<div class="wrap">
    
    <?php
    echo $this->render('../trombi/header',['baseUrl' => $baseUrl]);
    echo $this->render('../trombi/leftmenu',['baseUrl' => $baseUrl]);
    echo $this->render('../trombi/content',['baseUrl' => $baseUrl,'content' => $content]);
   // echo $this->render('../trombi/footer',['baseUrl' => $baseUrl]);

    ?>

</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
