<?php 

    function admin_login(){
        session_start();
        if(!(isset($_SESSION['adminLogin']) && $_SESSION['adminLogin']==true)){
        echo "
            <script> 
                window.location.href ='admin.php';
            </script>"; 
        }
        session_regenerate_id(true); //this function will generate a new session id always when we reload the page 
    }


    function redirect($url){
        //redirect function is used to redirect us from one page to another by js components ! 
        echo "
        <script> 
            window.location.href ='$url';
        </script>"; 
    }
    function alert($type,$msg){
        $bs_class = ($type == "success")? "alert-success" : "alert-danger"; 

        echo <<<ABC
        <div class="alert $bs_class alert-dismissible fade show custom-alert" role="alert">
            <strong class = "me-3">$msg</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ABC ;
    }


?>
