<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;
$this->title = '更新文章';
$this->params['breadcrumbs'][] = ['label' => '文章', 'url' => ['post/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
	<div class="col-lg-9">
		<div class="panel-title box-title">
			<span>更新文章</span>
		</div>
		<div class="panel-body">
			<? $form = ActiveForm::begin() ?>

			<?= $form->field($model, 'title')->textinput(['maxlenth' => true]) ?>

			<?= $form->field($model, 'cat_id')->dropDownList($cat) ?>

			<?= $form->field($model, 'label_img')->widget('common\widgets\file_upload\FileUpload',[
				'config'=>[
				]
			]) ?>

			<?= $form->field($model, 'content')->widget('common\widgets\ueditor\Ueditor',[
			    'options'=>[
			    	'initialFrameHeight' => 400,
			    ]
			]) ?>

			<?= $form->field($model, 'tags')->widget('common\widgets\tags\TagWidget') ?>

			<div class="form-group">
				<?= Html::submitButton("保存", ['class' => 'btn btn-success'])?>
			</div>
			<? ActiveForm::end() ?>
		</div>
	</div>
	<div class="col-lg-3">
		<div class="panel-title box-title">
			<span>注意事项</span>
		</div>
		<div class="panel-body">
			<p>1111</p>
			<p>2222</p>
		</div>
	</div>
</div>