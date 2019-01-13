<?php
/**
 * Created by PhpStorm.
 * User: patrick
 * Date: 12/01/19
 * Time: 23:49
 */

namespace App\UI\Action;


use App\Domain\Models\User;
use App\Event\UserCreatedEvent;
use App\Helper\FileUploaderHelper;
use App\UI\Action\Interfaces\HomeActionInterface;
use App\UI\Responder\HomeResponder;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class HomeAction
 *
 * @Route(name="index", path="/", methods={"GET"})
 */
class HomeAction implements HomeActionInterface
{
    /**
     * @var FileUploaderHelper
     */
    private $fileUploader;

    /**
     * @var EventDispatcherInterface
     */
    private $eventDispatcher;

    /**
     * HomeAction constructor.
     * @param FileUploaderHelper $fileUploader
     * @param EventDispatcherInterface $eventDispatcher
     */
    public function __construct(
        FileUploaderHelper $fileUploader,
        EventDispatcherInterface $eventDispatcher
    ) {
        $this->fileUploader = $fileUploader;
        $this->eventDispatcher = $eventDispatcher;
    }


    public function __invoke(HomeResponder $responder)
    {
        $user = new User('toto', 'toto@domain.com', 'toto123456');

        $this->eventDispatcher->dispatch(UserCreatedEvent::NAME, new UserCreatedEvent($user));

        dump($this->fileUploader->getImageFolder());

        return $responder();
    }
}