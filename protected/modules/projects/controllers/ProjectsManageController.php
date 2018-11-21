<?php

class ProjectsManageController extends Controller
{
	public $layout = '//layouts/column2';
	public $defaultAction = 'admin';
    public $imagePath = 'uploads/projects';
    public $tempPath = 'uploads/temp';
    public $imageOptions = ['resize' => ['width' => 500, 'height' => 500], 'thumbnail' => ['width' => 300, 'height' => 300]];

    /**
     * @return array actions type list
     */
    public static function actionsType()
    {
        return array(
            'backend' => array(
                'create',
                'update',
                'admin',
                'delete',
                'upload',
                'deleteUpload',
            )
        );
    }

    public function actions()
    {
        return array(
            'upload' => array( // list image upload
                'class' => 'ext.dropZoneUploader.actions.AjaxUploadAction',
                'attribute' => 'image',
                'rename' => 'random',
                'validateOptions' => array(
                    'acceptedTypes' => array('png', 'jpg', 'jpeg')
                )
            ),
            'deleteUpload' => array( // delete list image uploaded
                'class' => 'ext.dropZoneUploader.actions.AjaxDeleteUploadedAction',
                'modelName' => 'Projects',
                'attribute' => 'image',
                'uploadDir' => '/uploads/projects/',
                'storedMode' => 'field'
            ),
        );
    }

    /**
     * @return array action filters
     */
    public function filters()
    {
        return array(
            'checkAccess', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'views' page.
     */
    public function actionCreate()
    {
        $model = new Projects();

        $this->performAjaxValidation($model);

        if (isset($_POST['Projects'])) {
            $model->attributes = $_POST['Projects'];
            $model->type = '1';
            $image = new UploadedFiles($this->tempPath, $model->image, $this->imageOptions);
            if ($model->save()) {
                $image->move($this->imagePath);
                Yii::app()->user->setFlash('success', 'اطلاعات با موفقیت ثبت شد.');
                $this->redirect(array('admin'));
            } else
                Yii::app()->user->setFlash('failed', 'در ثبت اطلاعات خطایی رخ داده است! لطفا مجددا تلاش کنید.');
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'views' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id)
    {
        $this->pageTitle = 'ویرایش پروژه';
        $model = $this->loadModel($id);
        $model->setScenario('update');

        $image = new UploadedFiles($this->imagePath, $model->image, $this->imageOptions);
        if (isset($_POST['Projects'])) {
            $oldImage= $model->image;
            $model->attributes = $_POST['Projects'];
            if ($model->save()) {
                $image->update($oldImage, $model->image, $this->tempPath);
                Yii::app()->user->setFlash('success', 'عملیات با موفقیت انجام شد.');
                $this->redirect(array('admin'));
            } else
                Yii::app()->user->setFlash('failed', 'درخواست با خطا مواجه است. لطفا مجددا سعی نمایید.');
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model = new Projects('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Projects']))
			$model->attributes = $_GET['Projects'];

		$this->render('admin', array(
			'model' => $model,
		));
	}

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id)
    {
        if($id != Yii::app()->user->id)
            $this->loadModel($id)->delete();
        // if AJAX request (triggered by deletion via admin grid views), we should not redirect the browser
        if(!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Projects the loaded model
     * @throws CHttpException
     */
    public function loadModel($id)
    {
        $model=Projects::model()->findByAttributes(['id' => $id, 'type' => 1]);
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Projects $model the model to be validated
     */
    protected function performAjaxValidation($model)
    {
        if(isset($_POST['ajax']) && $_POST['ajax'] === 'projects-form'){
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
}