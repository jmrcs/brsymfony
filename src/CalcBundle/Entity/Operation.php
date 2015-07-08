<?php

namespace CalcBundle\Entity;

class Operation
{
    protected $firstOperator;
    protected $lastOperator;
    protected $action;
    protected $result;
    protected $id;

    public function setFirstOperator($op){
        $this->firstOperator = $op;
    }

    public function getFirstOperator(){
        return $this->firstOperator;
    }

    public function setLastOperator($op){
        $this->lastOperator = $op;
    }

    public function getLastOperator(){
        return $this->lastOperator;
    }

    public function setAction($act){
        $this->action = $act;
    }

    public function getAction(){
        return $this->action;
    }

    public function setResult($r){
        $this->result = $r;
    }

    public function getResult(){
        return $this->result;
    }

    public function getId(){
        return $this->id;
    }


}