<?php



class Curso{

  //  Atributos
  //  Arreglo associativo multidimensional
  private $data = [
    [
      "id"  => 1,
      "nombre" => "AutoCAD",
      "nivel" => "Básico",
      "precio" => 300,
      "horas" => 30,
    ],
    [
      "id"  => 2,
      "nombre" => "Excel",
      "nivel" => "Intermediate",
      "precio" => 280,
      "horas" => 25,
    ],
    [
      "id"  => 3,
      "nombre" => "Java",
      "nivel" => "Avanzado",
      "precio" => 290,
      "horas" => 30,
    ],
    [
      "id"  => 4,
      "nombre" => "Python",
      "nivel" => "Intermediate",
      "precio" => 240,
      "horas" => 25,
    ],
    [
      "id"  => 5,
      "nombre" => "JavaScript",
      "nivel" => "Avanzado",
      "precio" => 350,
      "horas" => 40,
    ],
  ];

  //  Métodos
  public  function listarCursos(){
    return $this -> data;
  }
}

