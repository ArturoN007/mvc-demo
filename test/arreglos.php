<?php

//  Array (arreglo) más sencillo
$platos = ["Ceviche","Arroz con pollo","Carapulcra","Ají Gallina","Lomo Saltado"]
echo $platos[0];  //  Primero

$amigos = array("José", "Joel", "Lorenzo", "César");
echo $amigos[1];  //  Segundo

//  Array MULTI dimensional
$aplicaciones = [
  ["Photoshop", "Corel Draw", "Premier", "Muse"],
  ["VSCode", "Xampp" "NetBeans", "Erwin", "Notepad++"],
  ["Excel", "SAP", "AutoCAD", "PowerBI", "Project"]
]

//  Obtener VSCode
echo $aplicaciones[1][0];

//  Obtener Muse
echo $aplicaciones[0][3];

//  Obtener SAP
echo $aplicaciones[2][1];

//  Hasta aquí, cualquier de los arreglos anteriores, utiliza un INDICE(int)
//  ARREGLOS ASOCIATIVOS...  KEY => VALUE
$datosPersonales = [
  "apellidos"     =>  "FRANCIA MINAYA",
  "nombres"       =>  "Jhon Edward",
  "especialidad"  =>  "Ingenieria de Software con IA",
  "email"         =>  "jfrancia@gmail.pe",
  "edad"          =>  38,
  "estaCasado"    =>  true,
  "peliculas"     =>  ["EndGame", "Pinocho", "IronMan"]
];

//  Obtener la especialidad
echo $datosPersonales["especialidad"];

//  Obtener la primera de tus películas favoritas
echo $datosPersonales["peliculas"];