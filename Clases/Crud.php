<?php

    class Crud extends Conexion{
            public function mostrarDatos() {

                try{
                    $Conexion = conexion:: conectar();
                    $coleccion = $Conexion ->personas;
                    $datos = $coleccion -> find();

                    return $datos;


                }catch(\Throwable $th){

                    return $th -> getMessage();

                }

            }
            public function ObtenerDocumento($id) {
                try {
                    $Conexion = conexion:: conectar();
                    $coleccion = $Conexion ->personas;
                    $datos = $coleccion->findOne(
                            array(
                                '_id' =>  new MongoDB\BSON\ObjectId($id)
                            )

                    );
                    return $datos;

                } catch (\Throwable $th) {
                    return $th->getMessage();
                }


            }
        public function insertarDatos($datos) {
            try {
                $Conexion = parent:: conectar();
                $coleccion = $Conexion ->personas;
                $respuesta = $coleccion-> insertOne($datos);

                return $respuesta;

            } catch (\Throwable $th) {
                return $th->getMessage();

            }

        }

        public function EliminarDatos($id){
            try {
                $Conexion = parent:: conectar();
                $coleccion = $Conexion ->personas;
                $respuesta = $coleccion->deleteOne(
                                array(
                                    '_id' =>  new MongoDB\BSON\ObjectId($id)
                                )

                );

                return $respuesta;

            } catch (\Throwable $th) {
                return $th->getMessage();
            }

        }
        public function ActualizarDatos($id,$datos){
            try {
                $Conexion = parent:: conectar();
                $coleccion = $Conexion ->personas;
                $respuesta = $coleccion->updateOne(
                                
                                    ['_id' =>  new MongoDB\BSON\ObjectId($id)],
                                    [
                                        '$set' => $datos
                                    ]
                                

                );

                return $respuesta;

            } catch (\Throwable $th) {
                return $th->getMessage();
            }

        }

        public function mensajeCrud($mensaje){

            $msg= '';

            if($mensaje == 'insert'){
                $msg = 'swall("Excelente!","Agregado con exito!","success")';

            }else if($mensaje == 'update'){
                $msg = 'swall("Excelente!","Actualizar con exito!","success")';

            }else if($mensaje == 'delete'){
            $msg = 'swall("Excelente!","Eliminar con exito!","success")';
            }
            return $msg;
        }

    }
?>