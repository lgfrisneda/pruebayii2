<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\UploadedFile;
use app\models\Network;
use app\models\CategoryNetwork;
use app\models\Service;

class PruebaController extends Controller
{
	public function actionNetwork()
	{
		$model = new Network();
		$category = new CategoryNetwork();

		if($model->load(Yii::$app->request->post())){

			$post = Yii::$app->request->post('Network');
			$postC = Yii::$app->request->post('CategoryNetwork');

			$model->image = UploadedFile::getInstance($model, 'image');
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

			foreach( $postC['category_id'] as $cat){
				$category_network = new CategoryNetwork();
				$category_network->network_id = $model->id;
				$category_network->category_id = $cat;

				$category_network->save();
			}

			return $this->redirect(['/prueba/service', 'id' => $model->id]);
		}else{
			return $this->render('network', [
				'model' => $model,
				'category' => $category
			]);
		}
	}

	public function actionService($id)
	{
		$model = new Service();

		$network = Network::findOne($id);

		if($model->load(Yii::$app->request->post())){

			$post = Yii::$app->request->post('Service');

			$model->network_id = $network->id;
			$model->photo = $post['photo'];
			$model->value_photo = $post['value_photo'];
			$model->discount_photo = $post['discount_photo'];
			$model->video = $post['video'];
			$model->value_video = $post['value_video'];
			$model->discount_video = $post['discount_video'];
			$model->story = $post['story'];
			$model->value_story = $post['value_story'];
			$model->discount_story = $post['discount_story'];
	
			$model->save();

			return $this->refresh();
		}else{
			return $this->render('service', [
				'model' => $model
			]);
		}
	}
}