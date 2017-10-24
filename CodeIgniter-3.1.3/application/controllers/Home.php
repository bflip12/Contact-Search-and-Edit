<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  var $TPL;

  public function __construct()
  {
    parent::__construct();
    // Your own constructor code
    $this->TPL['contactsBoolean'] = false;
    $this->TPL['searchBoolean'] = false;
    $this->TPL['homeBoolean'] = true;
    $this->TPL['aboutBoolean'] = false;
  }

  public function index()
  {
    $this->template->show('home', $this->TPL);

  }
}
