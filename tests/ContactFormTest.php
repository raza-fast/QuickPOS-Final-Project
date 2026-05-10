<?php
use PHPUnit\Framework\TestCase;

class ContactFormTest extends TestCase
{
    private function validateForm(string $name, string $email, string $message): bool
    {
        $name    = trim($name);
        $email   = trim($email);
        $message = trim($message);

        if (empty($name) || empty($email) || empty($message)) {
            return false;
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return false;
        }
        return true;
    }

    public function testEmptyFieldsFailValidation()
    {
        $result = $this->validateForm('', '', '');
        $this->assertFalse($result);
    }

    public function testInvalidEmailFailsValidation()
    {
        $result = $this->validateForm('Ali', 'not-an-email', 'Hello');
        $this->assertFalse($result);
    }

    public function testValidFormPassesValidation()
    {
        $result = $this->validateForm('Ali Hassan', 'ali@example.com', 'Hello!');
        $this->assertTrue($result);
    }

    public function testEmptyNameFailsValidation()
    {
        $result = $this->validateForm('', 'ali@example.com', 'Hello');
        $this->assertFalse($result);
    }

    public function testEmptyMessageFailsValidation()
    {
        $result = $this->validateForm('Ali', 'ali@example.com', '');
        $this->assertFalse($result);
    }

    public function testEmailMissingAtSymbolFails()
    {
        $result = $this->validateForm('Ali', 'aliexample.com', 'Hello');
        $this->assertFalse($result);
    }

    public function testEmailMissingDomainFails()
    {
        $result = $this->validateForm('Ali', 'ali@', 'Hello');
        $this->assertFalse($result);
    }

    public function testMultipleValidEmailsPass()
    {
        $emails = ['test@gmail.com', 'user@uni.edu', 'contact@pos.io'];
        foreach ($emails as $email) {
            $result = $this->validateForm('Test', $email, 'Message');
            $this->assertTrue($result);
        }
    }
}