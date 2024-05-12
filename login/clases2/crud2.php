<?php

    class Crud extends Conexion{
          
        public function insertarDatos($datos) {
            try {
                $Conexion = parent:: conectar();
                $coleccion = $Conexion ->Registro;
                $respuesta = $coleccion-> insertOne($datos);

                return $respuesta;

            } catch (\Throwable $th) {
                return $th->getMessage();

            }

        }

    }
?>