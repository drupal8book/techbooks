<?php

/**
 * @file
 * Contains Drupal\techbooks\ListBooks.
 */

namespace Drupal\techbooks;


/**
 * Class ListBooks.
 *
 * @package Drupal\techbooks
 */
class ListBooks {

  public function __construct($books) {
    $this->setBooks($books);
  }

  public function setBooks($books) {
    $this->books = $books;
  }

  public function getBooks($books) {
    return $this->books;
  }
}
