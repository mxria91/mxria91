<?php


/**
 * Namespaces solve two problems:
 * 1) allow for better organization by grouping classes that work together to perform a task
 * 2) they allow the same name to be used for more than one class 
 * 
 * A namespace should be the first thing declared in a php File.
 */


 // Create a Table class in the Html namespace:

 namespace Html;

 class Table {
    public $title = "";
    public $numRows = 0;
    public function message() {
      echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
    }
  }
  $table = new Table();
  $table->title = "My table";
  $table->numRows = 5;
  
  ?>
  
  <!DOCTYPE html>
  <html>
  <body>
  
  <?php
  $table->message();
  ?>
  
  </body>
  </html>