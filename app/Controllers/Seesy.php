<?php

namespace App\Controllers;

use App\Models\UsersM;
use App\Models\VacancyM;
use App\Models\CandidateM;
use App\Models\Chat;
use CodeIgniter\API\ResponseTrait;

class Seesy extends BaseController

{
    use ResponseTrait;
    public function index()
    {
        return view('index');
    }

    public function signUp()
    {
        return view('signUp');
    }

    public function aboutCompany()
    {
        return view('aboutCompany');
    }

    public function quickApply()
    {
        return view('quickApply');
    }

    public function save()
    {
        $usersM = new UsersM();
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $usersM->insert($_POST);
        return $this->response->redirect(site_url('seesy'));
    }

    public function login()
    {
        if ($this->exists($_POST['email'], $_POST['password']) != NULL) {
            $usersM = new UsersM();
            $seesy = $usersM->where('email', $_POST['email'])->first();
            $session = session();
            $session->set('email', $_POST['email']);
            $session->set('id', $_POST['id']);
            return $this->response->redirect(site_url('seesy/aboutCompany'));
        } else {
            $data['msg'] = 'invalid';
            return view('asking', $data);
        }
    }

    private function exists($email, $password)
    {
        $usersM = new UsersM();
        $seesy = $usersM->where('email', $email)->first();
        if ($usersM != NULL) {
            if (password_verify($password, $seesy['password'])) {
                return $seesy;
            }
        }
    }

    public function store()
    {
        $session = session();
        $usersM = new UsersM();
        $file = $this->request->getFile('companyLogo');
        if ($file->isValid() && !$file->hasMoved()) {
            $companyLogo = $file->getRandomName();
            $file->move('uploads', $companyLogo);
        }
        $companydata = [
            'description' => $this->request->getPost('description'),
            'companyLogo' => $companyLogo,
            'location' => $this->request->getPost('location'),
            'member' => $this->request->getPost('member'),
        ];
        $usersM->update($session->get("id"), $companydata);
        return $this->response->redirect(site_url('seesy/uploadVideo'));
    }

    public function uploadVideo()
    {

        return view('uploadVideo');
    }

    public function videostore()
    {
        $usersM = new UsersM();
        $session = session();
        $file = $this->request->getFile('companyVideo');
        if ($file->isValid() && !$file->hasMoved()) {
            $companyVideo = $file->getRandomName();
            $file->move('uploads', $companyVideo);
        }
        $dataa = [
            'companyVideo' => $companyVideo,
        ];
        $usersM->update($session->get("id"), $dataa);
        return $this->response->redirect(site_url('seesy/createVecancy'));
    }

    public function createVecancy()
    {

        return view('createVecancy');
    }

    public function vacancy()
    {
        $session = session();
        $vacancyM = new vacancyM();

        $file = $this->request->getFile('companyLogo');
        if ($file->isValid() && !$file->hasMoved()) {
            $companyLogo = $file->getRandomName();
            $file->move('uploads', $companyLogo);
        }
        $vacancydata = [
            'title' => $this->request->getPost('title'),
            'location' => $this->request->getPost('location'),
            'salaryFrom' => $this->request->getPost('salaryFrom'),
            'salaryTo' => $this->request->getPost('salaryTo'),
            'companyLogo' => $companyLogo,
            'tags' => $this->request->getPost('tags'),
            'BenefitsOfWorking' => $this->request->getPost('benifit'),
            'QuestionsForCandidates' => $this->request->getPost('question'),
            // 'usId' => $this->request->getPost($session->get("id")),
        ];
        $vacancyM->insert($vacancydata);
        return $this->response->redirect(site_url('seesy/previewVacency'));
    }


    public function previewVacency()
    {
        $vacancyM = new VacancyM();
        $usersM = new UsersM();
        $data = [
            'vacancy' => $vacancyM->findAll(),
            'users' => $usersM->findAll(),
        ];
        return view('previewVacency', $data);
    }

    public function dashbord()
    {
        $candidateM = new CandidateM();
        $usersM = new UsersM();
        // $jobs['vacancy'] = $vacancyM->find($id);
        $applyer = [
            'vacancy' => $candidateM->findAll(),
            'users' => $usersM->findAll(),
        ];
        return view('dashboardVacancy', $applyer);
    }

    public function interViewVideos()
    {
        $usersM = new UsersM();
        $candidateM = new CandidateM();
        $applyer = [
            'vacancy' => $candidateM->findAll(),
            'users' => $usersM->findAll(),
        ];
        return view('interViewVideos', $applyer);
    }

    public function getProfile($id)
    {
        $candidateM = new CandidateM();
        $usersM = new UsersM();
        // $jobs['vacancy'] = $vacancyM->find($id);
        $jobs = [
            'candidate' => $candidateM->find($id),
            'users' => $usersM->findAll(),
        ];
        return view('candidateProfile', $jobs);
    }

    public function apply()
    {
        $session = session();
        $candidateM = new CandidateM();

        $file = $this->request->getFile('avatar');
        if ($file->isValid() && !$file->hasMoved()) {
            $avatar = $file->getRandomName();
            $file->move('uploads', $avatar);
        }
        $candidatedata = [
            'about' => $this->request->getPost('about'),
            'avatar' => $avatar,
            'currentJobTitle' => $this->request->getPost('currentJobTitle'),
            'currentExperience' => $this->request->getPost('currentExperience'),
            'desiredJobTitle' => $this->request->getPost('desiredJobTitle'),
            'desiredExperience' => $this->request->getPost('desiredExperience'),
            'SalaryExpectation' => $this->request->getPost('SalaryExpectation'),
            'skills' => $this->request->getPost('skills'),
        ];
        $candidateM->insert($candidatedata);
        return $this->response->redirect(site_url('seesy/afterApply'));
    }

    public function afterApply()
    {
        return view('afterApply');
    }

    public function jobbord()
    {
        $vacancyM = new VacancyM();
        $jobs = [
            'vacancy' => $vacancyM->findAll(),
        ];
        return view('jobBord', $jobs);
    }

    public function get($id)
    {
        $vacancyM = new VacancyM();
        // $jobs['vacancy'] = $vacancyM->find($id);
        $jobs = [
            'vacancy' => $vacancyM->find($id),
        ];
        return view('viewJobPost', $jobs);
    }

    public function chat()
    {
        $chatM = new Chat();
        $usersM = new UsersM();
        $profile = [
            // 'users' => $usersM->find($session->get("id")),
            'users' => $usersM->findAll(),
            'chat' => $chatM->findAll(),
        ];
        return view('message', $profile);
    }

    // public function messg()
    // {
    //     $session = session();
    //     $chatM = new Chat();
    //     $chat = [
    //         'message' => $this->request->getPost('message'),
    //     ];
    //     $chatM->insert($chat);
    //     return $this->response->redirect(site_url('seesy/messages'));
    // }

    //     public function chat()
    //     {

    //         return view('message');
    //     }
}
