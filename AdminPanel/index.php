<?php

use App\Models\Article;

require __DIR__ . '/../autoload.php';

$articles = Article::findAll();

include __DIR__ . '/../App/templates/admin/index.php';