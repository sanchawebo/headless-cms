<?php

namespace App\Controllers\Back;

use App\Controllers\BaseController;
use CodeIgniter\Config\Factories;
use CodeIgniter\View\Exceptions\ViewException;

class Tools extends BaseController
{
	public function migrate()
	{
		$data = [];
		$data['title'] = 'Migrations';
		$migrate = \Config\Services::migrations();
		$data['migrationHistory'] = json_decode(json_encode($migrate->getHistory()), true);
		$data['migrations'] = json_decode(json_encode($migrate->findMigrations()), true);
		try {
			$migrate->latest();
			$data['success'] = true;
		} catch (\Exception $th) {
			$data['success'] = false;
			$data['errors'] = json_decode(json_encode($th), true);
		}
		// dd($data);
		return view('tools/migrate', $data);
	}

	public function seed()
	{
		try {
			$seeder = \Config\Database::seeder();
			$seeder->call('CentralSeeder');
			$data['success'] = true;
		} catch (\CodeIgniter\Database\Exceptions\DatabaseException $e) {
			// d($e->getMessage());
			$data['success'] = false;
			$data['message'] = $e->getMessage();
			$data['trace'] = $e->getTrace();
		}
		return view('tools/seed', $data);
	}
	public function test()
	{
		$a = 0;
		$result['isset'] = (isset($a));
		$result['empty'] = (empty($a));
		$result['issetAndNotEmpty'] = (isset($a) && !empty($a));
		$result['notEmpty'] = (!empty($a));

		$data['result'] = $result;
		// d($result) in the view.
		return view('tools/test', $data);
	}
}
