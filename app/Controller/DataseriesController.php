<?php

/**
 * Class DataseriesController
 */
class DataseriesController extends AppController
{
    public $uses=['Dataseries'];

    /**
     * beforeFilter function
     */
    public function beforeFilter()
    {
        parent::beforeFilter();
        $this->Auth->allow('totalfiles');
    }

    /**
     * View a property type
     * @param integer $id
     */
    public function view($id)
    {
        $data=$this->Dataseries->find('first',['conditions'=>['id'=>$id],'recursive'=>4]);
        $this->set('Dataseries',$data);
    }

    /**
     * Count the # of files
     * @return mixed
     */
    public function totalfiles()
    {
        $data=$this->Dataseries->find('count');
        return $data;
    }

}