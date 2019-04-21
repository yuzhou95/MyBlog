<?php
namespace frontend\widgets\banner;

use Yii;
use yii\bootstrap\Widget;
class BannerWidget extends Widget{
    public $items=[];
    
    public function init() {
        if (empty($this->items)){
            $this->items=[
                ['label'=>'demo',
                    'image_url'=>'/image/20190418/1555588438531313.jpg',
                    'url'=>['site/index'],
                    'html'=>'',
                    'active'=>'active',
                ],
                ['label'=>'demo',
                    'image_url'=>'/image/20190418/1555592891127524.jpg',
                    'url'=>['site/index'],
                    'html'=>'',
                ],
            ];
        }
    }
    
    public function run()
    {
        $data['items']= $this->items;
        return $this->render('index',['data'=>$data]);
    }
}