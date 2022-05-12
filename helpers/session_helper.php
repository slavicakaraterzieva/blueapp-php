<?php
session_start();
 
 function msg($name = '', $message = '', $class = 'alert alert-success'){
if(!empty($name)){
  if(!empty($message) && empty($_SESSION[$name])){
    if(!empty($_SESSION[$name])){
    unset($_SESSION[$name]);
      }

if(!empty($_SESSION[$name.'_class'])){
unset($_SESSION[$name.'_class']);
}

$_SESSION[$name] = $message;
$_SESSION[$name.'_class'] = $class;
    } 

elseif(empty($message) && !empty($_SESSION[$name])){
$class = !empty($_SESSION[$name.'_class']) ? $_SESSION[$name.'_class'] : '';
//echo'<div class="text-center'.$class.'" id="msg-flash" style="font-size:1rem; padding-left:1rem">'.$_SESSION[$name].'<div>';
echo  "<div class='text-center. $class'  id='msg-flash' style='font-size:1.2rem;'>".$_SESSION[$name]."<div>";
unset($_SESSION[$name]);
unset($_SESSION[$name.'_class']);
}
  }
}  //end of function msg success

function msgdanger($name = '', $message = '', $class = 'alert alert-danger'){
if(!empty($name)){
  if(!empty($message) && empty($_SESSION[$name])){
    if(!empty($_SESSION[$name])){
          unset($_SESSION[$name]);
      }

if(!empty($_SESSION[$name.'_class'])){
unset($_SESSION[$name.'_class']);
}

$_SESSION[$name] = $message;
$_SESSION[$name.'_class'] = $class;
    }

 elseif(empty($message) && !empty($_SESSION[$name])){
$class = !empty($_SESSION[$name.'_class']) ? $_SESSION[$name.'_class'] : '';
//echo'<div class="text-center'.$class.'" id="msg-flash" style="font-size:1rem; padding-left:1rem">'.$_SESSION[$name].'<div>';
echo  "<div class='text-center. $class'  id='msg-flash' style='font-size:1rem; padding-left:1rem'>".$_SESSION[$name]."<div>";
unset($_SESSION[$name]);
unset($_SESSION[$name.'_class']);
}
  }
}//end of function msg danger 




/*   function msg($name = "", $message = "", $class = "alert alert-success")
{
if (!empty($name) && !empty($message) && !empty($class)) {
            if (!empty($_SESSION[$name])) {
                unset($_SESSION[$name]);
            }
            if (!empty($_SESSION[$name."_class"])) {
                unset($_SESSION[$name."_class"]);
            }
            $_SESSION[$name] = $message;
            $_SESSION[$name."_class"] = $class;
        }//if ends
elseif (empty($message) && empty($class) && !empty($name) && !empty($_SESSION[$name])) {
//echo  "<div class='text-center. $class' id='msg-flash'>".($_SESSION[$name."_class"])."</div>" ;

echo  "<div class='text-center. $class'  id='msg-flash' style='font-size:2rem; padding-left:1rem'>".$_SESSION[$name]."<div>";
            unset($_SESSION[$name]);
            unset($_SESSION[$name."_class"]);
        }
} */  
?>

