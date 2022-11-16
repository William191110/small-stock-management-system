<?php 

namespace Controllers;

use System\Controller;
use Model\Model;
use Libraries\Validations;
use Controllers\Forms;

class BaseController extends Controller {

     use Validations;
    /**
     * Returns Filename
     *
     * @return string
    */
    protected function title($file)
    {
        $value = str_replace('.php', '', $file);
        return $value;
    }

    /**
     * Model 
     *
     * @return object
     */
    protected function Model()
    {
        return new Model();
    }
    
    /**
     * Model 
     *
     * @return object
     */
    protected function post()
    {
        return new PostHandler();
    }

    /**
     * Querying simplificaion
     *
     * @return object
     */
    protected function getData(string $table)
    {
        return $this->Model()->runQuery($this->Model()->select($table));
    }

    protected function getData__(string $table, string $column, array $data)
    {
        return $this->Model()->runQuery($this->Model()->select2($table, $column), $data);
    }

    protected function UpdateUser(string $table, array $columns, string $column, array $data)
    {
        return $this->Model()->execute($this->Model()->update($table, $columns, $column), $data);
    }

    protected function count(string $table)
    {
        return $this->Model()->runQuery($this->Model()->countAll($table));
    }

    /**
     * Querying simplificaion
     *
     * @return object
     */
    protected function getItems(string $table, string $column, $data)
    {
        return $this->Model()->runQuery($this->Model()->select2($table, $column), $data);
    }


    /**
     * Querying simplificaion
     *
     * @return object
     */
    protected function delete(string $table, string $column, $data)
    {
        return $this->Model()->runQuery($this->Model()->delete2($table, $column), $data);
    }

    protected function selectlimit(string $table, string $column, $data, int $limit, int $offset)
    {
        return $this->Model()->runQuery($this->Model()->selectlimit($table, $column, $limit, $offset), $data);
    }

    protected function getItemsLimit(string $table, int $limit, int $offset)
    {
        return $this->Model()->runQuery($this->Model()->limit_Offset($table, $limit, $offset));
    }

    protected function find($value)
    {
        return $this->Model()->runQuery($this->Model()->find($value));
    }

    public function grant_access($page, $user)
	{
		session_start();
		$_SESSION['user'] = $user;
		header("location:index.php?page=$page");
	}

    /**
     * ##############
     * INSERT DATA
     * ##############
     * @return true
     */
    protected function insertData(string $table, array $columns, array $data)
    {
        $query = $this->Model()->insert($table, $columns);
        return $this->Model()->execute($query, $data);
    }

    protected function deleteAll(string $table)
    {
        $query = $this->Model()->deleteAll($table);
        return $this->Model()->execute($query);
    }
}