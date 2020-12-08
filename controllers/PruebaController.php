<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\UploadFile;
use app\models\Network;
use app\models\CategoryNetwork;
use app\models\Service;

class PruebaController extends Controller
{
	public function actionNetwork()
	{
		$model = new Network();

		if($model->load(Yii::$app->request->post())){

			$post = Yii::$app->request->post('Network');

			$model->image = UploadFile::getInstance($model, 'image');
			if($model->image){
				$model->upload();
			}

			$model->name = $post['name'];
			$model->email = $post['email'];
			$model->facebook = $post['facebook'];
			$model->description = $post['description'];
			$model->country = $post['country'];
			$model->language = $post['language'];
			$model->advertising = $post['advertising'];
			$model->vacation_from = $post['vacation_from'];
			$model->vacation_to = $post['vacation_to'];

			$model->save();

			foreach( $post['category'] as $category){
				$category_network = new CategoryNetwork();
				$category_network->network_id = $model->id;
				$category_network->category_id = $category;

				$category_network->save();
			}

			return $this->redirect(['\prueba\service', 'id' => $model->id]);
		}else{
			return $this->render('network', [
				'model' => $model
			]);
		}
	}

	public function actionService($id)
	{
		$model = new Service();

		$post = Yii::$app->request->post('Service');

		$model->network_id = $id;
		$model->photo = $post['photo'];
		$model->value_photo = $post['value_photo'];
		$model->discount_photo = $post['discount_photo'];
		$model->video = $post['video'];
		$model->value_video = $post['value_video'];
		$model->discount_video = $post['discount_video'];
		$model->story = $post['story'];
		$model->value_story = $post['value_story'];
		$model->discount_story = $post['discount_story'];

		if($model->load(Yii::$app->request->post()) && $model->save()){
			return $this->refresh();
		}else{
			return $this->render('service', [
				'model' => $model
			]);
		}
	}
}