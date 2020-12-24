<?php

namespace app\modules\v1\models;

use Yii;
use yii\behaviors\SluggableBehavior;

/**
 * This is the model class for table "posts".
 *
 * @property int $id
 * @property string $title Заголовок
 * @property int|null $meta Дата публикации
 * @property string|null $text Текст статьи
 * @property string $url URL
 * @property string $createdAt Дата создания
 * @property string|null $updatedAt Дата изменения
 * @property int|null $categoryID Категория
 *
 * @property Category $category
 */
class Post extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'posts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'url', 'createdAt'], 'required'],
            [['meta', 'categoryID'], 'integer'],
            [['text'], 'string'],
            [['createdAt', 'updatedAt'], 'safe'],
            [['title'], 'string', 'max' => 128],
            [['url'], 'string', 'max' => 255],
            [['categoryID'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['categoryID' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'meta' => 'Meta',
            'text' => 'Text',
            'url' => 'Url',
            'createdAt' => 'Created At',
            'updatedAt' => 'Updated At',
            'categoryID' => 'Category ID',
        ];
    }


    /**
     * @return array|string[]
     */
//    public function behaviors()
//    {
//        $behaviors = parent::behaviors();
//        $behaviors = [
//            'class' => SluggableBehavior::class,
//            'attribute' => 'name',
//            'slugAttribute' => 'url'
//        ];
//
//        return $behaviors;
//    }


    public function toArray(array $fields = [], array $expand = [], $recursive = true)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'meta' => $this->meta,
            'text' => $this->text,
            'url' => $this->url,
            'createdAt' => $this->createdAt,
            'category' => $this->category
        ];
    }


    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'categoryID']);
    }
}
