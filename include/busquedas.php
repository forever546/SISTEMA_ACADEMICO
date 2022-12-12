<?php
function buscarGenero($conexion){
    $sql = "SELECT * FROM genero";
    return mysqli_query($conexion, $sql);
}
function buscarCargo($conexion){
    $sql = "SELECT * FROM cargo";
    return mysqli_query($conexion, $sql);
}

function buscarCargoById($conexion, $id){
    $sql = "SELECT * FROM cargo WHERE id='$id'";
    return mysqli_query($conexion, $sql);
}

function buscarProgramaEstudio($conexion){
    $sql = "SELECT * FROM programa_estudios";
    return mysqli_query($conexion, $sql);
}
function buscarSemestre($conexion){
    $sql = "SELECT * FROM semestre";
    return mysqli_query($conexion, $sql);
}
function buscarSemestreById($conexion, $id){
    $sql = "SELECT * FROM semestre WHERE id='$id'";
    return mysqli_query($conexion, $sql);
}

function buscarCondicion($conexion){
    $sql = "SELECT * FROM condicion";
    return mysqli_query($conexion, $sql);
}

function buscarCondicionById($conexion, $id){
    $sql = "SELECT * FROM condicion WHERE id='$id'";
    return mysqli_query($conexion, $sql);
}

function buscarEstudianteByDni($conexion, $dni){
    $sql = "SELECT * FROM estudiante WHERE dni='$dni'";
    return mysqli_query($conexion, $sql);
}
function buscarEstudianteById($conexion, $id){
    $sql = "SELECT * FROM estudiante WHERE id='$id'";
    return mysqli_query($conexion, $sql);
}
function buscarEstudiantes($conexion){
    $sql = "SELECT * FROM estudiante";
    return mysqli_query($conexion, $sql);
}
function buscarDocenteByDni($conexion, $dni){
    $sql = "SELECT * FROM estudiante WHERE dni='$dni'";
    return mysqli_query($conexion, $sql);
}
function buscarDocenteById($conexion, $id){
    $sql = "SELECT * FROM docente WHERE id='$id'";
    return mysqli_query($conexion, $sql);
}
function buscarDocente($conexion){
    $sql = "SELECT * FROM docente";
    return mysqli_query($conexion, $sql);
}
function buscarProgramaEstudios($conexion){
    $sql = "SELECT * FROM programa_estudios";
    return mysqli_query($conexion, $sql);
}
function buscarProgramaEstudiosById($conexion, $id){
    $sql = "SELECT * FROM programa_estudios WHERE id='$id'";
    return mysqli_query($conexion, $sql);
}

function buscarUsuarioEstudiante($conexion){
    $sql = "SELECT * FROM usuarios_estudiante";
    return mysqli_query($conexion, $sql);
}

function buscarPeriodoAcademico($conexion){
    $sql = "SELECT * FROM periodo_academico";
    return mysqli_query($conexion, $sql);
}
function buscarPeriodoAcademicoById($conexion, $id){
    $sql = "SELECT * FROM periodo_academico WHERE id='$id'";
    return mysqli_query($conexion, $sql);
}

function buscarModuloFormativo($conexion){
    $sql = "SELECT * FROM modulo_formativo";
    return mysqli_query($conexion, $sql);
}

function buscarModuloFormativoById($conexion, $id){
    $sql = "SELECT * FROM modulo_formativo WHERE id='$id'";
    return mysqli_query($conexion, $sql);
}

function buscarUnidadDidactica($conexion){
    $sql = "SELECT * FROM unidad_didactica";
    return mysqli_query($conexion, $sql);
}
function buscarUnidadDidacticaById($conexion, $id){
    $sql = "SELECT * FROM unidad_didactica WHERE id='$id'";
    return mysqli_query($conexion, $sql);
}

function buscarUsuarioDocentes($conexion){
    $sql = "SELECT * FROM usuarios_docentes";
    return mysqli_query($conexion, $sql);
}
function buscarUsuarioDocentesById($conexion, $id){
    $sql = "SELECT * FROM usuarios_docentes WHERE id='$id'";
    return mysqli_query($conexion, $sql);
}
?>