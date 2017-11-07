<?php
/**
 * Created by PhpStorm.
 * User: carol
 * Date: 06/11/2017
 * Time: 14:53
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class OrderController extends Controller
{
	/**
	 * @Route("/order")
	 */
	public function showAction()
	{
		return $this->render('order/show.html.twig', [

		]);
	}
}