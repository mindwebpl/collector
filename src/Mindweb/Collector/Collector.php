<?php
namespace Mindweb\Collector;

use Symfony\Component\Console\Output\OutputInterface;
use Mindweb\Modifier;
use Mindweb\Forwarder;

interface Collector
{
    /**
     * @param OutputInterface $output
     */
    public function __construct(OutputInterface $output);

    /**
     * @param Modifier\Collection $modifiers
     * @param Forwarder\Collection $forwarders
     */
    public function run(Modifier\Collection $modifiers, Forwarder\Collection $forwarders);
} 