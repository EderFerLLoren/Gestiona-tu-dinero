<?php
class Base
{
  protected $pdo;

  function __construct($pdo)
  {
    $this->pdo = $pdo;
  }

  // Función para crear un nuevo registro en una tabla
  public function create($table, $fields = array())
  {
    $columns = implode(',', array_keys($fields));
    $values = ':' . implode(', :', array_keys($fields));
    $sql = "INSERT INTO {$table} ({$columns}) VALUES ({$values})";
    if ($stmt = $this->pdo->prepare($sql)) {
      foreach ($fields as $key => $data) {
        $stmt->bindValue(':' . $key, $data);
      }
      $stmt->execute();
      return $this->pdo->lastInsertId();
    }
  }

  // Función para actualizar un registro existente en una tabla
  public function update($table, $usuario_id, $fields = array())
  {
    $columns = '';
    $i = 1;
    foreach ($fields as $nombre => $value) {
      $columns .= "{$nombre} = :{$nombre}";
      if ($i < count($fields)) {
        $columns .= ", ";
      }
      $i++;
    }
    $sql = "UPDATE {$table} SET {$columns} WHERE UsuarioId = {$usuario_id}";
    if ($stmt = $this->pdo->prepare("$sql")) {
      foreach ($fields as $key => $value) {
        $stmt->bindValue(':' . $key, $value);
      }
      $stmt->execute();
    }
  }

  // Función para eliminar registros de una tabla
  public function delete($table, $array)
  {
    $sql = "DELETE FROM {$table}";
    $where = " WHERE";

    foreach ($array as $nombre => $value) {
      $sql .= "{$where} {$nombre} = :{$nombre}";
      $where = " AND ";
    }

    if ($stmt = $this->pdo->prepare($sql)) {
      foreach ($array as $nombre => $value) {
        $stmt->bindValue(':' . $nombre, $value);
      }
    }
    $stmt->execute();
  }
}
?>