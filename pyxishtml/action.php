<?php
if(isset($_POST['Organiser'])){

    if((isset($_POST['message'])) AND(isset($_POST['email'])) AND (isset($_POST['nomprenom']))){
       if((!empty($_POST['message'])) AND(!empty($_POST['email']) AND !empty($_POST['nomprenom'])){
        
                $nomprenom=htmlspecialchars($_POST[ nomprenom]);
                $nomemail=htmlspecialchars($_POST[ nomprenom]);
                $nommessage=htmlspecialchars($_POST[ nomprenom]);

                echo" <b>$nomprenom<b>$nomemail<b> $nommessage";

            }

    
      }

}

?>