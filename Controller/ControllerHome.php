<?php


include_once 'Controller/Controller.php';
include_once 'Model/Model.php';
include_once 'View/View.php';

// Classe ControllerHome
class ControllerHome extends Controller{
   
    public function displayPlayers()
    {
        $joueurs = $this->getModel()->findAll();

        $this->getView()->setJoueurs($joueurs);
    }

    public function registerPlayer()
    {
        // + Vérifier que l’on reçoive bien le formulaire d’ajout de joueur 
        if (isset($_POST['pseudo']) && isset($_POST['score']) && isset($_POST['team'])) {

        // 2)+ Mettre en place les sécurités d’usages concernant la réception de formulaire 
            $pseudo = htmlspecialchars(sanitize($_POST['pseudo']));
            $score = sanitize($_POST['score']);
            $team = sanitize($_POST['team']);

        // 3) + Faire les vérification pour savoir si l’enregistrement a le droit de s’effectuer
            if (empty ($pseudo)  && empty ($score) ) {
                $message = "Erreur : le pseudo et le score sont obligatoires.";
            } else if (!in_array($team, ['1', '2', '3'])) {
                $message = "Erreur : la team choisie n'existe pas.";
            } else if ($this->getModel()->findByPseudo($pseudo) != false) {
                $message = "Erreur : ce pseudo est déjà utilisé.";
            } else {
            
                $this->getModel()->add($pseudo,  $score, $team);
                $message = "Le joueur " . $pseudo . " a bien été ajouté !";
            }

            $this->getView()->setMessage($message);
        }
    }
}