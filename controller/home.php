<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this -> load -> model('User_Model');
		$this -> load -> library('session');
		$this -> load -> helper('url');
	}

	function index() {
		if ($this -> autoSignIn())
			return redirect('/home/main', 'refresh');
		$this -> load -> view('home', array(
			'linkSignUp' => '/home/signup',
			'linkSignIn' => '/home/signin'
		));
	}

	function signUp() {
		$email = $this -> input -> post('email', true);
		$password = $this -> input -> post('password', true);
		//TODO verify data ...
		$newUser = array(
			'email' => $email,
			'password' => $password
		);
		try {
			$userID = $this -> User_Model -> insertNewUser($newUser);
			$this -> session -> set_userdata('email', $email);
			$this -> session -> set_userdata('userID', $userID);
			redirect('/home/main', 'refresh');
		} catch(Exception $e) {
			$this -> load -> view('home', array('msg' => $e -> getMessage()));
		}
	}

	function signIn() {
		$email = $this -> input -> post('email', true);
		$password = $this -> input -> post('password', true);
		$user = $this -> User_Model -> getUser(array(
			'email' => $email,
			'password' => $password
		));
		if (empty($user))
			return $this -> load -> view('home', array('msg' => 'Invalid email or password'));
		$this -> session -> set_userdata('email', $user['email']);
		$this -> session -> set_userdata('userID', $user['userID']);
		redirect('/home/main', 'refresh');
	}

	function autoSignIn() {
		return $this -> session -> userdata('email') and $this -> session -> userdata('userID');
	}

	function signOut() {
		$this -> session -> sess_destroy();
		redirect('/', 'refresh');
	}

	function main() {
		$this -> load -> view('main', array(
			'email' => $this -> session -> userdata('email'),
			'userID' => $this -> session -> userdata('userID'),
			'linkSignOut' => '/home/signout'
		));
	}

}
