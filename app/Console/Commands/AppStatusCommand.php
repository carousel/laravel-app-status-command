<?php namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class AppStatusCommand extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'app:status';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Show app status (up or down)';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
        if(file_exists(__DIR__ . '/../../../storage/framework/down')){
		    $this->info("Application is DOWN");
        }else{
		    $this->info("Application is UP");
        }
        return $this;
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	//protected function getArguments()
	//{
		//return [
			//['example', InputArgument::REQUIRED, 'An example argument.'],
		//];
	//}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	//protected function getOptions()
	//{
		//return [
			//['example', null, InputOption::VALUE_OPTIONAL, 'An example option.', null],
		//];
	//}

}
