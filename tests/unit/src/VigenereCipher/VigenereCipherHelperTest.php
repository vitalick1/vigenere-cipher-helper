<?php

namespace VigenereCipher;

use PHPUnit\Framework\TestCase;

class VigenereCipherHelperTest extends TestCase
{
  private $vigenere_cipher_helper;

  public function setup()
  {
    $this->vigenere_cipher_helper = new VigenereCipherHelper('password', 'alphabet');
  }

  /**
   * @test
   */
  public function getKeyTest()
  {
    $this->assertEquals('password', $this->vigenere_cipher_helper->getKey());
  }

  /**
   * @test
   */
  public function getAlphabetTest()
  {
    $this->assertEquals('alphabet', $this->vigenere_cipher_helper->getAlphabet());
  }

  /**
   * @test
   */
  public function getComputedKeyByClearTextTest()
  {
    $actual = $this->vigenere_cipher_helper->getComputedKeyByClearText('learning tdd');
    $this->assertEquals('passwordpass', $actual);

    $actual = $this->vigenere_cipher_helper->getComputedKeyByClearText('b');
    $this->assertEquals('p', $actual);
  }
}
