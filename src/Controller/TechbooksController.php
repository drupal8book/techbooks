<?php

/**
 * @file
 * Contains Drupal\techbooks\Controller\TechbooksController.
 */

namespace Drupal\techbooks\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class TechbooksController.
 *
 * @package Drupal\techbooks\Controller
 */
class TechbooksController extends ControllerBase {

  public function bookList() {
    $book_list = \Drupal::service('techbooks.listbooks')->getBooks();
    $render = '';
    foreach($book_list as $book) {
      $render .= '<div><span>Title: ' . $book['title'] . '</span></div>';
      $render .= '<div><span>Author: ' . $book['author'] . '</span></div>';
    }
    return [
        '#type' => 'markup',
        '#markup' => $render
    ];
  }
}
