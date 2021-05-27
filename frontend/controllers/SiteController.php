<?php

namespace frontend\controllers;

use common\entities\Advantages;
use common\entities\Automobiles;
use common\entities\Contacts;
use common\entities\Prices;
use common\entities\Reviews;
use frontend\forms\ConsultationForm;
use frontend\forms\FeedbackForm;
use Yii;
use frontend\components\FrontendController;

class SiteController extends FrontendController
{
    public function actionIndex()
    {
        $keywords = "комфортная перевозка лежачих больных москве области недорого больница дом";// до 100 символов
        $description = "Dobro 03 компания по комфортной перевозке лежачих больных в москве и области из больницы домой";//до 150 символов
        $title = "Dobro 03 компания по комфортной перевозке лежачих больных в москве и области";
        $contacts = Contacts::getDb()->cache(function () {
            return Contacts::find()->having(['status' => 1])->orderBy('sort')->all();
        }, Yii::$app->params['cacheTime']);

        $advantages = Advantages::getDb()->cache(function () {
            return Advantages::find()->having(['status' => 1])->orderBy('sort')->all();
        }, Yii::$app->params['cacheTime']);

        $automobiles = Automobiles::getDb()->cache(function () {
            return Automobiles::find()->having(['status' => 1])->orderBy('sort')->all();
        }, Yii::$app->params['cacheTime']);
        $prices = Prices::getDb()->cache(function () {
            return Prices::find()->having(['status' => 1])->orderBy('sort')->all();
        }, Yii::$app->params['cacheTime']);
        $reviews = Reviews::getDb()->cache(function () {
            return Reviews::find()->having(['status' => 1])->orderBy(['created_at' => SORT_DESC])->all();
        }, Yii::$app->params['cacheTime']);
        $this->setMeta($title,$description,$keywords);
        return $this->render('index', [
            'contacts' => $contacts,
            'advantages' => $advantages,
            'automobiles' => $automobiles,
            'prices' => $prices,
            'reviews' => $reviews,
        ]);
    }

//    public function actionAbout()
//    {
//        return $this->render('about');
//    }

//    public function actionContacts()
//    {
//        $contacts = Contacts::getDb()->cache(function () {
//            return Contacts::find()->having(['status' => 1])->orderBy('sort')->all();
//        }, Yii::$app->params['cacheTime']);
//        return $this->render('contacts', [
//            'contacts' => $contacts,
//        ]);
//    }

    public function actionConsultation()
    {
        $model = new ConsultationForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Ваша заявка принята');
                return $this->goHome();
            }
            Yii::$app->session->setFlash('error', 'Ошибка отправки сообщения');
        }
        if (Yii::$app->request->isAjax) {
            return $this->renderAjax('consultation', [
                'model' => $model,
            ]);
        }
        return $this->render('consultation', [
            'model' => $model,
        ]);
    }

    public function actionReview()
    {
        $model = new FeedbackForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->create()) {
                Yii::$app->session->setFlash('success', 'Ваша отзыв принят');
                return $this->goHome();
            }
            Yii::$app->session->setFlash('error', 'Ошибка отправки сообщения');
        }
        if (Yii::$app->request->isAjax) {
            return $this->renderAjax('review', [
                'model' => $model,
            ]);
        }
        return $this->render('review', [
            'model' => $model,
        ]);
    }
//    public function actionSearch()
//    {
//        $this->setMeta(Yii::t('app', 'Поиск'));
//        $model = new SearchForm();
//
//        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
//            $result = $model->search();
//            return $this->render('search_result', [
//                'model' => $model,
//                'items' => $result['items'],
//                'events' => $result['events'],
//                'interests' => $result['interests'],
//                'partners' => $result['partners'],
//            ]);
//        }
//        if (Yii::$app->request->isAjax) {
//            return $this->renderAjax('search', [
//                'model' => $model,
//            ]);
//        }
//        return $this->render('search', [
//            'model' => $model,
//        ]);
//    }
}