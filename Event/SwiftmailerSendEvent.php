<?php

/*
 * This file is part of the Cocorico package.
 *
 * (c) Cocolabs SAS <contact@cocolabs.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cocorico\SwiftReaderBundle\Event;

use Symfony\Component\EventDispatcher\Event;

class SwiftmailerSendEvent extends Event
{
    /**
     * @var \Swift_Mime_Message
     */
    protected $message;

    /**.
     * @param \Swift_Mime_Message $message
     */
    public function __construct(\Swift_Mime_Message $message)
    {
        $this->message = $message;
    }

    /**
     * @return \Swift_Mime_Message
     */
    public function getMessage()
    {
        return $this->message;
    }
}
