<?php
namespace ingjordannunez\adminlte3\assets;

use yii\web\AssetBundle;

class PluginAsset extends AssetBundle
{
    public $sourcePath = '@vendor/almasaeed2010/adminlte/plugins';

    public $depends = [
        'ingjordannunez\adminlte3\assets\BaseAsset'
    ];

    public static $pluginMap = [
        'fontawesome' => [
            'css' => 'fontawesome-free/css/all.min.css'
        ],
        'icheck-bootstrap' => [
            'css' => ['icheck-bootstrap/icheck-bootstrap.css']
        ]
    ];

    /**
     * add a plugin dynamically
     * @param $pluginName
     * @return $this
     */
    public function add($pluginName)
    {
        $pluginName = (array) $pluginName;

        foreach ($pluginName as $name) {
            $plugin = $this->getPluginConfig($name);
            if (isset($plugin['css'])) {
                foreach ((array) $plugin['css'] as $v) {
                    $this->css[] = $v;
                }
            }
            if (isset($plugin['js'])) {
                foreach ((array) $plugin['js'] as $v) {
                    $this->js[] = $v;
                }
            }
        }

        return $this;
    }

    /**
     * @param $name plugin name
     * @return array|null
     */
    private function getPluginConfig($name)
    {
        return self::$pluginMap[$name] ?? \Yii::$app->params['ingjordannunez/yii2-adminlte3']['pluginMap'][$name] ?? null;
    }
}
