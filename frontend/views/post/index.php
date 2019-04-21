<?php

use yii\helpers\Html;
use yii\helpers\Url;
use frontend\widgets\post\PostWidget;
use frontend\widgets\tag\TagWidget;
use yii\base\Widget;
use frontend\widgets\hot\HotWidget;
?>
<div class="row">
    <div  class="col-lg-9">
        <?=PostWidget::widget(['limit'=>10]);?>
    </div>
    <div class="col-lg-3">
        <div class="panel">
            <a class="btn btn-success btn-block btn-post" href="<?=Url::to(['post/create'])?>">创建文章</a>
        </div>
        <?=HotWidget::widget()?>
        
        <?=TagWidget::widget()?>
    </div>
</div>