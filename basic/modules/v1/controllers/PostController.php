<?php


namespace app\modules\v1\controllers;

use app\modules\v1\models\Post;
use yii\web\NotFoundHttpException;


class PostController extends ApiController
{
    public function actionLastadded()
    {
        $post = Post::find()
            ->orderBy(['createdAt' => SORT_DESC])
            ->one();

        return $post;
    }

    public function actionInfo($url)
    {
        $post = Post::find()
            ->where(['url' => $url])
            ->one();

        if ($post == null) {
            throw new NotFoundHttpException('Статья не найдена');
        }

        return $post;
    }

    public function actionList()
    {
        $posts = Post::find()
            ->all();

        return $posts;
    }
}