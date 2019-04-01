<?PHP

class ReclamationRendezvousC {
function afficherReclamationRendezvousC($ReclamationRendezvous){
		echo "Id: ".$ReclamationRendezvous->getId()."<br>";
		echo "Nom: ".$ReclamationRendezvous->getNom()."<br>";
		echo "Prénom: ".$ReclamationRendezvous->getPrenom()."<br>";
		echo "Email: ".$ReclamationRendezvous->getEmail()."<br>";
		echo "Adresse: ".$ReclamationRendezvous>getAdresse()."<br>";
		echo "Gouvernorat: ".$ReclamationRendezvous->getGouvernorat()."<br>";
		echo "Ville: ".$ReclamationRendezvous->getVille()."<br>";
		echo "CodePostal: ".$ReclamationRendezvous->getCodePostal()."<br>";
		echo "Telephone: ".$ReclamationRendezvous->getTelephone()."<br>";
		//) values (:cin, :nom,:prenom,:nbH,:tarifH)";
	}
	
	function ajouterReclamationRendezvous($ReclamationRendezvous){
		$sql="insert into Reclamation (Nom,Prenom,Email,Adresse,Gouvernorat,Ville,CodePostal,Telephone) values (:nom,:prenom,:email,:adresse,:gouvernorat,:ville,:codePostal,:telephone)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        
        $Nom=$ReclamationRendezvous->getNom();
        $Prenom=$ReclamationRendezvous->getPrenom();
        $Email=$ReclamationRendezvous->getEmail();
        $Adresse=$ReclamationRendezvous->getAdresse();
        $Gouvernorat=$ReclamationRendezvous->getGouvernorat();
        $Ville=$ReclamationRendezvous->getVille();
        $CodePostal=$ReclamationRendezvous->getCodePostal();
        $Telephone=$ReclamationRendezvous->getTelephone();

		$req->bindValue('nom',$Nom);
		$req->bindValue(':prenom',$Prenom);
		$req->bindValue(':email',$Email);
		$req->bindValue(':adresse',$Adresse);
		$req->bindValue(':gouvernorat',$Gouvernorat);
		$req->bindValue(':ville',$Ville);
		$req->bindValue(':codePostal',$CodePostal);
		$req->bindValue(':telephone',$Telephone);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}

	function rechercheReclamationRendezvous($recherche){
		
		$sql="SELECT * FROM `reclamation` WHERE `Email` LIKE '%".$recherche."%' ORDER BY `Nom` ASC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
	function afficherReclamationRendezvous(){
		//$sql="SElECT * From ReclamationRendezvous e inner join formationphp.ReclamationRendezvous a on e.cin= a.cin";
		$sql="SElECT * From Reclamation";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerReclamationRendezvous($id){
		$sql="DELETE FROM Reclamation where id=:id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierReclamationRendezvous($ReclamationRendezvous,$id){
		$sql="UPDATE Reclamation SET Nom=:Nom,Prenom=:Prenom,Email=:Email,Adresse=:Adresse,Gouvernorat=:Gouvernorat,Ville=:Ville,CodePostal=:CodePostal,Telephone=:Telephone WHERE Id=:Id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $Nom=$ReclamationRendezvous->getNom();
        $Prenom=$ReclamationRendezvous->getPrenom();
		$Email=$ReclamationRendezvous->getEmail();
        $Adresse=$ReclamationRendezvous->getAdresse();
        $Gouvernorat=$ReclamationRendezvous->getGouvernorat();
        $Ville=$ReclamationRendezvous->getVille();
        $CodePostal=$ReclamationRendezvous->getCodePostal();
        $Telephone=$ReclamationRendezvous->getTelephone();


		$req->bindValue(':Nom',$Nom);
		$req->bindValue(':Prenom',$Prenom);
		$req->bindValue(':Email',$Email);
		$req->bindValue(':Adresse',$Adresse);
		$req->bindValue(':Ville',$Ville);
		$req->bindValue(':CodePostal',$CodePostal);
		$req->bindValue(':Gouvernorat',$Gouvernorat);
		$req->bindValue(':Telephone',$Telephone);
		$req->bindValue(':Id',$id);
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererReclamationRendezvous($id){
		$sql="SELECT * from Reclamation where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	
	

	
}

?>