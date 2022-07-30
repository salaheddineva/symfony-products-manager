<?php

namespace App\Filter;

use App\DTO\PromotionEnquiryInterface;

class LowestPriceFilter implements PromotionsFilterInterface
{
  public function apply(PromotionEnquiryInterface $enquiry): PromotionEnquiryInterface
  {
    $enquiry
      ->setPrice(100)
      ->setDiscountedPrice(50)
      ->setPromotionId(1)
      ->setPromotionName('Black Friday half price sale');

    return $enquiry;
  }
}