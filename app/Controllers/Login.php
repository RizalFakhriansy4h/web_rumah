<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\UserTokenModel;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Login extends BaseController
{

    protected $session;    

    public function __construct()
    {
        $this->session = session();
    
    }
    public function index()
    {
        return view('login/login');
    }

    public function signup()
    {
        $data['judul'] = 'Sign Up';
        return view('login/signup',$data);
        

    }

    public function logout()
    {
        session()->remove('logged');
        return redirect()->to('/');
    }

    public function signuping()
    {

        // if ($session->get('email')) {
        //     return redirect()->to('user');
        // }

        $validation =  \Config\Services::validation();

        $validation->setRules([
            'nama' => 'required|trim',
            'email' => 'required|trim|valid_email|is_unique[users.email]',
            'password1' => 'required|trim|min_length[6]|matches[password2]',
            'password2' => 'required|trim|matches[password1]'
        ], [
            'email' => [
                'is_unique' => 'Email sudah terdaftar'
            ],
            'password1' => [
                'matches' => 'Validasi password salah',
                'min_length' => 'Password terlalu pendek'
            ],
            'password2' => [
                'matches' => 'Validasi password salah'
            ]
        ]);

        $this->session->setFlashdata('alert', '<div class="alert alert-success" role="alert">Pendaftaran Berhasil Silahkan aktivasi email</div>');

        $userModel = new UserModel();
        $userTokenModel = new UserTokenModel();
        
        $data = [
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password1'), PASSWORD_DEFAULT),
            // aktif ganti 0 jika sudah bisa kirim email
            'aktif' => 0,
            'data_dibuat' => time()
        ];

        $token = base64_encode(random_bytes (32));
        
        $user_token = [
            'email' => $this->request->getPost('email'),
            'token' => $token,
            'data_dibuat' => time()
        ];

        $userModel->insert($data);
        $userTokenModel->insert($user_token);
        
        $this->_sendEmail($token);
        


        return redirect()->to('/login');

    }

    public function logining()
    {

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $userModel = new \App\Models\UserModel();
        $user = $userModel->where('email', $email)->first();

        if ($user) {
            if ($user['aktif'] == 1) {
                // Periksa password
                if (password_verify($password, $user['password'])) {

                    $email_session = $user['email'];

                    $this->session->set('logged',$email_session);
                    
                    return redirect()->to('/');


                } else {
                    $this->session->setFlashdata('alert', '<div class="alert alert-danger" role="alert">PASSWORD SALAH</div>');
                    return redirect()->to('/login');
                }


            } else {
                $this->session->setFlashdata('alert', '<div class="alert alert-warning" role="alert">Email Belum di aktivasi</div>');
                return redirect()->to('/login');
            }



        } else {
            $this->session->setFlashdata('alert', '<div class="alert alert-danger" role="alert">Email Belum Terdaftar</div>');
            return redirect()->to('/login');
        }

    }

    private function _sendEmail($token)
    {
        $email = \Config\Services::email();

        $message = 'Click this link to verify your account: <a href="' . site_url('/verify') . '?email=' . $this->request->getPost('email') . '&token=' . urlencode($token) . '">Activate</a>';

        $email->setTo($this->request->getPost('email'));
        $email->setFrom('support@homespot.id', 'Tim 10 Hackton Maxy Academy');
        $email->setSubject('Activation email');
        $email->setMessage($message);

        if ($email->send()) {
            echo 'Email berhasil dikirim.';
        } else {
            $data = $email->printDebugger(['headers']);
            print_r($data);
        }
    }

    public function verify()
{
    $email = $this->request->getGet('email');
    $token = $this->request->getGet('token');

    $userModel = new UserModel();
    $userTokenModel = new UserTokenModel();

    $user = $userModel->where('email', $email)->first();

    if ($user) {
        $userToken = $userTokenModel->where('token', $token)->first();
        if ($userToken) {
            if (time() - $userToken['data_dibuat'] < (60 * 60 * 24)) {
                // Update status is_active menjadi 1
                $userModel->update($user['id'], ['aktif' => 1]);

                // Hapus token dari tabel user_token
                $userTokenModel->delete($userToken['id']); // Menggunakan $userTokenModel

                $this->session->setFlashdata('alert', '<div class="alert alert-success" role="alert">' . $email . ' has been activated! Please login. </div>');
                return redirect()->to('/login');
            } else {
                // Hapus user dan token jika token sudah kadaluarsa
                $userModel->delete($user['id']);
                $userTokenModel->delete($userToken['id']); // Menggunakan $userTokenModel

                $this->session->setFlashdata('alert', '<div class="alert alert-danger" role="alert">Token expired.</div>');
                return redirect()->to('/login');
            }
        } else {
            $this->session->setFlashdata('alert', '<div class="alert alert-danger" role="alert">Activation gagal, Token Tidak valid!</div>');
            return redirect()->to('/login');
        }
    } else {
        $this->session->setFlashdata('alert', '<div class="alert alert-danger" role="alert">Activation Email Gagal!</div>');
        return redirect()->to('/login');
    }
}


}
