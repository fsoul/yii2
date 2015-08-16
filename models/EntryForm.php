<?php
/**
 * Created by PhpStorm.
 * User: fsoul
 * Date: 14.08.2015
 * Time: 14:32
 */

namespace app\models;

use Yii;
use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
}