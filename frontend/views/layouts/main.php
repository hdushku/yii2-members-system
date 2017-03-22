<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */

$directoryAsset = Yii::getAlias('@web/themes/adminlte');
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- START GRUNT HANDLING -->
    <?= Html::cssFile(YII_DEBUG ? '@web/css/stylesheet.css' : '@web/css/stylesheet.min.css?v=' . filemtime(Yii::getAlias('@webroot/css/stylesheet.min.css'))) ?>
    <!-- END GRUNT HANDLING -->

    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="hold-transition skin-black sidebar-mini">

<?php $this->beginBody() ?>

    <div class="wrapper">

        <?= $this->render(
            'header.php',
            ['directoryAsset' => $directoryAsset]
        ) ?>

        <?= $this->render(
            'left.php',
            ['directoryAsset' => $directoryAsset]
        )
        ?>

        <?= $this->render(
            'content.php',
            ['content' => $content, 'directoryAsset' => $directoryAsset]
        ) ?>

    </div>

    <script src="//code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- START GRUNT HANDLING -->
    <?= Html::jsFile(YII_DEBUG ? '@web/js/scripts.js' : '@web/js/scripts.min.js?v=' . filemtime(Yii::getAlias('@webroot/js/scripts.min.js'))) ?>
    <!-- END GRUNT HANDLING -->

<?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>