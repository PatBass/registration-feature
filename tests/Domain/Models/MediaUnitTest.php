<?php
/**
 * Created by PhpStorm.
 * User: patrick
 * Date: 08/01/19
 * Time: 11:22
 */

namespace App\Domain\Models;


use App\Domain\Interfaces\MediaInterface;
use PHPUnit\Framework\TestCase;
use App\Domain\Models\Media;

/**
 * Class MediaUnitTest
 * @package App\Domain\Models
 *
 * @author Patrick Bassoukissa
 */
final class MediaUnitTest extends TestCase
{

    /**
     * @param string $type
     * @param string $name
     *
     * @dataProvider provideMediaData
     */
    public function testMediaExistsAndImplementsInterfaces(string $type, string $name, string $publicUrl)
    {
        $media = new Media($type, $name, $publicUrl);
        static::assertInstanceOf(MediaInterface::class, $media);
        static::assertSame($media->getType(), $type);
        static::assertSame($media->getPublicUrl(), $publicUrl);
    }

    /**
     * @return \Generator
     */
    public function provideMediaData()
    {
        yield array("picture", "pic.png", "/public/media/pic.png");
        yield array("video", "vid.mp4", "/public/media/vid.mp4");
        yield array("file", "myFile.pdf", "/public/media/myFile.pdf");
    }
}