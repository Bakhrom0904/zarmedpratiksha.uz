<?php

namespace frontend\controllers;

use common\controllers\Controller;
use common\models\Appointment;
use common\models\Contact;
use common\models\Department;
use common\models\Discount;
use common\models\GoogleAds;
use common\models\Menu;
use common\models\News;
use common\models\Seo;
use common\models\Time;
use dominus77\sweetalert2\Alert;
use frontend\controllers\services\AboutService;
use frontend\controllers\services\ArticleService;
use frontend\controllers\services\CertificateService;
use frontend\controllers\services\DepartmentService;
use frontend\controllers\services\DoctorService;
use frontend\controllers\services\EventService;
use frontend\controllers\services\GalleryService;
use frontend\controllers\services\InsuranceService;
use frontend\controllers\services\JobService;
use frontend\controllers\services\MediaService;
use frontend\controllers\services\PagesService;
use frontend\controllers\services\SliderService;
use frontend\controllers\services\SocialService;
use Yii;
use yii\data\Pagination;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;

/**
 * Site controller
 */
class SiteController extends Controller
{
    public $layout = 'main';

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        $lang = Yii::$app->language;
        $parentMenu = Menu::find()->with(['menus'])->where(['parent_id' => null])->orderBy(['order' => SORT_ASC])->all();
//        $departments = Department::find()->where(["<=", "LENGTH(name_$lang)", 20])->orderBy(['id' => SORT_DESC])->limit(7)->all();
        $departments = [];
        $branch = DepartmentService::getByBranch(1);
        if ($branch) {
            $departments = $branch->departments;
        }
        $certificates = CertificateService::getAll();
        $social = ArrayHelper::map(SocialService::getAll(), 'key', function ($item) {
            return ['value' => $item->value, 'icon' => $item->icon];
        });
        $this->view->params['menu'] = $this->menuItemsFormat($parentMenu);
        $this->view->params['departments'] = $departments;
        $this->view->params['social'] = $social;
        $this->view->params['certificates'] = $certificates;

        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $doctors = DoctorService::getByLimit(4);
        $banners = SliderService::getAll();
        $seo = Seo::findOne(['page'=>Yii::$app->controller->action->id]);
        $lang = Yii::$app->language;
        $this->Seo('og:site_name', Yii::t('frontend', "ZARMED PRATIKSHA"));
        $this->Seo('og:url', Yii::$app->request->hostInfo);
        $this->Seo('og:title', Yii::t('frontend', "ZARMED PRATIKSHA"));
        $this->Seo('twitter:image', Yii::$app->request->hostInfo."images/inner/IMG_1656.jpg");
        if ($seo) {
            $this->Seo('description', $seo->desc);
            $this->Seo('keywords', $seo->keyw);
            $this->Seo('og:description',  $seo->desc);
        }
        return $this->render('index', compact('doctors', 'banners'));
    }

    public function actionNews()
    {
        $m=News::find();

        $sahifa=new Pagination(["totalCount"=>$m->count(),'defaultPageSize'=>3]);

        $news=$m->offset($sahifa->offset)->limit($sahifa->limit)->orderBy("id DESC")->all();

        return $this->render("news",["news"=>$news,"sahifa"=>$sahifa]);
    }

    public function actionDetail($id)
    {
        $new=News::findOne(["id"=>$id]);
        return $this->render("detail",["new"=>$new]);
    }

    /***
     * Doctors
     * @return string
     */
    public function actionDoctors($department_id = null)
    {
        $departments = Department::find()->with(['doctors'])->all();
        $doctors = [];
        if ($department_id) {
            $doctors = DoctorService::getByDepartmentId($department_id);
        } else {
            $doctors = DoctorService::getAll();
        }
        $seo = Seo::findOne(['page'=>Yii::$app->controller->action->id]);
        $lang = Yii::$app->language;
        $this->Seo('og:site_name', Yii::t('frontend', "ZARMED PRATIKSHA"));
        $this->Seo('og:url', Yii::$app->request->hostInfo.'/'.Yii::$app->controller->action->id);
        $this->Seo('og:title', Yii::t('frontend', "ZARMED PRATIKSHA")." | ". Yii::t('frontend', 'Our Doctors'));
        if (count($doctors) > 0)
        $this->Seo('twitter:image', Yii::$app->request->hostInfo.$doctors[0]->img);
        if ($seo) {
            $this->Seo('description', $seo->desc);
            $this->Seo('keywords', $seo->keyw);
            $this->Seo('og:description',  $seo->desc);
        }
        return $this->render('doctor/index', compact('doctors', 'departments'));
    }

    public function actionDoctorProfile($id)
    {
        $doctor = DoctorService::getOne($id);
        $seo = Seo::findOne(['page'=>'doctors']);
        $lang = Yii::$app->language;
        $this->Seo('og:site_name', "ZARMED PRATIKSHA");
        $this->Seo('og:url', Yii::$app->request->hostInfo.'/'.Yii::$app->controller->action->id.'/'.$id);
        $this->Seo('og:title', Yii::t('frontend', "ZARMED PRATIKSHA")." | ".Yii::t('frontend', 'Our Doctors').' - '. $doctor->{"first_name_$lang"}.' '.$doctor->{"last_name_$lang"}.' '.$doctor->{"middle_name_$lang"});
        $this->Seo('twitter:image', Yii::$app->request->hostInfo.$doctor->img);
        $this->Seo('description', $doctor->{"about_$lang"});
        $this->Seo('og:description',  $doctor->{"about_$lang"});
        if ($seo) {
            $this->Seo('keywords', $seo->keyw);
        }
        return $this->render('doctor/profile', compact('doctor'));
    }


    /***
     * Departments
     * @return string
     */
    public function actionDepartments()
    {
        $branches = DepartmentService::getBranch();
        $seo = Seo::findOne(['page'=>Yii::$app->controller->action->id]);
        $lang = Yii::$app->language;
        $this->Seo('og:site_name', Yii::t('frontend', "ZARMED PRATIKSHA"));
        $this->Seo('og:url', Yii::$app->request->hostInfo.'/'.Yii::$app->controller->action->id);
        $this->Seo('og:title', Yii::t('frontend', "ZARMED PRATIKSHA")." | ". Yii::t('frontend', 'Departments'));
        $this->Seo('twitter:image', Yii::$app->request->hostInfo."images/inner/IMG_1656.jpg");
        if ($seo) {
            $this->Seo('description', $seo->desc);
            $this->Seo('keywords', $seo->keyw);
            $this->Seo('og:description',  $seo->desc);
        }
        return $this->render('department/index', compact('branches'));
    }

    public function actionDepartmentServices($id)
    {
        $department = DepartmentService::getOne($id);
        $seo = Seo::findOne(['page'=>'departments']);
        $lang = Yii::$app->language;
        $this->Seo('og:site_name', "ZARMED PRATIKSHA");
        $this->Seo('og:url', Yii::$app->request->hostInfo.'/'.Yii::$app->controller->action->id.'/'.$id);
        $this->Seo('og:title', Yii::t('frontend', "ZARMED PRATIKSHA")." | ".Yii::t('frontend', 'Departments').' - '. $department->{"name_$lang"});
        $this->Seo('twitter:image', Yii::$app->request->hostInfo.$department->img);
        $this->Seo('description', $department->{"description_$lang"});
        $this->Seo('og:description',  $department->{"description_$lang"});
        if ($seo) {
            $this->Seo('keywords', $seo->keyw);
        }
        return $this->render('department/services', compact('department'));
    }

    public function actionServiceInfo($id)
    {
        $service = DepartmentService::getOneService($id);
        $seo = Seo::findOne(['page'=>'departments']);
        $lang = Yii::$app->language;
        $this->Seo('og:site_name', "ZARMED PRATIKSHA");
        $this->Seo('og:url', Yii::$app->request->hostInfo.'/'.Yii::$app->controller->action->id.'/'.$id);
        $this->Seo('og:title', Yii::t('frontend', "ZARMED PRATIKSHA")." | ".Yii::t('backend', 'Services').' - '. $service->{"name_$lang"});
        $this->Seo('twitter:image', Yii::$app->request->hostInfo.$service->department->img);
        $this->Seo('description', $service->{"description_$lang"});
        $this->Seo('og:description',  $service->{"description_$lang"});
        if ($seo) {
            $this->Seo('keywords', $seo->keyw);
        }
        return $this->render('department/services-info', compact('service'));
    }

    public function actionMediaCoverage()
    {
        $media = MediaService::getAll();
        $seo = Seo::findOne(['page'=>Yii::$app->controller->action->id]);
        $lang = Yii::$app->language;
        $this->Seo('og:site_name', Yii::t('frontend', "ZARMED PRATIKSHA"));
        $this->Seo('og:url', Yii::$app->request->hostInfo.'/'.Yii::$app->controller->action->id);
        $this->Seo('og:title', Yii::t('frontend', "ZARMED PRATIKSHA")." | ". Yii::t('frontend', 'Media Coverage'));
        $this->Seo('twitter:image', Yii::$app->request->hostInfo.$media[0]->img);
        if ($seo) {
            $this->Seo('description', $seo->desc);
            $this->Seo('keywords', $seo->keyw);
            $this->Seo('og:description',  $seo->desc);
        }
        return $this->render('media-coverage', compact('media'));
    }

    public function actionEvents()
    {
        $events = EventService::getAll();
        $seo = Seo::findOne(['page'=>Yii::$app->controller->action->id]);
        $lang = Yii::$app->language;
        $this->Seo('og:site_name', Yii::t('frontend', "ZARMED PRATIKSHA"));
        $this->Seo('og:url', Yii::$app->request->hostInfo.'/'.Yii::$app->controller->action->id);
        $this->Seo('og:title', Yii::t('frontend', "ZARMED PRATIKSHA")." | ". Yii::t('frontend', 'Latest Events'));
        $this->Seo('twitter:image', Yii::$app->request->hostInfo.$events[0]->img);
        if ($seo) {
            $this->Seo('description', $seo->desc);
            $this->Seo('keywords', $seo->keyw);
            $this->Seo('og:description',  $seo->desc);
        }
        return $this->render('event/index', compact('events'));
    }

    public function actionEventInfo($id)
    {
        $event = EventService::getOne($id);
        $seo = Seo::findOne(['page'=>'events']);
        $lang = Yii::$app->language;
        $this->Seo('og:site_name', "ZARMED PRATIKSHA");
        $this->Seo('og:url', Yii::$app->request->hostInfo.'/'.Yii::$app->controller->action->id.'/'.$id);
        $this->Seo('og:title', Yii::t('frontend', "ZARMED PRATIKSHA")." | ".Yii::t('frontend', 'Latest Events').' - '. $event->{"title_$lang"});
        $this->Seo('twitter:image', Yii::$app->request->hostInfo.$event->img);
        $this->Seo('description', $event->{"description_$lang"});
        $this->Seo('og:description',  $event->{"description_$lang"});
        if ($seo) {
            $this->Seo('keywords', $seo->keyw);
        }
        return $this->render('event/event', compact('event'));
    }

    public function actionHealthArticles()
    {
        $articles = ArticleService::getAll();
        $seo = Seo::findOne(['page'=>Yii::$app->controller->action->id]);
        $lang = Yii::$app->language;
        $this->Seo('og:site_name', Yii::t('frontend', "ZARMED PRATIKSHA"));
        $this->Seo('og:url', Yii::$app->request->hostInfo.'/'.Yii::$app->controller->action->id);
        $this->Seo('og:title', Yii::t('frontend', "ZARMED PRATIKSHA")." | ". Yii::t('frontend', 'Healthcare Articles'));
        if (count($articles) > 0) {
            $this->Seo('twitter:image', Yii::$app->request->hostInfo.$articles[0]->img);    
        }

        if ($seo) {
            $this->Seo('description', $seo->desc);
            $this->Seo('keywords', $seo->keyw);
            $this->Seo('og:description',  $seo->desc);
        }
        return $this->render('article/index', compact('articles'));
    }

    public function actionArticleInfo($id)
    {
        $article = ArticleService::getOne($id);
        $seo = Seo::findOne(['page'=>'health-articles']);
        $lang = Yii::$app->language;
        $this->Seo('og:site_name', "ZARMED PRATIKSHA");
        $this->Seo('og:url', Yii::$app->request->hostInfo.'/'.Yii::$app->controller->action->id.'/'.$id);
        $this->Seo('og:title', Yii::t('frontend', "ZARMED PRATIKSHA")." | ".Yii::t('frontend', 'Healthcare Articles').' - '. $article->{"title_$lang"});
        $this->Seo('twitter:image', Yii::$app->request->hostInfo.$article->img);
        $this->Seo('description', $article->{"description_$lang"});
        $this->Seo('og:description',  $article->{"description_$lang"});
        if ($seo) {
            $this->Seo('keywords', $seo->keyw);
        }
        return $this->render('article/article', compact('article'));
    }

    public function actionGallery()
    {
        $gallery = GalleryService::getAll();
        $seo = Seo::findOne(['page'=>Yii::$app->controller->action->id]);
        $lang = Yii::$app->language;
        $this->Seo('og:site_name', Yii::t('frontend', "ZARMED PRATIKSHA"));
        $this->Seo('og:url', Yii::$app->request->hostInfo.'/'.Yii::$app->controller->action->id);
        $this->Seo('og:title', Yii::t('frontend', "ZARMED PRATIKSHA")." | ". Yii::t('frontend', 'Gallery'));
        $this->Seo('twitter:image', Yii::$app->request->hostInfo.explode(', ', $gallery[0]->path)[0]);
        if ($seo) {
            $this->Seo('description', $seo->desc);
            $this->Seo('keywords', $seo->keyw);
            $this->Seo('og:description',  $seo->desc);
        }
        return $this->render('gallery', compact('gallery'));
    }

    public function actionTpaInsurance()
    {
        $insurance = InsuranceService::getAll();
        $seo = Seo::findOne(['page'=>Yii::$app->controller->action->id]);
        $this->Seo('og:site_name', Yii::t('frontend', "ZARMED PRATIKSHA"));
        $this->Seo('og:url', Yii::$app->request->hostInfo.'/'.Yii::$app->controller->action->id);
        $this->Seo('og:title', Yii::t('frontend', "ZARMED PRATIKSHA")." | ". Yii::t('frontend', 'TPA & Insurance'));
        $this->Seo('twitter:image', Yii::$app->request->hostInfo.$insurance[0]->img);
        if ($seo) {
            $this->Seo('description', $seo->desc);
            $this->Seo('keywords', $seo->keyw);
            $this->Seo('og:description',  $seo->desc);
        }
        return $this->render('insurance', compact('insurance'));
    }

    public function actionInternationalPatients()
    {
        $model = new Contact();
        if ($model->load(Yii::$app->request->post())) {
            if ($model->save()) {
                \Yii::$app->session->setFlash(Alert::TYPE_SUCCESS, 'You have successfully sent your request!');

                return $this->redirect("/international-patients");
            } else {
                \Yii::$app->session->setFlash(Alert::TYPE_ERROR, 'Something went wrong, try again later!');
            }
        }
        $model = new Contact();

        $page = PagesService::getBySlug('international-patients');
        $seo = Seo::findOne(['page'=>Yii::$app->controller->action->id]);
        $lang = Yii::$app->language;
        $this->Seo('og:site_name', Yii::t('frontend', "ZARMED PRATIKSHA"));
        $this->Seo('og:url', Yii::$app->request->hostInfo.'/'.Yii::$app->controller->action->id);
        $this->Seo('og:title', Yii::t('frontend', "ZARMED PRATIKSHA")." | ". Yii::t('frontend', 'International Patients'));
        $this->Seo('twitter:image', Yii::$app->request->hostInfo."images/inner/IMG_1656.jpg");
        if ($seo) {
            $this->Seo('description', $seo->desc);
            $this->Seo('keywords', $seo->keyw);
            $this->Seo('og:description',  $seo->desc);
        }
        return $this->render('international-patients', compact('model', 'page'));
    }

    public function actionContact()
    {
        $doctors = DoctorService::getByLimit(4);
        $model = new Contact();
        if ($model->load(Yii::$app->request->post())) {
            if ($model->save()) {
                \Yii::$app->session->setFlash(Alert::TYPE_SUCCESS, Yii::t('frontend', "Sent"));

                return $this->redirect('/contact');

                //  Yii::$app->mailer->compose()
                //  ->setFrom("bahromislomov3376@gmail.com")
                //  ->setTo('zarmedsayt@gmail.com')
                //  ->setSubject("Sizga xabar yuborildi")
                //  ->setHtmlBody("
                //  <b>Name: $model->name<br><br>
                //  Tel: $model->phone<br><br>
                //  Email: $model->email<br><br>
                //  Xabar: $model->message<b>
                //  ")
                //  ->send();


            } else {
                \Yii::$app->session->setFlash(Alert::TYPE_ERROR, 'Something went wrong, try again later!');
            }
        }
        $model = new Contact();
        $seo = Seo::findOne(['page'=>Yii::$app->controller->action->id]);
        $lang = Yii::$app->language;
        $this->Seo('og:site_name', Yii::t('frontend', "ZARMED PRATIKSHA"));
        $this->Seo('og:url', Yii::$app->request->hostInfo.'/'.Yii::$app->controller->action->id);
        $this->Seo('og:title', Yii::t('frontend', "ZARMED PRATIKSHA")." | ". Yii::t('frontend', 'Contacts'));
        $this->Seo('twitter:image', Yii::$app->request->hostInfo."images/inner/IMG_1656.jpg");
        if ($seo) {
            $this->Seo('description', $seo->desc);
            $this->Seo('keywords', $seo->keyw);
            $this->Seo('og:description',  $seo->desc);
        }
        return $this->render('contact', compact('model', 'doctors'));
    }

    public function actionAppointment()
    {
        $lang = Yii::$app->language;
        $name = 'name_' . $lang;
        $model = new Appointment();
        $doctors = DoctorService::getByLimit(4);
        $departments = DepartmentService::getAll();
        if ($model->load(Yii::$app->request->post())) {
            if ($model->save()) {

                \Yii::$app->session->setFlash(Alert::TYPE_SUCCESS, Yii::t('frontend', "Sent"));
                return $this->redirect('/appointment');
                
            } else {
                \Yii::$app->session->setFlash(Alert::TYPE_ERROR, 'Something went wrong, try again later!');
            }
        }
        $model = new Appointment();
        $seo = Seo::findOne(['page'=>Yii::$app->controller->action->id]);
        $lang = Yii::$app->language;
        $this->Seo('og:site_name', Yii::t('frontend', "ZARMED PRATIKSHA"));
        $this->Seo('og:url', Yii::$app->request->hostInfo.'/'.Yii::$app->controller->action->id);
        $this->Seo('og:title', Yii::t('frontend', "ZARMED PRATIKSHA")." | ". Yii::t('frontend', 'Appointment'));
        $this->Seo('twitter:image', Yii::$app->request->hostInfo."images/inner/IMG_1656.jpg");
        if ($seo) {
            $this->Seo('description', $seo->desc);
            $this->Seo('keywords', $seo->keyw);
            $this->Seo('og:description',  $seo->desc);
        }
        return $this->render('appointment', compact('departments', 'model', 'doctors'));
    }
    

    public function Seo($name, $content){
        if ($name == "twitter:image")
        return \Yii::$app->view->registerMetaTag([
            'name' => 'twitter:image',
            'content' => $content,
        ]);
        return \Yii::$app->view->registerMetaTag([
            'name' => $name,
            'content' => substr(trim(strip_tags($content)), 0, 160),
        ]);
    }

    public function actionAbout()
    {
        $tabs = AboutService::getAll();
        $seo = Seo::findOne(['page'=>Yii::$app->controller->action->id]);
        $lang = Yii::$app->language;
        $this->Seo('og:site_name', Yii::t('frontend', "ZARMED PRATIKSHA"));
        $this->Seo('og:url', Yii::$app->request->hostInfo.'/'.Yii::$app->controller->action->id);
        $this->Seo('og:title', Yii::t('frontend', "ZARMED PRATIKSHA")." | ". Yii::t('frontend', 'About Us'));
        $this->Seo('twitter:image', Yii::$app->request->hostInfo."images/inner/IMG_1656.jpg");
        if ($seo) {
            $this->Seo('description', $seo->desc);
            $this->Seo('keywords', $seo->keyw);
            $this->Seo('og:description',  $seo->desc);
        }
        
        return $this->render('about', compact('tabs'));
    }

    public function actionJobs()
    {
        $jobs = JobService::getAll();
        $seo = Seo::findOne(['page'=>Yii::$app->controller->action->id]);
        $lang = Yii::$app->language;
        $this->Seo('og:site_name', Yii::t('frontend', "ZARMED PRATIKSHA"));
        $this->Seo('og:url', Yii::$app->request->hostInfo.'/'.Yii::$app->controller->action->id);
        $this->Seo('og:title', Yii::t('frontend', "ZARMED PRATIKSHA")." | ". Yii::t('frontend', 'Job Portal'));
        $this->Seo('twitter:image', Yii::$app->request->hostInfo."images/inner/IMG_1656.jpg");
        if ($seo) {
            $this->Seo('description', $seo->desc);
            $this->Seo('keywords', $seo->keyw);
            $this->Seo('og:description',  $seo->desc);
        }
        return $this->render('job/index', compact('jobs'));
    }

    public function actionJobInfo($id)
    {
        $job = JobService::getOne($id);
        $lang = Yii::$app->language;
        $this->Seo('og:site_name', Yii::t('frontend', "ZARMED PRATIKSHA"));
        $this->Seo('og:title', Yii::t('frontend', "ZARMED PRATIKSHA")." | ".Yii::t('frontend', 'Job Portal')." - ".$job->{"title_$lang"});
        $this->Seo('twitter:image', Yii::$app->request->hostInfo.$job->img);
        if ($job) {
            $this->Seo('description', $job->{"description_$lang"});
            $this->Seo('keywords', $job->{"description_$lang"});
            $this->Seo('og:description', $job->{"description_$lang"});
        }
        return $this->render('job/job', compact('job'));
    }

    public function actionPage($u = null)
    {
        $this->layout = 'blank';
        $lang = Yii::$app->language;
        $model = new Contact();
        if ($model->load(Yii::$app->request->post())) {
            if ($model->save()) {
                \Yii::$app->session->setFlash(Alert::TYPE_SUCCESS, 'You have successfully sent your request!');
            } else {
                \Yii::$app->session->setFlash(Alert::TYPE_ERROR, 'Something went wrong, try again later!');
            }
        }
        $model = new Contact();

        $seo = Seo::findOne(['page'=>Yii::$app->controller->action->id]);
        $this->Seo('og:site_name', Yii::t('frontend', "ZARMED PRATIKSHA"));
        $this->Seo('og:url', Yii::$app->request->hostInfo.'/'.Yii::$app->controller->action->id);
        $this->Seo('og:title', Yii::t('frontend', "ZARMED PRATIKSHA")." | ". Yii::t('frontend', 'Google Ads'));
        $this->Seo('twitter:image', Yii::$app->request->hostInfo."images/inner/IMG_1656.jpg");
        if ($seo) {
            $this->Seo('description', $seo->desc);
            $this->Seo('keywords', $seo->keyw);
            $this->Seo('og:description',  $seo->desc);
        }
        if ($u) {
            $page = GoogleAds::find()->where(['url' => $u])->andWhere(['status' => 1])->one();
            
            return $this->render('ads', ['content' => $page->content, 'model' => $model]);
        }
        return $this->render('ads/index', ['content' => '', 'model' => $model]);
    }

    public function actionDoctorsByDepartment($department_id = null)
    {
        if ($department_id) {
            $doctors = ArrayHelper::map(DoctorService::getByDepartmentId($department_id), 'id', 'fullname');
            return json_encode($doctors);
        }
        return json_encode([]);
    }

    public function actionTimetableByDoctor($doctor_id, $date)
    {
        $doctor = DoctorService::getOne($doctor_id);
        $response = [
            'data' => [],
            'error' => false,
            'msg' => ''
        ];
        if ($doctor && $date) {
            $day = date('w', strtotime($date)) - 1;
            $selectedDate = [];
            foreach ($doctor->date as $datetime) {
                if ($datetime['day'] == $day) {
                    $selectedDate = $datetime;
                }
            }
            if (count($selectedDate) <= 0) {
                $response['error'] = true;
                $response['msg'] = 'No data found';

                return json_encode($response);
            }

            $times = ArrayHelper::map(Time::find()
                ->joinWith(['appointments' => function ($query) use ($date, $doctor_id) {
                    $query->onCondition(['appointment.date' => $date])
                        ->andOnCondition(['appointment.doctor_id' => $doctor_id]);
                }])
                ->andWhere(['appointment.time_id' => null])
                ->andWhere(['>=', 'time.time', $selectedDate['time_start']])
                ->andWhere(['<', 'time.time', $selectedDate['time_end']])->all(), 'id', 'time');
            $response['data'] = $times;
        } else {
            $response['error'] = true;
            $response['msg'] = 'No data found';
        }
        return json_encode($response);
    }

    private function menuItemsFormat($menu)
    {
        $menuItems = [];
        $lang = \Yii::$app->language;
        if (!empty($menu)) {
            foreach ($menu as $item) {
                $menuItems[] = ['route' => $item->route, 'name' => $item["name"], 'submenu' => $this->menuItemsFormat($item->menus)];
            }
            return $menuItems;
        }

        return [];
    }

    public function actionCheckup()
    {
        return $this->render("checkup");
    }


    public function actionOz()
    {
        return $this->redirect("/");
    }

    public function actionEn()
    {
        return $this->redirect("/");
    }

    public function actionRu()
    {
        return $this->redirect("/");
    }

    public function actionOKlinike()
    {
        return $this->redirect("/");
    }

    public function actionDiscount()
    {
        $m=Discount::find();

        $sahifa=new Pagination(["totalCount"=>$m->count(),'defaultPageSize'=>3]);

        $discount=$m->offset($sahifa->offset)->limit($sahifa->limit)->orderBy("id DESC")->all();

        return $this->render("discount",["discount"=>$discount,"sahifa"=>$sahifa]);
    }

    public function actionDiscounts($id)
    {
        $d=Discount::findOne(["id"=>$id]);
        return $this->render("discounts",["d"=>$d]);
    }

    public function actionKitob()
    {
        $this->layout = 'blank';
        return $this->render("kitob");
    }
    
}
