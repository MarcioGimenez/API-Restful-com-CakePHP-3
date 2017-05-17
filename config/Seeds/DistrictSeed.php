<?php
use Migrations\AbstractSeed;

/**
 * District seed.
 */
class DistrictSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
        [
        'id' => 1,
        'title' => 'Caucaia do Alto',
        ],
        [
        'id' => 2,
        'title' => 'Centro',
        ],
        ];

        $table = $this->table('districts');
        $table->insert($data)->save();
    }
}
