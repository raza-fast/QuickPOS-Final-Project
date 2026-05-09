<?php
// [POS-204] [POS-205] Page Load & File Existence Tests
// Tests written by: [Your Name] - QA Role

use PHPUnit\Framework\TestCase;

class PageLoadTest extends TestCase
{
    // ── TEST 1: index.php file exists ──
    // Jira: POS-204
    public function testIndexFileExists()
    {
        $this->assertFileExists(
            __DIR__ . '/../index.php',
            'index.php should exist'
        );
    }

    // ── TEST 2: thankyou.php file exists ──
    // Jira: POS-205
    public function testThankyouFileExists()
    {
        $this->assertFileExists(
            __DIR__ . '/../thankyou.php',
            'thankyou.php should exist'
        );
    }

    // ── TEST 3: contact.php file exists ──
    // Jira: POS-204
    public function testContactFileExists()
    {
        $this->assertFileExists(
            __DIR__ . '/../contact.php',
            'contact.php should exist'
        );
    }

    // ── TEST 4: CSS file exists ──
    // Jira: POS-204
    public function testCSSFileExists()
    {
        $this->assertFileExists(
            __DIR__ . '/../css/style.css',
            'style.css should exist'
        );
    }

    // ── TEST 5: JS file exists ──
    // Jira: POS-204
    public function testJSFileExists()
    {
        $this->assertFileExists(
            __DIR__ . '/../js/script.js',
            'script.js should exist'
        );
    }

    // ── TEST 6: index.php is not empty ──
    // Jira: POS-204
    public function testIndexFileIsNotEmpty()
    {
        $content = file_get_contents(__DIR__ . '/../index.php');
        $this->assertNotEmpty($content, 'index.php should not be empty');
    }

    // ── TEST 7: index.php contains required sections ──
    // Jira: POS-204
    public function testIndexContainsAllSections()
    {
        $content = file_get_contents(__DIR__ . '/../index.php');

        $this->assertStringContainsString('header', $content, 'Page should have header');
        $this->assertStringContainsString('hero', $content, 'Page should have hero section');
        $this->assertStringContainsString('features', $content, 'Page should have features');
        $this->assertStringContainsString('pricing', $content, 'Page should have pricing');
        $this->assertStringContainsString('contact', $content, 'Page should have contact form');
        $this->assertStringContainsString('footer', $content, 'Page should have footer');
    }

    // ── TEST 8: Contact form has required fields ──
    // Jira: POS-204
    public function testContactFormHasRequiredFields()
    {
        $content = file_get_contents(__DIR__ . '/../index.php');

        $this->assertStringContainsString('name="name"', $content, 'Form should have name field');
        $this->assertStringContainsString('name="email"', $content, 'Form should have email field');
        $this->assertStringContainsString('name="message"', $content, 'Form should have message field');
    }
}