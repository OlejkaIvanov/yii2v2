<?php

namespace app\controllers;

use app\models\ContactForm;
use app\models\tables\Users;
use app\models\Test;
use yii\web\Controller;

class TaskController extends Controller
{
    public function actionIndex()
    {
        $model = new Test();

        $model->load([
            'hsdghj' => [
                'title' => '23234',
                'content' => 'sk454443jgkfjkgjdkl'
            ],
            'Test' => [
                'title' => 'dkjfkldfjg',
                'content' => 'skjgkfjkgjdkl'
            ]
        ]);

        var_dump($model->toArray());

        return $this->render('index', $model->toArray());
    }

    public function actionTest()
    {
      /*  \Yii::$app->db->createCommand("
            INSERT INTO test(title, content, created) VALUES
               ('title1', 'content1', NOW()),
               ('title2', 'content2', NOW()),
               ('title3', 'content3', NOW())
        ")->execute();*/

      /*создание новой записи
        $user = new Users();
        $user->login = "Pupkin";
        $user->password = md5("qwerty");
        $user->role = 1;

        $user->save();*/

       /* Чтение*/

      /*  $user = Users::findOne(1);
        $user->isNewRecord = true;
        $user->id = null;
        $user->login = 'admin';
        $user->save();*/

        /* Удаление */
       /* $user = Users::findOne(1);
        $user->delete();*/

       /*Users::deleteAll(['>', 'id', 3]);*/

       //-----------------------------------------

      /*  var_dump(Users::find()->batch(1000)

        );*/

        var_dump(Users::findOne(2));

        $user = Users::getUserWithRole(2);
        var_dump($user);

        exit;
    }
}