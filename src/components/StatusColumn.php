<?php

namespace svsoft\yii\admin\components;

use yii\grid\DataColumn;
use yii\helpers\Html;

/**
 * Class StatusColumn
 * @package svsoft\yii\admin\components
 */
class StatusColumn extends DataColumn
{
    public $contentOptions = ['class'=>'format-status'];
    public $headerOptions = ['class'=>'format-status'];



    public function renderDataCellContent($model, $key, $index)
    {
        $value = $this->getDataCellValue($model, $key, $index);

        if ($value)
        {
            $options['class'] = 'glyphicon glyphicon-ok text-success';
        }
        else
        {
            $options['class'] = 'glyphicon glyphicon-remove text-danger';
        }

        return Html::tag('i', '', $options);
    }
}