<?php

// para cambios: composer dumpautoload
// para agregar nuevos archivos: 1.- composer.json "autoload" "files", 2.- composer dumpautoload

function setRegistro(){
    return request()->routeIs('registro') ? 'justify-content-center imagen1 fondo-registro' : '';
}