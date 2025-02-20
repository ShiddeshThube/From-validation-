<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('session');
        $this->load->helper('url');
    }

    public function register() {
        if ($this->input->post()) {
            $data = [
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT)
            ];
            if ($this->User_model->insert_user($data)) {
                $this->session->set_flashdata('success', 'Registration successful! Please login.');
                redirect('user/login');
            } else {
                $this->session->set_flashdata('error', 'Registration failed.');
            }
        }
        $this->load->view('register');
    }

   
    public function login() {
        if ($this->input->post()) {
            $user = $this->User_model->get_user_by_email($this->input->post('email'));

            if ($user && password_verify($this->input->post('password'), $user['password'])) {
                $this->session->set_userdata('user_id', $user['id']);
                redirect('user/profile');
            } else {
                $this->session->set_flashdata('error', 'Invalid email or password.');
            }
        }
        $this->load->view('login');
    }

   
    public function profile() {
        if (!$this->session->userdata('user_id')) redirect('user/login');

        if ($this->input->post()) {
            $data = [
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email')
            ];
            $this->User_model->update_user($this->session->userdata('user_id'), $data);
            $this->session->set_flashdata('success', 'Profile updated!');
            redirect('user/profile');
        }
        $data['user'] = $this->User_model->get_user_by_id($this->session->userdata('user_id'));
        $this->load->view('profile', $data);
    }

   
    public function change_password() {
        if (!$this->session->userdata('user_id')) redirect('user/login');

        if ($this->input->post()) {
            $user = $this->User_model->get_user_by_id($this->session->userdata('user_id'));

            if (password_verify($this->input->post('current_password'), $user['password'])) {
                $new_password = password_hash($this->input->post('new_password'), PASSWORD_BCRYPT);
                $this->User_model->update_user($user['id'], ['password' => $new_password]);
                $this->session->set_flashdata('success', 'Password changed successfully!');
                redirect('user/change_password');
            } else {
                $this->session->set_flashdata('error', 'Current password is incorrect.');
            }
        }
        $this->load->view('change_password');
    }

    
    public function logout() {
        $this->session->unset_userdata('user_id');
        redirect('user/login');
    }
}
