<?php
/**
 * Created by PhpStorm.
 * User: carol
 * Date: 07/11/2017
 * Time: 14:39
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Book;
use AppBundle\Form\BookType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BookController extends Controller
{
	/**
	 * @Route("/book", name="bookTicket")
	 *
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
	public function addAction()
	{
		// On crée une nouvelle résa
		$book = new Book();

		// On récup le formulaire
		$BookForm = $this->createForm(BookType::class, $book);

		// On génére le HTML du formulaire
		$formView = $BookForm->createView();

		// On rend la vue
		return $this->render(':forms:bookAdd.html.twig', array(
			'BookForm' => $formView
		));
	}

}