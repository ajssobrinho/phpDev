<?php 

 
class uploader 
{ 
    var $extensao = array( ".png", ".gif", ".png", ".jpg", ".jpeg" ); //all the extensions that will be allowed to be uploaded 
    var $tamanho_max = 9999999; //tamanho maximo de imagem 
    var $pasta_upload = "resources/jpg/"; //local para onde a imagem vai ser carregada
    var $nome_ficheiro = ""; //Nome do ficheiro
    var $nome_temporario = ""; //Nome temporario
     
    public function iniciaUpload() 
    { 
        $this->nome_ficheiro = $_FILES['uploaded']['name']; 
        $this->nome_temporario = $_FILES['uploaded']['tmp_name']; 
        
        if( !$this->verificaExtensao() ) 
        { 
            die( "A estensão da imagem não é suportada pela aplicação!" ); 
        } 
        if( !$this->verificaTamanho() ) 
        { 
            die( "O ficheiro que tentou carregar é demasiado grande!" ); 
        } 
        if( $this->verificaFicheiroExiste() ) 
        { 
            die( "O ficheiro já existe na pasta!" ); 
        } 
        if( $this->uploadImagem() ) 
        { 
            echo "A sua imagem foi carregada com sucesso!<br><br>clique <a href=\"" . $this->pasta_upload . time() . $this->nome_ficheiro . "\">here</a>"; 
        } 
        else 
        { 
		
            echo "Sorry, your file could not be uploaded for some unknown reason!"; 
			
        } 
    } 
     
    public function uploadImagem()
	 
    { 
        return ( move_uploaded_file( $this->nome_temporario, $this->pasta_upload . time() . $this->nome_ficheiro ) ? true : false ); 
    } 
     
    public function verificaTamanho() 
	
    { 
        return ( ( filesize( $this->nome_temporario ) > $this->tamanho_max ) ? false : true ); 
    } 
     
    public function obtemExtensao() 
	
    { 
        return strtolower( substr( $this->nome_ficheiro, strpos( $this->nome_ficheiro, "." ), strlen( $this->nome_ficheiro ) - 1 ) ); 
		
    } 
     
    public function verificaExtensao() 
	
    { 
        return ( in_array( $this->obtemExtensao(), $this->extensao ) ? true : false ); 
    } 
     
    
    public function verificaFicheiroExiste() 
    { 
        return ( file_exists( $this->pasta_upload . time() . $this->nome_ficheiro ) ); 
    } 
} 

?>