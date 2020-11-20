<?php

namespace app\modules\v1\controllers;


class PageController extends ApiController
{
    public function actionPublicism ()
    {
        return [
            'id' => 5,
            'name' => 'Публицистика',
            'text' => 'Текст страницы "Публицистика"'
        ];
    }

    public function actionInterviews ()
    {
        return [
            'id' => 3,
            'name' => 'Интервью',
            'text' => 'Текст страницы "Интервью"'
        ];
    }
}