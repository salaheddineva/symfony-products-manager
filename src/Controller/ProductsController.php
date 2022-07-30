<?php

namespace App\Controller;

use App\DTO\LowestPriceEnquiry;
use App\Filter\PromotionsFilterInterface;
use App\Service\Serializer\DTOSerializer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ProductsController extends AbstractController
{
  #[Route('/products/{id}/lowest-price', name: 'lowest-price', methods: 'POST')]
  public function lowerPrice(
    Request $request, 
    int $id,
    DTOSerializer $serializer,
    PromotionsFilterInterface $promotionsFilter
  ): JsonResponse
  {
    if ($request->headers->has('force_fail'))
      return new JsonResponse(
        ['error' => 'Failure message'],
        $request->headers->get('force_fail')
      );

    $lowestPriceEnquiry = $serializer->deserialize(
      $request->getContent(),
      LowestPriceEnquiry::class,
      'json'
    );

    $modifiedEnquiry = $promotionsFilter->apply($lowestPriceEnquiry);

    $responseContent = $serializer->serialize($modifiedEnquiry, 'json');

    return new JsonResponse($responseContent, 200);
  }

  #[Route('/products/{id}/promotions', name: 'promotions', methods: 'GET')]
  public function promotions()
  {
    // not implemented yet
  }
}