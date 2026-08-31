<?php
/**
 * Tests for NFTStudio
 */

use PHPUnit\Framework\TestCase;
use Nftstudio\Nftstudio;

class NftstudioTest extends TestCase {
    private Nftstudio $instance;

    protected function setUp(): void {
        $this->instance = new Nftstudio(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Nftstudio::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
