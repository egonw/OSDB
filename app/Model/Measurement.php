<?php

App::uses('AppModel', 'Model');

/**
 * Class Measurement
 */
class Measurement extends AppModel {

    public $hasMany=['Setting'];

    public $belongsTo=['Methodology'];

    /**
     * General function to add a new measurement
     * @param $data
     * @return integer
     */
    public function add($data)
    {
        $model='Measurement';
        $this->create();
        $ret=$this->save([$model=>$data]);
        $this->clear();
        return $ret[$model];
    }
}
?>