<?php

namespace VigenereCipher;

class VigenereCipherHelper
{
  /**
   * @var string $key
   */
  private $key;

  /**
   * @var string $alphabet
   */
  private $alphabet;

  public function __construct($key, $alphabet)
  {
    $this->key = $key;
    $this->alphabet = $alphabet;
  }

  /**
   * @param string $clear_text
   */
  public function encode($clear_text)
  {
  }

  /**
   * @param string $cipher
   */
  public function decode($cipher)
  {
  }

  /**
   * @param string $clear_text
   * @return string
   */
  public function getComputedKeyByClearText($clear_text)
  {
    $key = $this->getKey();
    $clear_text_length = strlen($clear_text);
    $key_length = strlen($key);
    $result = str_repeat($key, ceil($clear_text_length / $key_length));
    $result = substr($result, 0, $clear_text_length);

    return $result;
  }

  /**
   * @return string
   */
  public function getKey()
  {
    return $this->key;
  }

  /**
   * @return string
   */
  public function getAlphabet()
  {
    return $this->alphabet;
  }

}
