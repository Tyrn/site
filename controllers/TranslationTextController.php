<?php

namespace app\controllers;

use app\components\RestSearchController;
use yii\rest\ActiveController;

class TranslationTextController extends ActiveController
{
    use RestSearchController;

    public $modelClass = 'app\models\TranslationText';
}
