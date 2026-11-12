<?php


include_once 'Model/Model.php';

class ModelPlayer extends Model{
public function findAll()
    {
        try {
            
            $data = "SELECT p.id_player, p.pseudo, p.score, t.id_team FROM player p
                    INNER JOIN team t ON p.id_team = t.id_team";


            $request = $this->getPdo()->prepare($data);

            $request->execute();

            return $request->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
 public function findByPseudo(string $pseudo)
    {
        try {
        
            $pseudo = "SELECT p.pseudo FROM player p WHERE pseudo = :pseudo";
            $request = $this->getPdo()->prepare($pseudo);
            $request->execute([':pseudo' => $pseudo]);

            return $request->fetch(PDO::FETCH_ASSOC);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

     public function add(string $pseudo, int $score, int $id_team)
    {
        try {
            $sql = "INSERT INTO player (pseudo, score, id_team) VALUES (?,?,?)";

             $request = $this->getPdo()->prepare($sql);

            $request->bindParam(1, $pseudo, PDO::PARAM_STR);
            $request->bindParam(2, $score, PDO::PARAM_INT);
            $request->bindParam(3, $idTeam, PDO::PARAM_INT);

            $request->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
}
}

?>