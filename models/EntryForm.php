<?php
                                // Tạo Một Model
namespace app\models;
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

                                // Tạo một Model xác thực

$model = new EntryForm();
$model->name = 'Qiang';
$model->email = 'bad';
if ($model->validate()) {
    // Xác thực thành công!
} else {
    // Xác thực lỗi!
    // Use $model->getErrors()
}









?>