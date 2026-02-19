<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class MathCaptchaRule implements Rule
{
  protected string $captchaKey;
  protected string $messageText = 'Invalid captcha.'; // set to avoid PHP 8.2 dynamic props

  public function __construct(string $captchaKey)
  {
    $this->captchaKey = $captchaKey;
  }

  public function passes($attribute, $value): bool
  {
    $expected = session($this->captchaKey);

    if ($expected === null) {
      $this->messageText = 'Captcha session expired. Please refresh and try again.';
      return false;
    }

    $ok = ((int) $value === (int) $expected);

    if ($ok) {
      // one-time use
      session()->forget($this->captchaKey);
    } else {
      $this->messageText = 'Incorrect answer. Please try again.';
    }

    return $ok;
  }

  public function message(): string
  {
    return $this->messageText;
  }
}
