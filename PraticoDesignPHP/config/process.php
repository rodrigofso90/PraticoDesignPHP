<?php

    session_start();

    include_once("conection.php");
    include_once("url.php");
    
    $id;
    $data = $_POST;

    //MODIFICAÇÕES NO BANCO
    if(!empty($data)){ 
    if($data["type"]==="create"){

        $NomeRazaoSocial = $data["NomeRazaoSocial"];
        $Email = $data["Email"];
        $IeRg = $data["IeRg"];
        $CpfCnpj = $data["CpfCnpj"];
        $Telefone = $data["Telefone"];
        $Rua = $data["Rua"];
        $Bairro = $data["Bairro"];
        $Cidade = $data["Cidade"];
        $Estado = $data["Estado"];
        $Cep = $data["Cep"];
        $Observacoes = $data["Observacoes"];

        $query = "INSERT INTO cliente (NomeRazaoSocial, Email, IeRg, CpfCnpj, Telefone, Rua, Bairro, Cidade, 
        Estado, Cep, Observacoes) VALUES(:NomeRazaoSocial, :Email, :IeRg, :CpfCnpj, :Telefone, :Rua, :Bairro, 
        :Cidade, :Estado, :Cep, :Observacoes)";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":NomeRazaoSocial", $NomeRazaoSocial);
        $stmt->bindParam(":Email", $Email);
        $stmt->bindParam(":IeRg", $IeRg);
        $stmt->bindParam(":CpfCnpj", $CpfCnpj);
        $stmt->bindParam(":Telefone", $Telefone);
        $stmt->bindParam(":Telefone", $Telefone);
        $stmt->bindParam(":Rua", $Rua);
        $stmt->bindParam(":Bairro", $Bairro);
        $stmt->bindParam(":Cidade", $Cidade);
        $stmt->bindParam(":Estado", $Estado);
        $stmt->bindParam(":Cep", $Cep);
        $stmt->bindParam(":Observacoes", $Observacoes);
       
        try {
            $stmt->execute();
            
           } catch(PDOException $e){
               //erro conexão 
               $erro = $e->getMessage();
               echo "Erro: $error";
           }
           
    }else if($data["type"]==="edit"){
            // var_dump(($data));
            // exit;
        $NomeRazaoSocial = $data["NomeRazaoSocial"];
        $Email = $data["Email"];
        $IeRg = $data["IeRg"];
        $CpfCnpj = $data["CpfCnpj"];
        $Telefone = $data["Telefone"];
        $Rua = $data["Rua"];
        $Bairro = $data["Bairro"];
        $Cidade = $data["Cidade"];
        $Estado = $data["Estado"];
        $Cep = $data["Cep"];
        $Observacoes = $data["Observacoes"];
        $ClienteId = $data["ClienteId"];

        //UPDATE cliente SET NomeRazaoSocial = 'Paloma' WHERE ClienteId = 1;
        
        $query = "UPDATE cliente 
        SET NomeRazaoSocial=:NomeRazaoSocial, Email=:Email, IeRg=:IeRg, CpfCnpj=:CpfCnpj, Telefone=:Telefone, 
        Rua=:Rua, Bairro=:Bairro, Cidade=:Cidade, Estado=:Estado, Cep=:Cep, Observacoes=:Observacoes 
        WHERE ClienteId=:ClienteId";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":NomeRazaoSocial", $NomeRazaoSocial);
        $stmt->bindParam(":Email", $Email);
        $stmt->bindParam(":IeRg", $IeRg);
        $stmt->bindParam(":CpfCnpj", $CpfCnpj);
        $stmt->bindParam(":Telefone", $Telefone);
        $stmt->bindParam(":Telefone", $Telefone);
        $stmt->bindParam(":Rua", $Rua);
        $stmt->bindParam(":Bairro", $Bairro);
        $stmt->bindParam(":Cidade", $Cidade);
        $stmt->bindParam(":Estado", $Estado);
        $stmt->bindParam(":Cep", $Cep);
        $stmt->bindParam(":Observacoes", $Observacoes);
        $stmt->bindParam(":ClienteId", $ClienteId);
        
        try {
            
            $stmt->execute();
            
        } catch(PDOException $e){
            //erro conexão 
            $erro = $e->getMessage();
            echo "Erro: $error";
        }

    }else if($data["type"] === "delete"){
     
        // var_dump($data);
        // exit;

        $ClienteId = $data["ClienteId"];

        $query = "UPDATE cliente SET cancelado = 1 WHERE ClienteId = :ClienteId";

        $stmt = $conn->prepare($query);

        $stmt->bindParam("ClienteId", $ClienteId);

        try {
            
            $stmt->execute();
            
        } catch(PDOException $e){
            //erro conexão 
            $erro = $e->getMessage();
            echo "Erro: $error";
        }
    }

    //Redirect HOME
    header("Location:" . $BASE_URL . "../index.php");
    //Seleção de dados
    }else{
    
        if (!empty($_GET)) {
            $id = $_GET["id"];
        }
        
        //retorna apenas 1 Cliete
        if (!empty($id)) {
        
            $query = "SELECT * FROM cliente WHERE ClienteId = :ClienteId";
        
            $stmt = $conn->prepare($query);
        
            $stmt->bindParam(":ClienteId", $id);
        
            $stmt->execute();
        
            $cliente = $stmt->fetch();
        
        }else{
            //Retorna todos os Clientes
            $clientes = [];
            //retornar todos 
            $query = "SELECT * FROM cliente WHERE cancelado=0";
            $stmt = $conn->prepare($query);
            $stmt->execute();
            $clientes = $stmt->fetchAll();
          
        }
    }


    //Fechar Conexão
    $conn = null;

?>