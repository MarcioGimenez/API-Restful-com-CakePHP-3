<?php
use Migrations\AbstractSeed;

/**
 * Properties seed.
 */
class PropertiesSeed extends AbstractSeed
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
        'title' => 'Casa Grande 3 Quartos',
        'description' => 'Vendo Linda casa',
        'value' => '250000.00',
        'type_id' => 1,
        'district_id' => 2,
        ],
        [
        'title' => 'Apartamento Pequeno 2 Quartos',
        'description' => 'Vendo ótimo apartamento perto do metrô',
        'value' => '180000.00',
        'type_id' => 1,
        'district_id' => 1,
        ],
         [
        'title' => 'Sobrado grande',
        'description' => 'Alugo ótimo sobrado perto do metrô',
        'value' => '1500.00',
        'type_id' => 2,
        'district_id' => 2,
        ],
        ];
       

        $table = $this->table('properties');
        $table->insert($data)->save();
    }
}
