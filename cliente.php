<?php
   
 class Cliente
 {
     private $nome;
     private $email;
     private $senha;
     private $feminina;
     private $masculinas;
     private $outrosProdutos;
     private $vender;
     private $comprar;
     private $ambos;
     

     public function __construct(){}

     public function create($_nome, $_email, $_senha, $_femininas, $_masculinas, $_outrosProdutos, $_vender, $_comprar, $_ambos) {

        $this->nome = $_nome;
        $this->email = $_email;
        $this->femininas = $_femininas;
        $this->masculinas = $_masculinas;
        $this->senha = md5 ($_senha);
        $this->outrosprodutos = $_outrosProdutos;
        $this->vender = $_vender;
        $this->comprar = $_comprar;
        $this->ambos = $_ambos;
     }

     public function getNome() {
         return $this->nome;
     }

     public function getEmail() {
         return $this->email;
     }
    
     public function getSenha() {
         return $this->senha;
     }

     public function getFemininas() {
         return $this->Femininas;
     }

     public function getMasculinas() {
         return $this->Masculinas;
     }

     public function getOutrosProdutos() {
        return $this->outrosprodutos;
    }

    public function getVender() {
        return $this->vender;
    }

    public function getComprar() {
        return $this->comprar;
    }

    public function getAmbos() {
        return $this->ambos;
    }

    public function setNome($_nome) {
        $this->nome = $_nome;
    }
     public function setEmail($_email) {
         $this->email = $_email;
     }

     public function setSenha($_senha) {
        $this->senha = $_senha;
    }

     public function setFemininas($_femininas) {
         $this->femininas = $_femininas;
     }
     public function setMasculinas($_masculinas) {
         $this->masculinas = $_masculinas;
     }

     public function setOutrosprodutos($_outrosprodutos) {
        $this->outrosprodutos = $_outrosprodutos;
    }
     public function setVender($_vender) {
         $this->vender = $_vender;
     }
     public function setComprar($_comprar) {
         $this->comprar = $_comprar;
     }
     public function setAmbos($_ambos) {
         $this->ambos = $_ambos;
     }


     public function cliente() {

         include_once('./db/conn.php');
         $sql = "CALL picliente(:nome, :email, :senha, :femininas, :masculinas, :outrosProdutos, :vender, :comprar, :ambos)";

         $data = [
             'nome' => $this->nome,
             'email' => $this->email,
             'senha' => $this->senha,
             'femininas' => $this->femininas,
             'masculinas' => $this->masculinas,
             'outrosProdutos' => $this->outrosProdutos,
             'vender' => $this->vender,
             'comprar' => $this->comprar,
             'ambos' => $this->ambos
         ];

         $statement = $conn->prepare($sql);
         $statement->execute($data);

         return true;
     }

     
    public function listarCliente() {
        include_once('./db/conn.php');
        $sql = "CALL psListarCliente  ('')";

        $data = $conn->query($sql)->fetchAll();

        return $data;
    }

    public function excluirCliente($_id) {
        include_once("./db/conn.php");
        $sql = "CALL pddeletar(:id)";

        $data = [
            'id' => $_id
        ];

        $statement = $conn->prepare($sql);
        $statement->execute($data);

        return true;
    }

    public function conectarCliente($_email, $_senha) {
        include_once("./db/conn.php");
        $senha = md5($_senha);
        $sql = "CALL psLoginCliente('$_email', '$senha')";
        $statement = $conn->prepare($sql);
       
        $statement->execute();
       
        if ($user = $statement->fetch()) {
            $this->nome = $user["nome"];
            return true;
        }
       
        else {
            return false;
        }
    }

    }


