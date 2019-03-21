<?php

namespace effsoft\eff\module\site;

use effsoft\eff\EffModule;

class Module extends EffModule {

    public $module_name = 'eff-module-site';

    public function init(){
        parent::init();

        $this->registTranslations();
        $this->registSubModules();
    }

    public function registSubModules(){
        $this->modules = [
            'admin' => [
                'class' => 'effsoft\eff\module\site\modules\admin\Module',
            ],
        ];
    }

    public function registTranslations()
    {
        \Yii::$app->i18n->translations[$this->module_name .'/*'] = [
            'class' => 'yii\i18n\PhpMessageSource',
            'sourceLanguage' => 'en-US',
            'basePath' => __DIR__ . '\\messages',
            'fileMap' => [
                $this->module_name .'/app' => 'app.php',
                $this->module_name .'/error' => 'error.php',
            ],
        ];
    }
}