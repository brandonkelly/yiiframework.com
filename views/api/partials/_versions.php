<?php
/**
 * @var $this yii\web\View
 * @var $versions array all available API versions
 * @var $version string the currently chosen API version
 * @var $section string the currently active API file
 */
use app\components\DropdownList;
use yii\helpers\Html;

?>
<nav class="version-selector" role="navigation">
    <div class="btn-group btn-group-justified">
    </div>
        <?= DropdownList::widget([
            'tag' => 'div',
            'selection' => "Version {$version}",
            'items' => array_map(function ($ver) use ($version, $section) {
                return [
                    'label' => $ver,
                    'url' => ['api/view', 'version' => $ver, 'section' => ($version[0] === $ver[0]) ? $section : 'index'],
                ];
            }, $versions),
            'options' => [
                'class' => 'btn-group btn-group-sm'
                ]
        ]) ?>
    </div>
</nav>
