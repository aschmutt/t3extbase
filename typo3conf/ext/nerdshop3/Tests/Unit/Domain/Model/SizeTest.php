<?php
namespace Schmutt\Nerdshop3\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class SizeTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Schmutt\Nerdshop3\Domain\Model\Size
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Schmutt\Nerdshop3\Domain\Model\Size();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getTitleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTitle()
        );

    }

    /**
     * @test
     */
    public function setTitleForStringSetsTitle()
    {
        $this->subject->setTitle('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'title',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getValueReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getValue()
        );

    }

    /**
     * @test
     */
    public function setValueForStringSetsValue()
    {
        $this->subject->setValue('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'value',
            $this->subject
        );

    }
}
