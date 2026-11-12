<?php

include_once 'View/View.php';
class ViewHome extends View{

    //Message de confirmation d'erreur et afficher la liste des joueurs  pseudo, score, team)=> tableau 
   private string $message = "";
   private array $joueurs = [];

   //getter setter

    public function getMessage(): string
    {
        return $this->message;
    }

    public function setMessage(string $newMessage)
    {
        $this->message = $newMessage;
    }

   public function getJoueurs(): array
    {
        return $this->joueurs;
    }

    public function setJoueurs(array $newJoueurs)
    {
        $this->joueurs = $newJoueurs;
    }

    public function displayMain()
{    
?>
<main>
            <h2>Ajouter un joueur</h2>

            <form method="post">
                <label for="pseudo">Pseudo :</label>
                <input type="text" id="pseudo" name="pseudo">

                <label for="score">Score :</label>
                <input type="number" id="score" name="score">

                <label for="team">Team :</label>
                <select id="team" name="team">
                    <option value="1">Aucune</option>
                    <option value="2">TeamRocket</option>
                    <option value="3">DreamTeam</option>
                </select>

                <button type="submit">Ajouter</button>
            </form>
<?php
if ($this->message != "") {
                echo "<p>" . $this->message . "</p>";
}
            ?>

            <h2>Liste des joueurs</h2>

            <ul>
                <?php
                // affichage de la liste des joueurs avec leurs pseudo , score et équipe
                foreach ($this->joueurs as $joueur) {
                    echo "<li>" . $joueur['pseudo'] . " - Score : " . $joueur['score'] . " - Team : " . $joueur['team'] . "</li>";
                }
                ?>
            </ul>
        </main>
       
<?php
}

    public function displayAll()
    {
        $this->displayHeader();
        $this->displayMain();
        $this->displayFooter();
    }
}




?>