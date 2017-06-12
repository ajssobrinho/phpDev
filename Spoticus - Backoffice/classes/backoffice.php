<?php
 require_once('database.php');


class backoffice{



//----------------->chat_interno<-----------------


public function insere_msg($nome_user, $msg){
   $db = new OOP_Database();
   $resultado = $db->executaQuery ("INSERT INTO `chat_msg`(nome_user,mensagem) VALUES ('$nome_user','$msg')");
}



public function lista_msg(){
   $db = new OOP_Database();
   $resultado = $db->executaQuery ("SELECT * FROM `chat_msg` ORDER BY `data_add` DESC");
   return($resultado);
}


public function lista_user_name_msg($cod_user){
   $db = new OOP_Database();
   $resultado = $db->executaQuery ("SELECT * FROM `users` WHERE `cod_user`='$cod_user'");

         $row = $resultado->fetch_assoc();
         $nome_user=$row['nome'];
         $apelido_user=$row['apelido'];

         $nome_completo = $nome_user.' '.$apelido_user;
         return($nome_completo);
}


public function lista_admins(){
   $db = new OOP_Database();
   $resultado = $db->executaQuery ("SELECT * FROM `users` WHERE `admin`='S'");
return($resultado);

}
//fim chat interno





public function lista_nr_users_inativos(){
   $bd = new OOP_Database();
   $query="SELECT * FROM `users` WHERE `ativo` = 'N'";
   $resultado_lista = $bd -> executaQuery ($query);
   $total_users=$resultado_lista->num_rows;
   return ($total_users);
}


public function lista_atividade_semana(){
   $db = new OOP_Database();
   $resultado = $db->executaQuery ("SELECT DISTINCT `cod_user` FROM `log_sessoes` WHERE `data_add` BETWEEN CURRENT_DATE()-7 AND CURRENT_DATE()");

$total_users_ativos_s=$resultado->num_rows;


         return($total_users_ativos_s);
}














//----------------DETAIL USER -------------------------


   public function lista_user_name_detail($cod_user){
      $db = new OOP_Database();
      $resultado = $db->executaQuery ("SELECT * FROM `users` WHERE `cod_user`='$cod_user'");

            $row = $resultado->fetch_assoc();
            $nome_user=$row['nome'];
            $apelido_user=$row['apelido'];

            $nome_completo = $nome_user.' '.$apelido_user;
            return($nome_completo);
   }

   public function lista_user_foto_detail($cod_user){
      $db = new OOP_Database();
      $resultado = $db->executaQuery ("SELECT * FROM `users` WHERE `cod_user`='$cod_user'");
            $row = $resultado->fetch_assoc();
            $foto_user=$row['foto_user'];
            return($foto_user);
   }

   public function lista_tasks_user($cod_user){
      $bd = new OOP_Database();
      $resultado_lista = $bd -> executaQuery ("SELECT * FROM `tasks` WHERE `cod_user`='$cod_user'");
      $total_tasks=$resultado_lista->num_rows;
      return ($total_tasks);

   }

   public function lista_spots_user($cod_user){

      $resultado_lista = $bd -> executaQuery ("SELECT * FROM `spots` WHERE `cod_user_add`='$cod_user'");
      $total_spots=$resultado_lista->num_rows;
      return ($total_spots);
   }

   public function lista_users_p_cod($cod_user){
     $bd = new OOP_Database();
     $query="SELECT * FROM `users` WHERE `cod_user`='$cod_user'";
      $resultado_lista = $bd -> executaQuery ($query);
      return ($resultado_lista);
  }







   public function lista_nr_users_hoje(){
      $bd = new OOP_Database();
      $query="SELECT * FROM `users` WHERE DATE(data_reg) = CURDATE()";
      $resultado_lista = $bd -> executaQuery ($query);
      $total_users=$resultado_lista->num_rows;
      return ($total_users);
   }






   public function lista_nr_users(){
      $bd = new OOP_Database();
      $query="SELECT * FROM `users` WHERE `ativo` = 'S'";
      $resultado_lista = $bd -> executaQuery ($query);
      $total_users=$resultado_lista->num_rows;
      return ($total_users);
   }


   //LISTA USERS
    public function lista_users($orderby){
      $bd = new OOP_Database();
      if($orderby==NULL){
         $orderby_com ='data_reg DESC' ;
      }else{
         $orderby_com = $orderby;
      }
$query="SELECT * FROM `users` ORDER BY `data_reg` ASC";
       $resultado_lista = $bd -> executaQuery ($query);
       return ($resultado_lista);
  	}





   public function lista_logs_hoje(){

     $bd = new OOP_Database();
     $query="SELECT * FROM `log_sessoes` WHERE DATE(data_add) = CURDATE()";
     $resultado_lista = $bd -> executaQuery ($query);
     $n_logs_hoje=$resultado_lista->num_rows;
     return ($n_logs_hoje);

   }

public function lista_tasks_mes(){
   $bd = new OOP_Database();
   $query="SELECT * FROM `tasks` WHERE DATE(data_add) >= DATE_SUB(CURDATE(), INTERVAL DAYOFMONTH(CURDATE())-1 DAY) ";
   $resultado_lista = $bd -> executaQuery ($query);
   $n_tasks_hoje=$resultado_lista->num_rows;
   return ($n_tasks_hoje);

}




//lista LOGS DO UTILIZADOR
    public function lista_logs_users($cod_user){
      $bd = new OOP_Database();
      if($cod_user==NULL){
        echo'Já fosteis';
      }else{

         $query="SELECT * FROM `log_sessoes` WHERE `cod_user`=$cod_user";
         $resultado_lista = $bd -> executaQuery ($query);
         $n_logs=$resultado_lista->num_rows;
         return ($n_logs);


     }
    }

//---------------------------- AVISOS ------------------------------

    public function lista_avisos(){

       $bd = new OOP_Database();

       $query="SELECT * FROM `ajuda` ORDER BY `estado` DESC";
        $resultado_lista = $bd -> executaQuery ($query);
        return ($resultado_lista);

    }

    public function insere_avisos($cod_user_add,$titulo,$descricao,$tipo,$anexo){
       $bd = new OOP_Database();
       $query="INSERT INTO ajuda (cod_user_add,titulo,descricao,tipo_ajuda,anexo,estado) VALUES ($cod_user_add,$titulo,$descricao,$tipo,$anexo,'0') ";
       $resultado_lista = $bd -> executaQuery ($query);
    }


//------------------------------------------------------------------


	}//fim da classe


?>
