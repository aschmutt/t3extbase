<?php
namespace Schmutt\Nerdshop3\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class ProductTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Schmutt\Nerdshop3\Domain\Model\Product
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Schmutt\Nerdshop3\Domain\Model\Product();
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
    public function getDescriptionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDescription()
        );

    }

    /**
     * @test
     */
    public function setDescriptionForStringSetsDescription()
    {
        $this->subject->setDescription('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'description',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getImageReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getImage()
        );

    }

    /**
     * @test
     */
    public function setImageForFileReferenceSetsImage()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setImage($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'image',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getSizeReturnsInitialValueForSize()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getSize()
        );

    }

    /**
     * @test
     */
    public function setSizeForObjectStorageContainingSizeSetsSize()
    {
        $size = new \Schmutt\Nerdshop3\Domain\Model\Size();
        $objectStorageHoldingExactlyOneSize = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneSize->attach($size);
        $this->subject->setSize($objectStorageHoldingExactlyOneSize);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneSize,
            'size',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addSizeToObjectStorageHoldingSize()
    {
        $size = new \Schmutt\Nerdshop3\Domain\Model\Size();
        $sizeObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $sizeObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($size));
        $this->inject($this->subject, 'size', $sizeObjectStorageMock);

        $this->subject->addSize($size);
    }

    /**
     * @test
     */
    public function removeSizeFromObjectStorageHoldingSize()
    {
        $size = new \Schmutt\Nerdshop3\Domain\Model\Size();
        $sizeObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $sizeObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($size));
        $this->inject($this->subject, 'size', $sizeObjectStorageMock);

        $this->subject->removeSize($size);

    }
}
