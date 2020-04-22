<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string $name
 * @property string|null $short_desp
 * @property string|null $long_desp
 * @property float $price
 * @property float $sell_price
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['short_desp', 'long_desp'], 'string'],
            [['price', 'sell_price'], 'number'],
            [['name'], 'string', 'max' => 255],
            [['name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'short_desp' => 'Short Desp',
            'long_desp' => 'Long Desp',
            'price' => 'Price',
            'sell_price' => 'Sell Price',
        ];
    }
}
