<?php
use PHPUnit\Framework\TestCase;

class PageLoadTest extends TestCase
{
    private $projectRoot;

    protected function setUp(): void
    {
        // This correctly points to the root of your project
        $this->projectRoot = dirname(__DIR__);
    }

    public function testIndexFileExists()
    {
        $this->assertFileExists($this->projectRoot . '/index.php');
    }

    public function testThankyouFileExists()
    {
        $this->assertFileExists($this->projectRoot . '/thankyou.php');
    }

    public function testContactFileExists()
    {
        $this->assertFileExists($this->projectRoot . '/contact.php');
    }

    public function testCSSFileExists()
    {
        $this->assertFileExists($this->projectRoot . '/css/style.css');
    }

    public function testJSFileExists()
    {
        $this->assertFileExists($this->projectRoot . '/js/script.js');
    }

    public function testIndexFileIsNotEmpty()
    {
        $content = file_get_contents($this->projectRoot . '/index.php');
        $this->assertNotEmpty($content);
    }

    public function testIndexContainsAllSections()
    {
        $content = file_get_contents($this->projectRoot . '/index.php');
        $this->assertStringContainsString('header', $content);
        $this->assertStringContainsString('hero', $content);
        $this->assertStringContainsString('features', $content);
        $this->assertStringContainsString('pricing', $content);
        $this->assertStringContainsString('contact', $content);
        $this->assertStringContainsString('footer', $content);
    }

    public function testContactFormHasRequiredFields()
    {
        $content = file_get_contents($this->projectRoot . '/index.php');
        $this->assertStringContainsString('name="name"', $content);
        $this->assertStringContainsString('name="email"', $content);
        $this->assertStringContainsString('name="message"', $content);
    }
}