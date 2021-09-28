<?php

namespace common\widgets;

use yii\base\Widget;
use yii\helpers\Html;

class PasswordInput extends Widget
{
    public $name;
    public $id;
    public $message;
    public $onkeyup = 'function(){}';
    public $maxlength = 255;

    public function init()
    {
        parent::init();
    }

    /**
     * {@inheritdoc}
     */
    public function run()
    {
        echo Html::beginTag('div', ['class' => 'password-block']);

        echo Html::tag('input', '', [
            'type' => 'password',
            'maxlength' => $this->maxlength,
            'class' => 'form-control',
            'name' => $this->name,
            'id' => $this->id,
            'style' => 'padding-right: 30px; border-radius: 0 7px 7px 0',
            'onkeyup' => '('.$this->onkeyup.')($(this).closest(".password-block"));',
        ]);

        echo Html::tag('span', $this->message, [
            'style' => 'position: absolute; right: 55px; top: 7px; color: #d86f6f;',
            'class' => 'hidden',
        ]);

        echo Html::tag('i', '', [
            'class' => 'fa check fa-check',
            'style' => 'position: absolute; right: 55px; top: 8px; font-size: 17px; color: rgb(136, 203, 136); display: none;',
        ]);

        echo Html::tag('i', '', [
            'class' => 'fa eye fa-eye',
            'style' => 'position: absolute; right: 12px; top: 2px; cursor: pointer; font-size: 17px; background: #f4efef; height: 30px; padding-top: 6px; padding-left: 9px; border-radius: 0 5px 5px 0; width: 34px; border-left: 1px solid #cccccc; color: #868686;',
            'onclick' => '
                var block = $(this).closest(".password-block");
                var input = block.find(">input");
                var iEye = block.find(">i.eye");
                var type = input.attr("type");
                input.attr("type", type === "password" ? "text" : "password");
                iEye.toggleClass("fa-eye fa-eye-slash");
            ',
        ]);

        echo Html::endTag('div');
    }
}