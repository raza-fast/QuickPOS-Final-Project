<?php
use PHPUnit\Framework\TestCase;

class PageLoadTest extends TestCase
{
    public function testIndexFileExists()
    {
        $this->assertFileExists(__DIR__ . '/../index.php');
    }

    public function testThankyouFileExists()
    {
        $this->assertFileExists(__DIR__ . '/../thankyou.php');
    }

    public function testContactFileExists()
    {
        $this->assertFileExists(__DIR__ . '/../contact.php');
    }

    public function testCSSFileExists()
    {
        $this->assertFileExists(__DIR__ . '/../css/style.css');
    }

    public function testJSFileExists()
    {
        $this->assertFileExists(__DIR__ . '/../js/script.js');
    }

    public function testIndexFileIsNotEmpty()
    {
        $content = file_get_contents(__DIR__ . '/../index.php');
        $this->assertNotEmpty($content);
    }

    public function testIndexContainsAllSections()
    {
        $content = file_get_contents(__DIR__ . '/../index.php');
        $this->assertStringContainsString('header', $content);
        $this->assertStringContainsString('hero', $content);
        $this->assertStringContainsString('features', $content);
        $this->assertStringContainsString('pricing', $content);
        $this->assertStringContainsString('contact', $content);
        $this->assertStringContainsString('footer', $content);
    }

    public function testContactFormHasRequiredFields()
    {
        $content = file_get_contents(__DIR__ . '/../index.php');
        $this->assertStringContainsString('name="name"', $content);
        $this->assertStringContainsString('name="email"', $content);
        $this->assertStringContainsString('name="message"', $content);
    }
}