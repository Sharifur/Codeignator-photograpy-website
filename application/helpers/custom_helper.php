<?php

     function ImageCheck ($name){
        if($name != ""){
            $ext = pathinfo($name);
            $ext = strtolower($ext['extension']);
            if($ext != "jpg" && $ext != "jpeg" && $ext != "png" && $ext != "gif"){
                return "";
            }else{
                return $ext;
            }
        }
        else{
            return "";
        }
    }

?>