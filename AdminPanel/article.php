<?php

use App\Models\Article;

require __DIR__ . '/../autoload.php';

$article = Article::findById($_GET['id']);

include __DIR__ . '/../App/templates/admin/article.php';