<?php
class Examen extends BaseController
{
    private $Examenens;

    function __construct()
    {
        $this->Examenens = $this->model('ExamenModel');
    }
    function index()
    {
        $result = $this->Examenens->getExamens();
        
        $data = [
            'title' => "Overzicht Afgenomen Examens Examinatoren",
            'result' => $result
        ];
        
        // var_dump($data);
        $this->view('Examen/index',$data);
    }
}