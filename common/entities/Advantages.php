<?php

namespace common\entities;

use Yii;
use yii\db\ActiveRecord;
use backend\components\SortableBehavior;
use yii\helpers\FileHelper;
use yii\imagine\Image;
use yii\web\UploadedFile;

/**
 * This is the model class for table "{{%advantages}}".
 *
 * @property int $id
 * @property string $image_name
 * @property string $title
 * @property string $html
 * @property int $sort
 * @property int $status
 *
 * @property UploadedFile uploadedImageFile
 * @property string $image
 */
class Advantages extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%advantages}}';
    }

    public function behaviors()
    {
        return [
            [
                'class' => SortableBehavior::class,
            ],
        ];
    }

    public function rules()
    {
        return array_filter([
            [['image_name', 'title', 'html'], 'required'],
            [['html'], 'string'],
            [['sort', 'status'], 'integer'],
            [['image_name'], 'string', 'max' => 50],
            [['title'], 'string', 'max' => 255],

            [['uploadedImageFile'], 'safe'],
            [['uploadedImageFile'], 'file', 'extensions' => 'png, jpg, jpeg, webp'],
            $this->isNewRecord ? [['uploadedImageFile'], 'required'] : ''
        ]);
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image_name' => 'Изображение',
            'uploadedImageFile' => 'Изображение',
            'title' => 'Заголовок',
            'html' => 'Описание',
            'sort' => 'Порядок',
            'status' => 'Статус',
        ];
    }

    #################### IMAGES ####################

    private $imageWidth = 500;
    private $imageHeight = 400;

    public function __construct(array $config = [])
    {
        $folderName = str_replace(['{', '}', '%'], '', $this::tableName());
        parent::__construct($config);
        $this->_folder = '/files/' . $folderName . '/';
        $this->_folderPath = Yii::getAlias('@files') . '/' . $folderName . '/';
    }

    public $uploadedImageFile;
    private $_folder;
    private $_folderPath;

    public function beforeValidate()
    {
        if (parent::beforeValidate()) {
            $this->uploadedImageFile = UploadedFile::getInstance($this, 'uploadedImageFile');
            if ($this->isNewRecord) {
                /* @var $lastModel self */
                $lastModel = self::find()->orderBy(['id' => SORT_DESC])->one();
                $id = $lastModel->id + 1;
            } else {
                $id = $this->id;
            }
            if ($this->uploadedImageFile) {
                if (!$this->isNewRecord) {
                    $this->deleteImage();
                }
                $this->image_name = $id . '_' . time() . '.' . $this->uploadedImageFile->extension;
            }
            return true;
        }
        return false;
    }

    public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes);
        if ($this->uploadedImageFile) {
            $path = $this->_folderPath . $this->image_name;
            FileHelper::createDirectory(dirname($path, 1));
            $this->uploadedImageFile->saveAs($path);
            if ($this->uploadedImageFile->extension != 'webp') {
                Image::thumbnail($path, $this->imageWidth, $this->imageHeight)->save($path);
            }
        }
    }

    public function afterDelete()
    {
        parent::afterDelete();
        $this->deleteImage();
    }

    public function deleteImage()
    {
        if ($this->image_name) {
            if (file_exists($this->_folderPath . $this->image_name)) {
                unlink($this->_folderPath . $this->image_name);
            }
        }
    }

    public function removeImage()
    {
        $this->deleteImage();
        $this->image_name = null;
        $this->save();
    }

    public function getImage()
    {
        return $this->_folder . $this->image_name;
    }
}
