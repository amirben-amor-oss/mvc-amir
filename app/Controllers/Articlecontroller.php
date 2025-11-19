<?php
namespace App\Controllers;

use App\Models\ArticleModel;
use Core\BaseController;
class Articlecontroller extends BaseController;
public function index(): 
{
    $article = new ArticleModel() 
     $data = [
        'title' => 'mes articles DWW',
        'articles' => $article->All()        
};
$this->render('article/index', $date);
}
}