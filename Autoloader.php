<?php
function autoload($class){
    if(is_file(str_replace("\\", "/", KEKE_ROOT.'../'."$class".'.'.'php'))){
        require(str_replace("\\", "/", KEKE_ROOT.'../'."$class".'.'.'php'));
    }
}
spl_autoload_register("autoload");
