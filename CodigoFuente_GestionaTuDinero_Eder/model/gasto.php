<?php

class Gasto extends Base
{
  function __construct($pdo)
  {
    $this->pdo = $pdo;
  }

  // Devuelve el importe total de los gastos dentro de n días
  public function Gastos($UsuarioId, $n)
  {
    $stmt = $this->pdo->prepare("SELECT SUM(Coste) AS TOTAL FROM gasto WHERE UsuarioId = :UsuarioId AND DATE(`Fecha`) >= CURDATE() - INTERVAL :n DAY");
    $stmt->bindParam(":UsuarioId", $UsuarioId, PDO::PARAM_INT);
    $stmt->bindParam(":n", $n, PDO::PARAM_INT);
    $stmt->execute();
    $hoy = $stmt->fetch(PDO::FETCH_OBJ);
    if ($hoy == NULL) {
      return NULL;
    } else
      return $hoy->TOTAL;
  }

  // Devuelve el importe del gasto de ayer
  public function GastoAyer($UsuarioId)
  {
    $stmt = $this->pdo->prepare("SELECT SUM(Coste) AS TOTAL FROM gasto WHERE UsuarioId = :UsuarioId AND DATE(`Fecha`) = CURDATE() - INTERVAL 1 DAY");
    $stmt->bindParam(":UsuarioId", $UsuarioId, PDO::PARAM_INT);
    $stmt->execute();
    $ayer = $stmt->fetch(PDO::FETCH_OBJ);
    if ($ayer == NULL) {
      return NULL;
    } else
      return $ayer->TOTAL;
  }

  // Devuelve el importe total de gastos del año en curso
  public function GastoTotal($UsuarioId)
  {
    $stmt = $this->pdo->prepare("SELECT SUM(Coste) AS TOTAL FROM gasto WHERE UsuarioId = :UsuarioId AND YEAR(Fecha) = YEAR(CURDATE())");
    $stmt->bindParam(":UsuarioId", $UsuarioId, PDO::PARAM_INT);
    $stmt->execute();
    $total = $stmt->fetch(PDO::FETCH_OBJ);
    if ($total == NULL) {
      return NULL;
    } else {
      return $total->TOTAL;
    }
  }

  // Gastos del mes en curso (por fecha)
  public function GastoMesEnCurso($UsuarioId)
  {
    $stmt = $this->pdo->prepare("SELECT EXTRACT(MONTH FROM CURRENT_TIMESTAMP()) AS MesEnCurso, EXTRACT(YEAR FROM CURRENT_TIMESTAMP()) AS AnioEnCurso");
    $stmt->execute();
    $rows1 = $stmt->fetch(PDO::FETCH_OBJ);
    $mesActual = $rows1->MesEnCurso;
    $anioActual = $rows1->AnioEnCurso;

    $stmt = $this->pdo->prepare("SELECT SUM(Coste) AS gasto1 FROM gasto WHERE UsuarioId = :UsuarioId AND MONTH(Fecha) = :mesactual AND YEAR(Fecha) = :anioactual");
    $stmt->bindParam(":UsuarioId", $UsuarioId, PDO::PARAM_INT);
    $stmt->bindParam(":mesactual", $mesActual, PDO::PARAM_INT);
    $stmt->bindParam(":anioactual", $anioActual, PDO::PARAM_INT);
    $stmt->execute();
    $rows2 = $stmt->fetch(PDO::FETCH_OBJ);
    if ($rows2 == NULL) {
      return NULL;
    } else {
      return $rows2->gasto1;
    }
  }

  // Devuelve los registros de gastos entre 2 fechas dadas
  public function registroGastos($UsuarioId, $DESDE, $HASTA)
  {
    $stmt = $this->pdo->prepare("SELECT * FROM gasto WHERE (Fecha >= :desdefecha AND Fecha <= (:hastafecha + INTERVAL 1 DAY))
      AND UsuarioId = :usuario ORDER BY Fecha");
    $stmt->bindParam(":usuario", $UsuarioId, PDO::PARAM_INT);
    $stmt->bindParam(":desdefecha", $DESDE, PDO::PARAM_STR);
    $stmt->bindParam(":hastafecha", $HASTA, PDO::PARAM_STR);
    $stmt->execute();
    $fecha = $stmt->fetchAll(PDO::FETCH_OBJ);
    if ($fecha == NULL) {
      return NULL;
    } else {
      return $fecha;
    }
  }

  // Devuelve los registros de gastos entre dos meses cualesquiera
  public function registroMesGastos($UsuarioId, $DESDE, $HASTA)
  {
    $stmt = $this->pdo->prepare("SELECT * FROM gasto WHERE (Fecha >= :desdefecha AND Fecha <= (:hastafecha + INTERVAL 1 MONTH)) 
    AND UsuarioId = :usuario ORDER BY Fecha ");
    $stmt->bindParam(":usuario", $UsuarioId, PDO::PARAM_INT);
    $stmt->bindParam(":desdefecha", $DESDE, PDO::PARAM_STR);
    $stmt->bindParam(":hastafecha", $HASTA, PDO::PARAM_STR);
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_OBJ);
    if ($rows == NULL) {
      return NULL;
    } else {
      return $rows;
    }
  }

  // Devuelve registros de gastos (filas) entre dos años cualquiera
  public function registroAnualGastos($UsuarioId, $DESDE, $HASTA)
  {
    $stmt = $this->pdo->prepare("SELECT * FROM gasto WHERE (EXTRACT(year FROM Fecha) >= :desdefecha 
    AND EXTRACT(year FROM Fecha) <= (:hastafecha)) AND UsuarioId = :usuario ORDER BY Fecha");
    $stmt->bindParam(":usuario", $UsuarioId, PDO::PARAM_INT);
    $stmt->bindParam(":desdefecha", $DESDE, PDO::PARAM_STR);
    $stmt->bindParam(":hastafecha", $HASTA, PDO::PARAM_STR);
    $stmt->execute();
    $fecha = $stmt->fetchAll(PDO::FETCH_OBJ);
    if ($fecha == NULL) {
      return NULL;
    } else {
      return $fecha;
    }
  }

  // Devuelve todas las filas de la tabla de gastos
  public function todosGastos($UsuarioId)
  {
    $stmt = $this->pdo->prepare("SELECT * FROM gasto WHERE UsuarioId = :UsuarioId ORDER BY Fecha");
    $stmt->bindParam(":UsuarioId", $UsuarioId, PDO::PARAM_INT);
    $stmt->execute();
    $total = $stmt->fetchall(PDO::FETCH_OBJ);
    if ($total == NULL) {
      return NULL;
    } else
      return $total;
  }

  // Devuelve la suma total de los gastos fijos del mes en curso
  public function GastosFijos($UsuarioId)
  {
    $stmt = $this->pdo->prepare("SELECT SUM(Coste) AS TOTAL FROM gasto WHERE UsuarioId = :UsuarioId AND Tipo = 'Gasto Fijo' AND YEAR(Fecha) = YEAR(CURDATE()) AND MONTH(Fecha) = MONTH(CURDATE())");
    $stmt->bindParam(":UsuarioId", $UsuarioId, PDO::PARAM_INT);
    $stmt->execute();
    $fijos = $stmt->fetch(PDO::FETCH_OBJ);
    if ($fijos == NULL) {
      return NULL;
    } else {
      return $fijos->TOTAL;
    }
  }

  // Devuelve la suma total de los gastos en lujo u Ocio del mes en curso
  public function GastosOcio($UsuarioId)
  {
    $stmt = $this->pdo->prepare("SELECT SUM(Coste) AS TOTAL FROM gasto WHERE UsuarioId = :UsuarioId AND Tipo = 'Gasto en Ocio' AND YEAR(Fecha) = YEAR(CURDATE()) AND MONTH(Fecha) = MONTH(CURDATE())");
    $stmt->bindParam(":UsuarioId", $UsuarioId, PDO::PARAM_INT);
    $stmt->execute();
    $ocio = $stmt->fetch(PDO::FETCH_OBJ);
    if ($ocio == NULL) {
      return NULL;
    } else {
      return $ocio->TOTAL;
    }
  }

  // Devuelve la suma total de los gastos de ahorro e inversión del mes en curso
  public function GastosAhorroInverion($UsuarioId)
  {
    $stmt = $this->pdo->prepare("SELECT SUM(Coste) AS TOTAL FROM gasto WHERE UsuarioId = :UsuarioId AND Tipo = 'Ahorro o Inversión' AND YEAR(Fecha) = YEAR(CURDATE()) AND MONTH(Fecha) = MONTH(CURDATE())");
    $stmt->bindParam(":UsuarioId", $UsuarioId, PDO::PARAM_INT);
    $stmt->execute();
    $ahorro = $stmt->fetch(PDO::FETCH_OBJ);
    if ($ahorro == NULL) {
      return NULL;
    } else {
      return $ahorro->TOTAL;
    }
  }

  // Borra el registro de un gasto en concreto
  public function borrarGastos($ID)
  {
    $stmt = $this->pdo->prepare("DELETE FROM gasto WHERE ID = :id");
    $stmt->bindParam(":id", $ID, PDO::PARAM_INT);
    $stmt->execute();
  }
}
