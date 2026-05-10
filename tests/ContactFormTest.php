<?php
// [POS-201] [POS-202] [POS-203] Contact Form Validation Tests
// Tests written by: [Your Name] - QA Role

use PHPUnit\Framework\TestCase;

class ContactFormTest extends TestCase
{
    // ── Helper: runs the same validation logic as contact.php ──
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

    // ── TEST 1: All fields empty should FAIL ──
    // Jira: POS-201
    public function testEmptyFieldsFailValidation()
    {
        $result = $this->validateForm('', '', '');
        $this->assertFalse($result, 'Empty fields should fail validation');
    }

    // ── TEST 2: Invalid email should FAIL ──
    // Jira: POS-202
    public function testInvalidEmailFailsValidation()
    {
        $result = $this->validateForm('Ali Hassan', 'not-an-email', 'Hello');
        $this->assertFalse($result, 'Invalid email should fail validation');
    }

    // ── TEST 3: Valid data should PASS ──
    // Jira: POS-203
    public function testValidFormPassesValidation()
    {
        $result = $this->validateForm('Ali Hassan', 'ali@example.com', 'Hello QuickPOS!');
        $this->assertTrue($result, 'Valid form data should pass validation');
    }

    // ── TEST 4: Empty name only should FAIL ──
    // Jira: POS-201
    public function testEmptyNameFailsValidation()
    {
        $result = $this->validateForm('', 'ali@example.com', 'Hello');
        $this->assertFalse($result, 'Empty name should fail validation');
    }

    // ── TEST 5: Empty message only should FAIL ──
    // Jira: POS-201
    public function testEmptyMessageFailsValidation()
    {
        $result = $this->validateForm('Ali Hassan', 'ali@example.com', '');
        $this->assertFalse($result, 'Empty message should fail validation');
    }

    // ── TEST 6: Email missing @ should FAIL ──
    // Jira: POS-202
    public function testEmailMissingAtSymbolFails()
    {
        $result = $this->validateForm('Ali Hassan', 'aliexample.com', 'Hello');
        $this->assertFalse($result, 'Email without @ should fail validation');
    }

    // ── TEST 7: Email missing domain should FAIL ──
    // Jira: POS-202
    public function testEmailMissingDomainFails()
    {
        $result = $this->validateForm('Ali Hassan', 'ali@', 'Hello');
        $this->assertFalse($result, 'Email without domain should fail validation');
    }

    // ── TEST 8: Data driven — multiple valid emails should PASS ──
    // Jira: POS-203 (Advanced: data-driven testing)
    public function testMultipleValidEmailsPass()
    {
        $validEmails = [
            'test@gmail.com',
            'user@university.edu',
            'contact@quickpos.io',
            'name.surname@company.org'
        ];

        foreach ($validEmails as $email) {
            $result = $this->validateForm('Test User', $email, 'Test message');
            $this->assertTrue($result, "Valid email $email should pass");
        }
    }
}