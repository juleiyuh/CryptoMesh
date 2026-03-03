<?php
/**
 * Tests for CryptoMesh
 */

use PHPUnit\Framework\TestCase;
use Cryptomesh\Cryptomesh;

class CryptomeshTest extends TestCase {
    private Cryptomesh $instance;

    protected function setUp(): void {
        $this->instance = new Cryptomesh(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Cryptomesh::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
