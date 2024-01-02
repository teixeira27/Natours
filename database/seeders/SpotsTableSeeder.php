<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Spot;
use App\Models\User;

class SpotsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $spots = [
            [
                'name'          => 'Monumento da Inovação Tecnológica',
                'cost'           => 1000,
                'path'   => 'tqmIXHML6zTI3fewwBsTjA39ZAKfOr2QZVYc6GJO.jpg',
                'city'   => 'Porto',
                'duration' => '30',
                'description'   => 'Uma estrutura majestosa que simboliza os avanços tecnológicos ao longo do tempo, representando marcos significativos na história da inovação.',
                'user_id'   => User::all()->random()->id,
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'name'          => 'Praça da Codificação',
                'cost'           => 2000,
                'path'   => 'PsbqipYbZjCs9RIOrELm83ENkEKb3h6EQuWExiof.jpg',
                'city'   => 'Braga',
                'duration' => '20',
                'description'   => 'Uma praça central onde programadores se reúnem para compartilhar conhecimentos, realizar hackathons e celebrar a arte da codificação em um ambiente colaborativo.',
                'user_id'   => User::all()->random()->id,
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'name'          => 'Torre dos Algoritmos',
                'cost'           => 100,
                'path'   => 'vzflYgbIEm5Mbr743hmSxA4RA6LNVN5uC1j4IpXX.jpg',
                'city'   => 'Lisboa',
                'duration' => '40',
                'description'   => 'Uma torre imponente que destaca a importância dos algoritmos na computação, com padrões intricados representando a complexidade e elegância das soluções algorítmicas.',
                'user_id'   => User::all()->random()->id,
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'name'          => 'Jardim das Linguagens de Programação',
                'cost'           => 2500,
                'path'   => 'QyYBFxwYLZzYiQ2U6wBa4xwHbprUEEBn2A8blisX.jpg',
                'city'   => 'Póvoa de Varzim',
                'duration' => '60',
                'description'   => 'Um jardim exuberante com esculturas que representam diversas linguagens de programação, simbolizando a diversidade e riqueza de opções disponíveis para os desenvolvedores.',
                'user_id'   => User::all()->random()->id,
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'name'          => 'Estátua do Código Perfeito',
                'cost'           => 500,
                'path'   => 'l2vP1kbt7uwJzuFsu7T9S56Zgb4ZSJwCuSFXGW9B.jpg',
                'city'   => 'Braga',
                'duration' => '120',
                'description'   => 'Uma escultura que personifica o conceito de código perfeito, retratando a harmonia entre eficiência, legibilidade e elegância em uma obra de arte digital.',
                'user_id'   => User::all()->random()->id,
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'name'          => 'Memorial dos Bits e Bytes',
                'cost'           => 350,
                'path'   => 'qACD0EDXjAexxeGXX04mFjCW7ozD6VKdfItMLSEM.jpg',
                'city'   => 'Porto',
                'duration' => '90',
                'description'   => 'Um memorial que homenageia a base fundamental da computação, com esculturas que representam os bits e bytes, destacando sua importância na representação de informações.',
                'user_id'   => User::all()->random()->id,
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'name'          => 'Plaza da Inteligência Artificial',
                'cost'           => 4000,
                'path'   => 'FFcF0Feu3saV8EHGgRQAHlSLFy9r1N5xyxDkFkWe.jpg',
                'city'   => 'Porto',
                'duration' => '20',
                'description'   => 'Uma praça dedicada à inteligência artificial, com instalações interativas que exploram os avanços nesta área, desde máquinas simples até sistemas avançados de aprendizado de máquina.',
                'user_id'   => User::all()->random()->id,
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'name'          => 'Obelisco da Eficiência de Código',
                'cost'           => 1000,
                'path'   => 'x68UPl8tCTDRHleHOU48Khv5PReXAFDjpgNn9SUH.jpg',
                'city'   => 'Porto',
                'duration' => '30',
                'description'   => 'Um obelisco altivo que simboliza a busca constante pela eficiência no código, incentivando programadores a criar soluções elegantes e otimizadas.',
                'user_id'   => User::all()->random()->id,
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'name'          => 'Espaço dos Programadores Visionários',
                'cost'           => 1000,
                'path'   => 'fdVnRhVqjJJurOsZ648TH3AldE9WzCGCM7mWiVIy.jpg',
                'city'   => 'Porto',
                'duration' => '45',
                'description'   => 'Um espaço dedicado aos programadores que desbravaram novos horizontes, com esculturas e exposições que destacam inovações e ideias revolucionárias no mundo da programação.',
                'user_id'   => User::all()->random()->id,
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
        ];

        Spot::insert($spots);
    }
}
