<?php
// WARNING This file drops all tables (e.g. it destroys all data)!
// Only run this when you know what you are doing!
require './global.php';

try {
  kCore::enableDebugging(TRUE);

  $sql = file_get_contents('kusaba/model/model.sql', TRUE);
  $db = kCore::getDatabase();

  $db->translatedExecute($sql);

  $categories = array(
    'Japanese Culture' => array(
      array(
        'name' => 'Anime & Manga',
        'short_u_r_l' => 'a',
      ),
      array(
        'name' => 'Anime/Cute',
        'short_u_r_l' => 'c',
      ),
      array(
        'name' => 'Anime/Wallpapers',
        'short_u_r_l' => 'w',
      ),
      array(
        'name' => 'Mecha',
        'short_u_r_l' => 'm',
      ),
      array(
        'name' => 'Cosplay & EGL',
        'short_u_r_l' => 'cgl',
      ),
      array(
        'name' => 'Cute/Male',
        'short_u_r_l' => 'cm',
      ),
      array(
        'name' => 'Flash',
        'short_u_r_l' => 'f',
      ),
      array(
        'name' => 'Transportation',
        'short_u_r_l' => 'n',
      ),
      array(
        'name' => 'Otaku Culture',
        'short_u_r_l' => 'jp',
      ),
      array(
        'name' => 'Pokémon',
        'short_u_r_l' => 'vp',
      ),
    ),
    'Interests' => array(),
    'Creative' => array(),
    'Adult' => array(),
    'Other' => array(),
    'Misc' => array(
      array(
        'name' => 'Random',
        'short_u_r_l' => 'b',
      ),
      array(
        'name' => 'Request',
        'short_u_r_l' => 'r',
      ),
      array(
        'name' => 'ROBOT9001',
        'short_u_r_l' => 'r9k',
      ),
      array(
        'name' => 'Politically Incorrect',
        'short_u_r_l' => 'pol',
      ),
      array(
        'name' => 'Social',
        'short_u_r_l' => 'soc',
      ),
    ),
  );
  foreach ($categories as $category_name => $boards) {
    $category = new Category;
    $category->setName($category_name);
    $category->store();

    foreach ($boards as $info) {
      $board = new Board;
      $board->setCategoryName($category_name);
      $board->setName($info['name']);
      $board->setShortURL($info['short_u_r_l']);
      $board->store();
    }
  }
}
catch (fSQLException $e) {
  printf("\n".'SQL exception: "%s"'."\n", $e->getMessage());
}
