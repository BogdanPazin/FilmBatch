<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Movie;
use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\AdminSeeder;
use Database\Seeders\ManagerSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $user = User::factory()->create([
        //     'name' => 'Bruce Wayne',
        //     'email' => 'bruce@gmail.com'
        // ]);

        // Movie::factory()->create([
        //     'user_id' => $user->id,
        //     'email' => $user->email
        // ]);

        Movie::create([
            'title' => 'The Wolf of Wall Street',
            'runtime' => 180,
            'year' => 2013,
            'director' => 'Martin Scorsese',
            'country' => 'USA',
            'actors' => 'Leonardo Dicaprio, Margot Robbie, Jonah Hill, Matthew McConaughey',
            'tags' => 'Biography, Comedy, Crime, Drama',
            'description' => 'In the early 1990s, Jordan Belfort teamed with his partner Donnie Azoff and started brokerage firm Stratton Oakmont. Their company quickly grows from a staff of 20 to a staff of more than 250 and their status in the trading community and Wall Street grows exponentially. So much that companies file their initial public offerings through them. As their status grows, so do the amount of substances they abuse, and so do their lies. They draw attention like no other, throwing lavish parties for their staff when they hit the jackpot on high trades. That ultimately leads to Belfort featured on the cover of Forbes Magazine, being called "The Wolf Of Wall Street." With the FBI onto Belforts trading schemes, he devises new ways to cover his tracks and watch his fortune grow. Belfort ultimately comes up with a scheme to stash their cash in a European bank. But with the FBI watching him like a hawk, how long will Belfort and Azoff be able to maintain their elaborate wealth and luxurious lifestyles?',
            'user_id' => 1,
            'email' => 'bruce@gmail.com',
            'production' => 'Red Granite Pictures',
            'logo' => 'logos\7MbY9Wa8TLX1zxikWWbRR9XJgzCKRt2T0WllS3sJ.png'
        ]);

        Movie::create([
            'title' => 'Fight Club',
            'runtime' => 139,
            'year' => 1999,
            'director' => 'David Fincher',
            'country' => 'USA',
            'actors' => 'Brad Pitt, Edward Norton, Meat Loaf, Helena Bonham Carter',
            'tags' => 'Drama',
            'description' => 'A nameless first person narrator (Edward Norton) attends support groups in attempt to subdue his emotional state and relieve his insomniac state. When he meets Marla (Helena Bonham Carter), another fake attendee of support groups, his life seems to become a little more bearable. However when he associates himself with Tyler (Brad Pitt) he is dragged into an underground fight club and soap making scheme. Together the two men spiral out of control and engage in competitive rivalry for love and power.',
            'user_id' => 1,
            'email' => 'bruce@gmail.com',
            'production' => 'Fox 2000 Pictures',
            'logo' => 'logos\pPJADeqD0cjQuTOaAxxqqCrdhpLk4TbAStbd2ZQ7.jpg'
        ]);

        Movie::create([
            'title' => 'Interstellar',
            'runtime' => 169,
            'year' => 2014,
            'director' => 'Christopher Nolan',
            'country' => 'USA',
            'actors' => 'Matthew McConaughey, Anne Hathaway, Jessica Chastain',
            'tags' => 'Adventure, Drama, Sci-Fi',
            'description' => 'Earths future has been riddled by disasters, famines, and droughts. There is only one way to ensure mankinds survival: Interstellar travel. A newly discovered wormhole in the far reaches of our solar system allows a team of astronauts to go where no man has gone before, a planet that may have the right environment to sustain human life.',
            'user_id' => 4,
            'email' => 'milos@test.com',
            'production' => 'Legendary Pictures',
            'logo' => 'logos\r56HHCkYM0x7XOxbeubcO4qnMVhRzb4CoExlNZLO.jpg'
        ]);

        Movie::create([
            'title' => 'The Prestige',
            'runtime' => 130,
            'year' => 2006,
            'director' => 'Christopher Nolan',
            'country' => 'UK',
            'actors' => 'Christian Bale, Hugh Jackman, Scarlett Johansson',
            'tags' => 'Drama, Mystery, Sci-Fi, Thriller',
            'description' => 'In the end of the nineteenth century, in London, Robert Angier, his beloved wife Julia McCullough, and Alfred Borden are friends and assistants of a magician. When Julia accidentally dies during a performance, Robert blames Alfred for her death, and they become enemies. Both become famous and rival magicians, sabotaging the performance of the other on the stage. When Alfred performs a successful trick, Robert becomes obsessed trying to disclose the secret of his competitor with tragic consequences.',
            'user_id' => 5,
            'email' => 'lidija@test.com',
            'production' => 'Touchstone Pictures',
            'logo' => 'logos\I1PAV9lLbOr95pDgZkx3A4dYLJfzaFaeKUo3BK1h.jpg'
        ]);

        Movie::create([
            'title' => 'Pulp Fiction',
            'runtime' => 154,
            'year' => 1994,
            'director' => 'Quentin Tarantino',
            'country' => 'USA',
            'actors' => 'John Travolta, Uma Thurman, Samuel L. Jackson, Bruce Willis',
            'tags' => 'Crime, Drama',
            'description' => 'Jules Winnfield (Samuel L. Jackson) and Vincent Vega (John Travolta) are two hit men who are out to retrieve a suitcase stolen from their employer, mob boss Marsellus Wallace (Ving Rhames). Wallace has also asked Vincent to take his wife Mia (Uma Thurman) out a few days later when Wallace himself will be out of town. Butch Coolidge (Bruce Willis) is an aging boxer who is paid by Wallace to lose his fight. The lives of these seemingly unrelated people are woven together comprising of a series of funny, bizarre and uncalled-for incidents.',
            'user_id' => 4,
            'email' => 'milos@test.com',
            'production' => 'A Band Apart',
            'logo' => 'logos\wQMTcaOOMryRutARhbbFvjjRxdCgGbnIo9rKs8lj.jpg'
        ]);

        Movie::create([
            'title' => 'The Shawshank Redemption',
            'runtime' => 142,
            'year' => 1994,
            'director' => 'Frank Darabont',
            'country' => 'USA',
            'actors' => 'Tim Robbins, Morgan Freeman, Bob Gunton',
            'tags' => 'Drama',
            'description' => 'Chronicles the experiences of a formerly successful banker as a prisoner in the gloomy jailhouse of Shawshank after being found guilty of a crime he did not commit. The film portrays the mans unique way of dealing with his new, torturous life; along the way he befriends a number of fellow prisoners, most notably a wise long-term inmate named Red.',
            'user_id' => 4,
            'email' => 'milos@test.com',
            'production' => 'Castle Rock Entertainment',
            'logo' => 'logos\4IEqIfKf8RBmj2dLM1tJYfIZUSV0eRPXLCPsGyUh.jpg'
        ]);

        Movie::create([
            'title' => 'Shutter Island',
            'runtime' => 139,
            'year' => 2010,
            'director' => 'Martin Scorsese',
            'country' => 'USA',
            'actors' => 'Leonardo DiCaprio, Emily Mortimer, Mark Ruffalo, Ben Kingsley',
            'tags' => 'Mystery, Thriller',
            'description' => 'In 1954, up-and-coming U.S. marshal Teddy Daniels is assigned to investigate the disappearance of a patient from Bostons Shutter Island Ashecliffe Hospital. Hes been pushing for an assignment on the island for personal reasons, but before long he thinks hes been brought there as part of a twisted plot by hospital doctors whose radical treatments range from unethical to illegal to downright sinister. Teddys shrewd investigating skills soon provide a promising lead, but the hospital refuses him access to records he suspects would break the case wide open. As a hurricane cuts off communication with the mainland, more dangerous criminals "escape" in the confusion, and the puzzling, improbable clues multiply, Teddy begins to doubt everything - his memory, his partner, even his own sanity.',
            'user_id' => 5,
            'email' => 'lidija@test.com',
            'production' => 'Phoenix Pictures',
            'logo' => 'logos\benyNmJnUsZwMXxLx0zB7PQEupbCs3hucQowimdP.jpg'
        ]);

        // $this->call(RoleSeeder::class);

        // $this->call(AdminSeeder::class);
        
        // $this->call(ManagerSeeder::class);

        // $this->call(UserSeeder::class);

        // $user->assignRole('user');
    }
}
