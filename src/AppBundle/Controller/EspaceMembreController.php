<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class EspaceMembreController
{
    /**
     * @Route("/EspaceMembre")
     */
    public function SignalerConnexion()
    {       

        return new Response(
            '<html>
	<head>
		<title>Espace Membre </title>
	</head>
	<body>
		
		<div class="row">
            		<div class="box">
                		
				    <hr>
				    <h2 class="intro-text text-center">
					<strong> Vous etes connecté a votre Espace Membre</strong>
				    </h2>
				    <hr>				    
				        <center>	                               
         			         
                             <a href="app.php"> Deconnection</a></center>
                             <a href=""> Ajouter Contact</a> </br>
                             <a href=""> Consulter vos contact</a> </br>


                                	
							</form>
						</center>

                   			        
                		
		   	 </div>
		</div>
		
	</body>
</html>'
        );
    }
}
