<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder; 
use App\models\Livro;

class LivroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Livro::create([ 
            'titulo' => 'O Senhor dos Anéis', 
            'autor' => 'J.R.R. Tolkien', 
            'ano_publicacao' => 1954, 
            'resumo' => 'Uma aventura épica pela Terra Média.', 
        ]);

        Livro::create([ 
            'titulo' => 'Anne de Green Gables', 
            'autor' => 'L. M. Montgomery', 
            'ano_publicacao' => 1908, 
            'resumo' => 'A história de Anne Shirley, uma menina órfã espirituosa e cheia de imaginação, que é adotada por engano por um casal de irmãos idosos em Green Gables, mudando suas vidas para sempre.', 
        ]);
        
        Livro::create([ 
            'titulo' => 'Orgulho e Preconceito', 
            'autor' => 'Jane Austen', 
            'ano_publicacao' => 1813, 
            'resumo' => 'Um clássico sobre a vida de Elizabeth Bennet, uma jovem inteligente e independente que desafia as normas sociais e enfrenta questões de orgulho, amor e status.', 
        ]);
        
        Livro::create([ 
            'titulo' => 'Pequenas Grandes Mentiras', 
            'autor' => 'Liane Moriarty', 
            'ano_publicacao' => 2014, 
            'resumo' => 'Uma trama cativante que explora os segredos e mentiras de três mulheres complexas, enquanto um evento trágico transforma suas vidas aparentemente perfeitas.', 
        ]);
        
        Livro::create([ 
            'titulo' => 'O Jardim Secreto', 
            'autor' => 'Frances Hodgson Burnett', 
            'ano_publicacao' => 1911, 
            'resumo' => 'A jornada de Mary Lennox, uma menina órfã que descobre um jardim escondido em sua nova casa na Inglaterra, onde ela encontra a cura para sua alma e transforma as vidas ao seu redor.', 
        ]);
        
        Livro::create([ 
            'titulo' => 'Pequenas Mulheres', 
            'autor' => 'Louisa May Alcott', 
            'ano_publicacao' => 1868, 
            'resumo' => 'A vida das quatro irmãs March, que enfrentam dificuldades e triunfos enquanto crescem e buscam seus sonhos durante a Guerra Civil Americana.', 
        ]);
        
    
    }
}
