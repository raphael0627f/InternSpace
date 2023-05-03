<?php
class Model extends Database{
    //protected $table; // variável que armazena o nome da tabela
    public $errors = []; // vetor que armazena mensagens de erro

    public function __construct(){

       /* if(!$this->table){
            // se a tabela não foi definida, usa o nome da classe em minúsculas como nome da tabela
            $this->table = strtolower("tb_" . get_class($this));
        }*/
    }

    public function where(string $table, string $column, $value){
        // método para fazer uma busca no banco de dados com base em uma coluna e valor específicos
        $query = "SELECT * FROM $table WHERE $column = :value";
        return $this->query($query, ['value' => $value]);
    }

    public function findAll(string $table){
        // método para retornar todos os registros da tabela
        $query = "SELECT * FROM $table";
        return $this->query($query);
    }

    public function insert(string $table, array $data){
        // método para inserir um registro na tabela

        // se a classe tiver um vetor $colunas definido, filtra os dados para incluir somente as colunas permitidas
        if(property_exists($this, 'colunas')){
            foreach($data as $key=>$value){
                if(!in_array($key, $this->colunas)){
                    unset($data[$key]);
                }
            }
        }

        // se a classe tiver um vetor $antesInserir definido, executa as funções definidas nesse vetor antes de inserir os dados
        if(property_exists($this, 'antesInserir')){
            foreach($this->antesInserir as $func){
                $data = $this->$func($data);
            }
        }

        // prepara a query para inserção dos dados
        $keys = array_keys($data);
        $columns = implode(',', $keys);
        $values = ':' . implode(',:', $keys);
        $query = "INSERT INTO $table ($columns) VALUES ($values)";

        // executa a query
        return $this->query($query, $data);
    }

    public function update(string $table, int $id, array $data){
        // método para atualizar um registro na tabela com base no ID

        // prepara a string com as colunas e valores que serão atualizados, e os parâmetros para a query
        $str = '';
        $params = ['id' => $id];
        foreach($data as $key => $value){
            $str .= $key . '=:' . $key . ',';
            $params[$key] = $value;
        }
        $str = rtrim($str, ',');

        // prepara a query para atualização dos dados
        $query = "UPDATE $table SET $str WHERE id=:id";

        // executa a query
        return $this->query($query, $params);
    }

    public function delete(string $table, int $id){
        // método para excluir um registro na tabela com base no ID

        // prepara a query para exclusão dos dados
        $query = "DELETE FROM $table WHERE id=:id";

        // executa a query
        return $this->query($query, ['id' => $id]);
    }
}
?>
