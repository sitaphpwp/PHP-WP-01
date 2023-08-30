# PHP-WP-01
 PHP &amp; WordPress Plugin Development 


# Week 1 Road Map

1. Variable  & Constants
2. Operators
3. Conditional Statment 
4. Branching Statment / looping 
5. Array 
6. Functions 
7. Strings


# Conditional Statments (Topics)

1. if else 
2. if elseif else with nested block 
3. Switch Cases 
4. Alternative way uses


# Conditional structures allow you to make decisions in your code based on certain conditions. Here's a simple example involving an if statement:

# Real-Life Example: Checking Age Eligibility
Suppose you're building a website that sells tickets for an event, and you want to check if a person is eligible for a discounted ticket based on their age.

# Example : 

$age = 28; // You can change the age to see different outcomes

build this using your own logics.

$age = 28; // You can change the age to see different outcomes

if ($age < 18) {
    echo "You are eligible for a child ticket.";
} elseif ($age >= 18 && $age < 65) {
    echo "You are eligible for a regular ticket.";
} else {
    echo "You are eligible for a senior ticket.";
}


# nested if else 

In this scenario, let's consider a grading system for a school, where the grading is based on both the numerical score and the attendance of a student.

$score = 75; // Numerical score (out of 100)
$attendance = 80; // Attendance percentage

<!--  lets build your own logic  -->

if ($attendance >= 90) {
    if ($score >= 90) {
        echo "Excellent! You've earned an A.";
    } elseif ($score >= 80) {
        echo "Great job! You've earned a B.";
    } else {
        echo "Good job! You've earned a C.";
    }
}
elseif(condition){

}

else{
      echo "Your attendance is low. Please improve.";
}


# switch case 

$dayOfWeek = 3; // Change the value to see different outcomes

switch ($dayOfWeek) {
    case 1:
        echo "It's Monday.";
        break;
    default:
        echo "Invalid day of the week.";
        break;
}


#  Branching Statment / looping 

1. for Loop : 

A for loop is used to execute a block of code a specified number of times.

for ($i = 1; $i <= 5; $i++) {
    echo "Iteration: $i<br>";
}

This example will output the numbers from 1 to 5 along with the iteration number.

2. while Loop:
A while loop continues executing a block of code as long as a certain condition is true.

$count = 1;
while ($count <= 3) {
    echo "Count: $count<br>";
    $count++;
}
This example will output the numbers from 1 to 3 using a while loop.

3. do-while Loop

A do-while loop is similar to a while loop, but it executes the code block at least once before checking the condition.

$counter = 1;
do {
    echo "Value: $counter<br>";
    $counter++;
} while ($counter <= 2);

This example will output the value once and then stop because the condition is not met.

4. foreach Loop:

A foreach loop is used to iterate over each element in an array.

$fruits = array("Apple", "Banana", "Orange", "Mango");
foreach ($fruits as $fruit) {
    echo "Fruit: $fruit<br>";
}


# A real-life example
a real-life example where you want to print a countdown message for a special event. You can use a for loop to count down from a specified number to 1.

$daysUntilEvent = 5;

echo "Countdown to the Special Event:<br>";

for ($i = $daysUntilEvent; $i >= 1; $i--) {
    if ($i == 1) {
        echo "Only 1 day left!<br>";
    } else {
        echo "$i days left!<br>";
    }
}


# Array 

In PHP, an array is a data structure that allows you to store multiple values of the same or different data types under a single variable name. Arrays provide a way to organize and manage collections of data efficiently. Each value in an array is called an element, and each element has a unique index or key that identifies its position within the array.


There are several types of arrays in PHP:

1. Indexed Arrays: These are arrays where elements are assigned numeric indices starting from 0.

$fruits = array("Apple", "Banana", "Orange");
echo $fruits[0]; // Outputs: Apple


2. Associative Arrays: In associative arrays, elements are assigned a named key or index instead of numeric indices.

$person = array("name" => "John", "age" => 30, "occupation" => "Engineer");
echo $person["name"]; // Outputs: John


3. Multidimensional Arrays: These are arrays that contain other arrays as elements. They can be used to represent more complex data structures.

# Imagine we're building a simple contacts application. You want to store information about people, including their names, phone numbers, and email addresses

// Creating an associative array to store contact information
$contact1 = array(
    "name" => "John Doe",
    "phone" => "123-456-7890",
    "email" => "john@example.com"
);

$contact2 = array(
    "name" => "Jane Smith",
    "phone" => "987-654-3210",
    "email" => "jane@example.com"
);

$contact3 = array(
    "name" => "Robert Johnson",
    "phone" => "555-123-4567",
    "email" => "robert@example.com"
);

// Storing the contacts in an array
$contacts = array($contact1, $contact2, $contact3);

// Accessing and printing contact information
foreach ($contacts as $contact) {
    echo "Name: " . $contact["name"] . "<br>";
    echo "Phone: " . $contact["phone"] . "<br>";
    echo "Email: " . $contact["email"] . "<br><br>";
}


# String to Array Example:
// Storing the order as a string with comma delimiter
$orderString = "T-shirt,Jeans,Sneakers";

// Converting the order string into an array using comma as the delimiter
$orderArray = explode(",", $orderString);

// Displaying the individual items in the order
foreach ($orderArray as $item) {
    echo "Item: " . $item . "<br>";
}


# Array to String Example:

// Array containing the ordered items
$confirmedItems = array("T-shirt", "Jeans", "Sneakers");

// Converting the array of items into a string with comma delimiter
$confirmedItemsString = implode(",", $confirmedItems);

// Composing the confirmation email
$confirmationEmail = "Thank you for your order! You have purchased: " . $confirmedItemsString;

// Sending the confirmation email
echo $confirmationEmail;


# Associtive array to string conversation serilize and json

1. Serialization:
Serialization is the process of converting a data structure, such as an array, into a format that can be easily stored or transmitted and later reconstructed.


// Associative array
$data = array(
    "name" => "John Doe",
    "age" => 25,
    "email" => "john@example.com"
);

// Serialize the array
$serializedData = serialize($data);

// Display the serialized data
echo $serializedData;


The output of echo $serializedData; would look something like:

a:3:{s:4:"name";s:8:"John Doe";s:3:"age";i:25;s:5:"email";s:16:"john@example.com";}

To deserialize (unserialize) the data back into an array, you would use the unserialize() function:

// Deserialize the data
$unserializedData = unserialize($serializedData);

// Display the unserialized data
print_r($unserializedData);



2. JSON Encoding:

JSON (JavaScript Object Notation) is a lightweight data interchange format that is easy for humans to read and write, and easy for machines to parse and generate

Here's how you can encode an associative array as a JSON string:

// Associative array
$data = array(
    "name" => "John Doe",
    "age" => 25,
    "email" => "john@example.com"
);

// Encode the array as JSON
$jsonData = json_encode($data);

// Display the JSON data
echo $jsonData;


The JSON-encoded output would look like:

{"name":"John Doe","age":25,"email":"john@example.com"}


To decode the JSON string back into an associative array, you would use the json_decode() function:

// Decode the JSON data
$decodedData = json_decode($jsonData, true);

// Display the decoded data
print_r($decodedData);
