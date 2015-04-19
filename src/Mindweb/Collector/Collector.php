<?php
namespace Mindweb\Collector;

use Mindweb\Modifier;
use Mindweb\Forwarder;

interface Collector
{
    /**
     * @param array $configuration
     */
    public function __construct(array $configuration);

    /**
     * @param Modifier\Collection $modifiers
     * @param Forwarder\Collection $forwarders
     */
    public function run(Modifier\Collection $modifiers, Forwarder\Collection $forwarders);
} 