<?php
/**
* BaseController
*/
class HomeController extends BaseController
{
  
  public function home()
  {
  	$article = Article::first();
  	$all = Article::all('title');
  	$this->view = View::make("home")->with('article',Article::first())->withTitle("MFFC:-D")->withFuckMe("ok!");
  	// $this->mail = Mail::to(['ooxx@gmail.com', 'ooxx@qq.com'])->from('MotherFucker <ooxx@163.com>')->title('Fuck Me!')->content('<h1>Hello~~</h1>');
  }
}