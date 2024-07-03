<?php
class Presupuesto extends Base
{
  function __construct($pdo)
  {
    $this->pdo = $pdo;
  }

  public function validarPresupuesto($UsuarioId)
  {
    $stmt = $this->pdo->prepare("SELECT EXTRACT(MONTH FROM RFECHA) AS mes FROM presupuesto WHERE UsuarioId = :usuario");
    $stmt->bindParam(":usuario", $UsuarioId, PDO::PARAM_INT);
    $stmt->execute();
    $resultado = $stmt->fetch(PDO::FETCH_OBJ);
    if ($resultado == NULL) {
      return true;
    } else {
      $val1 = $resultado->mes;
    }

    $stmt2 = $this->pdo->prepare("SELECT EXTRACT(MONTH FROM CURRENT_TIMESTAMP()) AS actual");
    $stmt2->execute();
    $resultado2 = $stmt2->fetch(PDO::FETCH_OBJ);
    $val2 = $resultado2->actual;

    if ($val1 === $val2) {
      return true;
    } else {
      return false;
    }
  }

  public function establecerPresupuesto($UsuarioId, $presupuesto)
  {
    $stmt = $this->pdo->prepare("INSERT INTO presupuesto(UsuarioId, Presupuesto) VALUES(:usuario , :cantidad)");
    $stmt->bindParam(":usuario", $UsuarioId, PDO::PARAM_INT);
    $stmt->bindParam(":cantidad", $presupuesto, PDO::PARAM_INT);
    $stmt->execute();
  }

  // Para comprobar el presupuesto actual
  public function checkPresupuesto($UsuarioId)
  {
    $stmt = $this->pdo->prepare("SELECT Presupuesto AS presupuestoActual FROM presupuesto WHERE UsuarioId=:usuario");
    $stmt->bindParam(":usuario", $UsuarioId, PDO::PARAM_INT);
    $stmt->execute();
    $rows = $stmt->fetch(PDO::FETCH_OBJ);
    if ($rows == NULL) {
      return NULL;
    } else {
      return $rows->presupuestoActual;
    }
  }

  // Actualizar el presupuesto actual
  public function actualizarPresupuesto($UsuarioId, $presupuesto)
  {
    $stmt = $this->pdo->prepare("UPDATE presupuesto SET Presupuesto = :cantidad, RFECHA = CURRENT_TIMESTAMP() WHERE UsuarioId = :usuario");
    $stmt->bindParam(":usuario", $UsuarioId, PDO::PARAM_INT);
    $stmt->bindParam(":cantidad", $presupuesto, PDO::PARAM_INT);
    $stmt->execute();
  }

  // Para borrar el registro del presupuesto mensual (Una vez que cambie el mes)
  public function borrarRegistroPresupuesto($UsuarioId)
  {
    $stmt = $this->pdo->prepare("DELETE FROM presupuesto WHERE UsuarioId = :usuario");
    $stmt->bindParam(":usuario", $UsuarioId, PDO::PARAM_INT);
    $stmt->execute();
  }

  
}
