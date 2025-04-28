<?php

namespace FreeOpenSourceGames\SOTVS\Command\Dev;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'dev:quest:edit',
    description: 'Edit an exisiting quest.',
)]
class QuestEditCommand extends Command
{
    public function __construct()
    {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this
            ->addArgument('quest_id', InputArgument::REQUIRED, 'ID of the quest')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $questId = $input->getArgument('quest_id');

        $io->warning('TODO implement a logic to edit quest ' . $questId);

        return Command::SUCCESS;
    }
}
