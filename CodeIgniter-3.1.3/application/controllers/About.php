<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

  var $TPL;

  public function __construct()
  {
    parent::__construct();
    // Your own constructor code
    $this->TPL['contactsBoolean'] = false;
    $this->TPL['searchBoolean'] = false;
    $this->TPL['homeBoolean'] = false;
    $this->TPL['aboutBoolean'] = true;
  }

  public function index()
  {
    $this->template->show('about', $this->TPL);

  }
}
