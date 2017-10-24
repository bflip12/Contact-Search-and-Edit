<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacts extends CI_Controller {

  var $TPL;

  public function __construct()
  {
    parent::__construct();
    // Your own constructor code
    $this->TPL['contactsBoolean'] = true;
    $this->TPL['searchBoolean'] = false;
    $this->TPL['homeBoolean'] = false;
    $this->TPL['aboutBoolean'] = false;
  }

  public function index()
  {
    $query = $this->db-> query("SELECT * FROM phonebook ORDER BY id ASC;");
    $this->TPL['listing'] = $query->result_array();
    $this->template->show('contacts', $this->TPL);

  }

  public function EditField()
  {
    $name = $_POST['name'];
    $value = $_POST['value'];
    $ID = $_POST['pk'];
    $query = $this->db->query("UPDATE phonebook SET $name = '$value' WHERE id = $ID");
  }
}
