<?php

return array(
  'host'     => 'localhost',
  'db'       => 'vde-project',
  'username' => 'root',
  'password' => 'kakm0nster',
  'charset'  => 'utf8',
  'options'  => [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
    PDO::MYSQL_ATTR_FOUND_ROWS   => true,
  ],
  'salt' => 'asaltystring2233%!.;',
);
