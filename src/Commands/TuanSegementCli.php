<?php

namespace Scaleflex\LapTrinhPhp\Commands;

use Scaleflex\SegmentCommons\HyperCli;
use Scaleflex\LapTrinhPhp\Manager\TuanSegementManager;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TuanSegementCli extends HyperCli
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature;

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Description';

    protected $manager;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(TuanSegementManager $manager)
    {
        $path            = explode('\\', __CLASS__);
        $classname       = array_pop($path);
        $this->name      = $this->getCommandCli($classname);
        $this->signature = $this->getCommandCli($classname);

        parent::__construct();

        $this->manager = $manager;

        /** Argument CLI **/
        // $this->addArgument('example', InputArgument::REQUIRED, 'Description parameter example');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $example = $this->manager->data();
        $tableExample = new Table($this->output);
        $tableExample->setHeaderTitle('Example')
            ->setHeaders(['Column 1', 'Column 2'])
            ->setRows($example)
            ->render();

        return 0;
    }
}
