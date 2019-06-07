<?php

use Phalcon\Mvc\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {

    }

    public submitAction()
    {
        //get variables from the post
        $id=$this->request->get('id');
		$ip=$this->request->get('ip');
        $date=$this->request->get('date');
        $text=$this->request->get('text');

        //save in the db
        $redes=new Redes();
		$redes->id=$id;
        $redes->ip=$ip;
        $redes->date=$date;
        $redes->text=$text;
        $redes->save();

        //redirect to home 
        $this->response->redirect('/home');
    }
}





?>