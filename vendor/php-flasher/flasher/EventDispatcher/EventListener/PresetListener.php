<?php

/*
 * This file is part of the PHPFlasher package.
 * (c) Younes KHOUBZA <younes.khoubza@gmail.com>
 */

namespace Flasher\Prime\EventDispatcher\EventListener;

use Flasher\Prime\EventDispatcher\Event\PersistEvent;
use Flasher\Prime\Exception\PresetNotFoundException;
use Flasher\Prime\Notification\Envelope;
use Flasher\Prime\Stamp\PresetStamp;

/**
 * @phpstan-type PresetType array{
 *    string: array{
 *      type: string,
 *      title: string,
 *      message: string,
 *      options: array<string, mixed>,
 *    }
 * }
 */
final class PresetListener implements EventSubscriberInterface
{
    /**
     * @phpstan-var PresetType[]
     */
    private $presets = array();

    /**
     * @phpstan-type PresetType[]
     */
    public function __construct(array $presets)
    {
        $this->presets = $presets;
    }

    /**
     * @return void
     */
    public function __invoke(PersistEvent $event)
    {
        foreach ($event->getEnvelopes() as $envelope) {
            $this->attachPresets($envelope);
        }
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return 'Flasher\Prime\EventDispatcher\Event\PersistEvent';
    }

    /**
     * @return void
     */
    private function attachPresets(Envelope $envelope)
    {
        $preset = $envelope->get('Flasher\Prime\Stamp\PresetStamp');
        if (!$preset instanceof PresetStamp) {
            return;
        }

        if (!isset($this->presets[$preset->getPreset()])) {
            throw new PresetNotFoundException($preset->getPreset(), array_keys($this->presets));
        }

        $preset = $this->presets[$preset->getPreset()];
        $preset = array_merge(array(
            'type' => 'info',
            'title' => null,
            'message' => null,
            'options' => array(),
        ), $preset);

        if (null === $envelope->getType()) {
            $envelope->setType($preset['type']);
        }

        if (null === $envelope->getTitle()) {
            $envelope->setTitle($preset['title']);
        }

        if (null === $envelope->getMessage()) {
            $envelope->setMessage($preset['message']);
        }

        $options = array_merge($preset['options'], $envelope->getOptions());
        $envelope->setOptions($options);
    }
}
