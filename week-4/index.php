
<?php
$randomHour = rand(0, 23); // Generate a random hour between 0 and 23

echo "Random hour: $randomHour<br>";

if ($randomHour >= 5 && $randomHour < 9) {
    echo "It's breakfast time! The animals should eat: Bananas, Apples, and Oats.";
} elseif ($randomHour >= 12 && $randomHour < 14) {
    echo "It's lunch time! The animals should eat: Fish, Chicken, and Vegetables.";
} elseif ($randomHour >= 19 && $randomHour < 21) {
    echo "It's dinner time! The animals should eat: Steak, Carrots, and Broccoli.";
} else {
    echo "It's not feeding time for the animals.";
}
$randomNumber = rand(1, 2);

echo "Random Number: $randomNumber<br>";

if ($randomNumber % 3 == 0 && $randomNumber % 5 == 0) {
    echo "Magic Number: FizzBuzz";
} elseif ($randomNumber % 3 == 0) {
    echo "Magic Number: Fizz";
} elseif ($randomNumber % 5 == 0) {
    echo "Magic Number: Buzz";
} else {
    echo "Magic Number: $randomNumber";
}

// Function to fetch user data from the JSONPlaceholder API
        function getUsers() {
        $url = "https://jsonplaceholder.typicode.com/users";
        $data = file_get_contents($url);
        return json_decode($data, true);
        }
        // Get the list of users
        $users = getUsers();



        for ($i = 0; $i < count($users); $i++) {
            echo "Name: ". $users[$i]["name"] ."<br>";
            echo "Email: <a href='mailto:" . $users[$i]["email"] . "'>" . $users[$i]["email"] . "</a><br>";
            echo "Street: ". $users[$i]["address"]["street"]."<br>";
            echo "City: ". $users[$i]["address"]["city"]."<br>";
            echo "<br>";
        }


?>
