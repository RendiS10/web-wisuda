    <?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class Auth extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->library('form_validation');
        }

        public function index()
        {
            $this->form_validation->set_rules(
                'email',
                'Email',
                'required|valid_email|trim',
            );
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
            if ($this->form_validation->run() == false) {
                $data['title'] = 'Login';
                $this->load->view('templates/header', $data);
                $this->load->view('auth/login');
                $this->load->view('templates/footer');
            } else {
                //validasi email 
                $this->_login();
            }
        }
        private function _login()
        {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $user = $this->db->get_where('user', ['email' => $email])->row_array();
            if ($user) {
                //usernya ada
                if ($user['status'] == 1) {
                    if (password_verify($password, $user['password'])) {
                        $data = [
                            'email' => $user['email'],
                            'hak_akses' => $user['hak_akses']
                        ];
                        $this->session->set_userdata($data);
                        if ($user['hak_akses'] == 1) {
                            redirect('mahasiswa');
                        } elseif ($user['hak_akses'] == 2) {
                            redirect('kaprodi');
                        } elseif ($user['hak_akses'] == 3) {
                            redirect('baa');
                        }
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Password Salah ! </div>');
                        redirect('auth');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Email Tidak Aktif ! </div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Email Anda Belum Ter-registrasi ! </div>');
                redirect('auth');
            }
        }

        public function registration()
        {
            $this->form_validation->set_rules('name', 'Name', 'required|trim');
            $this->form_validation->set_rules(
                'email',
                'Email',
                'required|trim|valid_email|is_unique[user.email]',
                [
                    'is_unique' => 'Email Anda Sudah Terdaftar ! '
                ]
            );
            $this->form_validation->set_rules(
                'password1',
                'Password',
                'required|trim|matches[password2]',
                [
                    'matches' => 'Password tidak sama !',

                ]
            );
            $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
            if ($this->form_validation->run() == false) {
                $data['title'] = 'Registration';
                $this->load->view('templates/header', $data);
                $this->load->view('auth/registration');
                $this->load->view('templates/footer');
            } else {
                $data = [
                    'name' => htmlspecialchars($this->input->post('name', true)),
                    'email' => htmlspecialchars($this->input->post('email', true)),
                    'image' => 'default.jpg',
                    'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                    'hak_akses' => 1,
                    'status' => 1,
                    'date_created' => time(),
                ];
                $this->db->insert('user', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Akun Anda Sudah Didaftarkan !</div>');
                redirect('auth');
            }
        }
        public function logout()
        {
            $this->session->unset_userdata('email');
            $this->session->unset_userdata('hak_akses');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Kamu Sudah Logout ! </div>');
            redirect('auth');
        }
    }
