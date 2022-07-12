<?php
    require "../vendor/autoload.php";
    require "../config/database.php";

    $faker = Faker\Factory::create();

    for($i=1; $i <= 150; $i++){
        $q = $db->prepare('INSERT INTO users
                        (name, pseudo, email, password, created_at, city, country, active, sex, available_for_date, bio) VALUES 
                        (:name, :pseudo, :email, :password, :created_at, :city, :country, :active, :sex, :available_for_date, :bio)');
        
        $q->execute([
            'name' => $faker->unique()->name,
            'pseudo' => $faker->unique()->userName,
            'email' => $faker->unique()->email,
            'password' => password_hash('111111', PASSWORD_BCRYPT),
            'active' => 1,
            'created_at' => $faker->date()." ".$faker->time(),
            'city' => $faker->city,
            'country' => $faker->country,
            'sex' => $faker->randomElements(['Man', 'Woman']),
            'available_for_date' => $faker->randomElements([0, 1]),
            'bio' => $faker->paragraph()
        ]);
    }