<?php

namespace App\DTO;

class LowestPriceEnquiry implements PromotionEnquiryInterface
{
  private ?int $product_id;
  private ?int $quantity;
  private ?string $request_location;
  private ?string $voucher_code;
  private ?string $request_date;
  private ?int $price;
  private ?int $discounted_price;
  private ?int $promotion_id;
  private ?string $promotion_name;

  public function getProductId(): ?int
  {
    return $this->product_id;
  }
  public function setProductId(?int $product_id): self
  {
    $this->product_id = $product_id;
    return $this;
  }

  public function getQuantity(): ?int
  {
    return $this->quantity;
  }
  public function setQuantity(?int $quantity): self
  {
    $this->quantity = $quantity;
    return $this;
  }

  public function getRequestLocation(): ?string
  {
    return $this->request_location;
  }
  public function setRequestLocation(?string $request_location): self
  {
    $this->request_location = $request_location;
    return $this;
  }

  public function getVoucherCode(): ?string
  {
    return $this->voucher_code;
  }
  public function setVoucherCode(?string $voucher_code): self
  {
    $this->voucher_code = $voucher_code;
    return $this;
  }

  public function getRequestDate(): ?string
  {
    return $this->request_date;
  }
  public function setRequestDate(?string $request_date): self
  {
    $this->request_date = $request_date;
    return $this;
  }

  public function getPrice(): ?int
  {
    return $this->price;
  }
  public function setPrice(?int $price): self
  {
    $this->price = $price;
    return $this;
  }

  public function getDiscountedPrice(): ?int
  {
    return $this->discounted_price;
  }
  public function setDiscountedPrice(?int $discounted_price): self
  {
    $this->discounted_price = $discounted_price;
    return $this;
  }

  public function getPromotionId(): ?int
  {
    return $this->promotion_id;
  }
  public function setPromotionId(?int $promotion_id): self
  {
    $this->promotion_id = $promotion_id;
    return $this;
  }

  public function getPromotionName(): ?string
  {
    return $this->promotion_name;
  }
  public function setPromotionName(?string $promotion_name): self
  {
    $this->promotion_name = $promotion_name;
    return $this;
  }

  public function jsonSerialize()
  {
    return get_object_vars($this);
  }
}