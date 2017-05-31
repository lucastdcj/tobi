<?php

/**
 * Class Forum
 * The index controller
 */
class Forum extends Controller {
  /**
   * Construct this object by extending the basic Controller class
   */
  function __construct() {
    parent::__construct();
  }
  
  /**
   * Handles what happens when user moves to URL/index/index, which is the same like URL/index or in this
   * case even URL (without any controller/action) as this is the default controller-action when user gives no input.
   */
  function show() {
    Auth::handleSection(1);
    $this->view->render('forum/show');
  }
}
