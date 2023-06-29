<?php

/**
 * @package   yii2-crud
 * @author    Aliaksei Zaitsau <zaitsev_av@outlook.com>
 * @copyright Copyright &copy; Aliaksei Zaitsau, 2023
 */

namespace AVZaitsev\crud;

use Yii;
use yii\web\Controller as WebController;

/**
 * CRUD controller
 */
abstract class Controller extends WebController
{
    public function init()
    {
        parent::init();
    }

    abstract function getModelClass();
    abstract function getTableConfig();
    abstract function getFieldsConfig();

    final public function actionIndex()
    {
        return $this->render('@AVZaitsev/crud/src/views/index', [
            'config' => $this->getTableConfig()
        ]);
    }
}
