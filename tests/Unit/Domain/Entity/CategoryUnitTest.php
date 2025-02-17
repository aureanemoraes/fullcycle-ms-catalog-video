<?php

namespace tests\Unit\Domain\Entity;

use Core\Domain\Entity\Category;
use PHPUnit\Framework\TestCase;

class CategoryUnitTest extends TestCase
{
    public function testAttributes(): void
    {
        $data = [
            'id' => "",
            'name' => "Category Test",
            'description' => "Description Test",
            'is_active' => true, 
        ];

        $category = new Category(
            id: $data['id'],
            name: $data['name'],
            description: $data['description'],
            isActive: $data['is_active']
        );

        $this->assertEquals($data['id'], $category->id);
        $this->assertEquals($data['name'], $category->name);
        $this->assertEquals($data['description'], $category->description);
        $this->assertEquals($data['is_active'], $category->isActive);
    }

    public function testActivate(): void
    {
        $category = new Category(
            isActive: false
        );

        $this->assertFalse($category->isActive);

        $category->activate();

        $this->assertTrue($category->isActive);
    }

    public function testDisable(): void
    {
        $category = new Category();

        $this->assertTrue($category->isActive);

        $category->disable();

        $this->assertFalse($category->isActive);
    }
}