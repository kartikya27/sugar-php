<?php 


class userController extends controller{

    public function show($x){

        $modelName = $this->model('User')->fetch();

        $data =[
            'title' =>"Title",
        ];  
        $this->renderView('user', $data);
    }


}