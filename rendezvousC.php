<?PHP
//include "../config.php";
class RendezvousC {
function afficherRendezvouscc ($Rendezvous){
		echo "Nom: ".$Rendezvous->getId()."<br>";
		echo "Nom: ".$Rendezvous->getNom()."<br>";
		echo "Prénom: ".$Rendezvous->getPrenom()."<br>";
		echo "Email: ".$Rendezvous->getEmail()."<br>";
		echo "Adresse: ".$Rendezvous>getAdresse()."<br>";
		echo "Gouvernorat: ".$Rendezvous->getGouvernorat()."<br>";
		echo "Ville: ".$Rendezvous->getVille()."<br>";
		echo "CodePostal: ".$Rendezvous->getCodePostal()."<br>";
		echo "Telephone: ".$Rendezvous->getTelephone()."<br>";
		//) values (:cin, :nom,:prenom,:nbH,:tarifH)";
	}
	
	function ajouterRendezvous($Rendezvous){
		$sql="insert into reservation (Nom,Prenom,Email,Adresse,Gouvernorat,Ville,CodePostal,Telephone) values (:nom,:prenom,:email,:adresse,:gouvernorat,:ville,:codePostal,:telephone)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        
        $Nom=$Rendezvous->getNom();
        $Prenom=$Rendezvous->getPrenom();
        $Email=$Rendezvous->getEmail();
        $Adresse=$Rendezvous->getAdresse();
        $Gouvernorat=$Rendezvous->getGouvernorat();
        $Ville=$Rendezvous->getVille();
        $CodePostal=$Rendezvous->getCodePostal();
        $Telephone=$Rendezvous->getTelephone();

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
	
	function afficherRendezvous(){
		//$sql="SElECT * From ReclamationRendezvous e inner join formationphp.ReclamationRendezvous a on e.cin= a.cin";
		$sql="SElECT * From reservation";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerRendezvous($id){
		$sql="DELETE FROM reservation where id=:id";
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
	function modifierRendezvous($Rendezvous,$id){
		$sql="UPDATE reservation SET Nom=:Nom,Prenom=:Prenom,Email=:Email,Adresse=:Adresse,Gouvernorat=:Gouvernorat,Ville=:Ville,CodePostal=:CodePostal,Telephone=:Telephone WHERE Id=:Id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $Nom=$Rendezvous->getNom();
        $Prenom=$Rendezvous->getPrenom();
		$Email=$Rendezvous->getEmail();
        $Adresse=$Rendezvous->getAdresse();
        $Gouvernorat=$Rendezvous->getGouvernorat();
        $Ville=$Rendezvous->getVille();
        $CodePostal=$Rendezvous->getCodePostal();
        $Telephone=$Rendezvous->getTelephone();


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
	function recupererRendezvous($id){
		$sql="SELECT * from reservation where id=$id";
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