<?php

/*
 * This file is part of the Alice package.
 *
 * (c) Nelmio <hello@nelm.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Nelmio\Alice\Parser\Chainable;

use Nelmio\Alice\Parser\ChainableParserInterface;
use Nelmio\Alice\Parser\FileListProviderTrait;
use Nelmio\Alice\Throwable\Exception\Parser\UnparsableFileException;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

/**
 * @covers \Nelmio\Alice\Parser\Chainable\PhpParser
 */
class JsonParserTest extends TestCase
{
    use FileListProviderTrait;

    private static $dir;

    /**
     * @var JsonParser
     */
    private $parser;

    /**
     * @inheritdoc
     */
    public static function setUpBeforeClass(): void
    {
        parent::setUpBeforeClass();

        self::$dir = __DIR__.'/../../../fixtures/Parser/files/json';
    }

    /**
     * @inheritdoc
     */
    public static function tearDownAfterClass(): void
    {
        self::$dir = null;

        parent::tearDownAfterClass();
    }

    /**
     * @inheritdoc
     */
    protected function setUp(): void
    {
        $this->parser = new JsonParser();
    }

    public function testIsAChainableParser()
    {
        $this->assertTrue(is_a(JsonParser::class, ChainableParserInterface::class, true));
    }

    public function testIsNotClonable()
    {
        $this->assertFalse((new ReflectionClass(JsonParser::class))->isCloneable());
    }

    /**
     * @dataProvider provideJsonList
     */
    public function testCanParseJsonFiles(string $file, array $expectedParsers)
    {
        $actual = $this->parser->canParse($file);
        $expected = (in_array(get_class($this->parser), $expectedParsers));

        $this->assertEquals($expected, $actual);
    }

    /**
     * @dataProvider providePhpList
     */
    public function testCanNotParsePhpFiles(string $file)
    {
        $actual = $this->parser->canParse($file);

        $this->assertFalse($actual);
    }

    /**
     * @dataProvider provideYamlList
     */
    public function testCannotParseYamlFiles(string $file)
    {
        $actual = $this->parser->canParse($file);

        $this->assertFalse($actual);
    }

    /**
     * @dataProvider provideUnsupportedList
     */
    public function testCannotParseUnsupportedFiles(string $file)
    {
        $actual = $this->parser->canParse($file);

        $this->assertFalse($actual);
    }

    public function testThrowsAnExceptionIfFileDoesNotExist()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('The file "/nowhere.json" could not be found.');

        $this->parser->parse('/nowhere.json');
    }

    public function testReturnsParsedFileContent()
    {
        $actual = $this->parser->parse(self::$dir.'/basic.json');

        $this->assertSame(
            [
                'Nelmio\Alice\support\models\User' => [
                    'user0' => [
                        'fullname' => 'John Doe',
                    ],
                ],
            ],
            $actual
        );
    }

    public function testParsingEmptyFileResultsInEmptySet()
    {
        $actual = $this->parser->parse(self::$dir.'/empty.json');

        $this->assertSame([], $actual);
    }

    public function testParseReturnsNamedParameters()
    {
        $actual = $this->parser->parse(self::$dir.'/named_parameters.json');

        $this->assertSame(
            [
                'Nelmio\Alice\DummyWithMethods' => [
                    'dummy_with_methods' => [
                        '__construct' => [
                            '$foo1' => 'foo1',
                            '$foo2' => 'foo2',
                        ],
                        '__calls' => [
                            [
                                'bar' => [
                                    '$bar1' => 'bar1',
                                    '$bar2' => 'bar2',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            $actual
        );
    }

    public function testThrowsAnExceptionIfInvalidJson()
    {
        $this->expectException(UnparsableFileException::class);
        $this->expectExceptionMessageMatches('/^The file ".+\/invalid\.json" does not contain valid JSON\.$/');

        $this->parser->parse(self::$dir.'/invalid.json');
    }
}
