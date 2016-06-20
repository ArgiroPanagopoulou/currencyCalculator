<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\Model\CurrencyCalculator;
use AppBundle\Form\Type\CurrencyCalculatorType;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // Initialize the form object
        $currencyCalculator = new CurrencyCalculator();

        $form = $this->createForm(CurrencyCalculatorType::class, $currencyCalculator);
        $form->handleRequest($request);

        if($form->isValid()) {
            return $this->redirectToRoute('homepage');
        }
        return $this->render('default/index.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
