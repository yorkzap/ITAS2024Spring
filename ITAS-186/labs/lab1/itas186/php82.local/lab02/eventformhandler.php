<?php

// 70'

// Finish the form input name and buttons in eventform.php 25'

// Determine if displaying card; One true to display card
$validation = true;

// Error message
$msg = "";

//// Initialize $date_validation to true
$date_validation = true;

// Title input
if (isset($_POST["title"]) && !empty($_POST["title"])) {
  $title = htmlspecialchars($_POST["title"]);
} else {
  $validation = false;
}

// todo: Features input 5‘
// done: Define an empty array
$checkboxes = [];

// Defining an array matching the feature names in eventform.php
$selections = [
  "refreshment",
  "games",
  "giveaways",
  "goodiebags"
];

// Iterating and matching items against the selection name to add them in the empty array defined above 
foreach ($selections as $selection) {
  if (isset($_POST["$selection"])) {
    $checkboxes[] = htmlspecialchars($_POST[$selection]);
  }
}

/* todo: Start input
  Done: Correct me if I'm wrong but 'isset($_POST["title"])' checks both
  the existence and non-emptiness of the "title" param in the POST data
  So I didn't add '&& !empty($_POST["start-date"])' after it. */ 

if (isset($_POST["start-date"])) {
  $start = htmlspecialchars($_POST["start-date"]);
} else {
  $validation = false;
}

// todo: End input 5‘ 
// Done: selecting "end-date" name for closing date

if (isset($_POST["end-date"])) {
  $end = htmlspecialchars($_POST["end-date"]);
} else {
  $validation = false;
}


// todo: Description 5’
// Done: selecting "text" name for description
if (isset($_POST["text"])) {
  $text = htmlspecialchars($_POST["text"]);
} else {
  $validation = false;
}


// todo: Check if the end date is greater than start date 5‘ 
if ($start > $end) {
  $date_validation = false;
  if (!$date_validation) {
    // Print an error message and a link to return to the form page
    echo '<div class="text-xl p-8">';
    echo 'Error: Start date must be earlier than the end date. <br>';
    echo '<a href="./eventform.php">Back to the form page</a>';
    echo '</div>';
    
    }
    // Exit script execution
    exit();
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Event Submission result</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-300">
  <div class="flex min-h-screen items-center justify-center">
    <div class="relative flex w-full max-w-[48rem] flex-row rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
      <?php if ($validation) { ?>
        <div class="relative m-0 w-2/5 shrink-0 overflow-hidden rounded-xl rounded-r-none bg-white bg-clip-border text-gray-700">
          <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1471&amp;q=80" alt="image" class="h-full w-full object-cover" />
        </div>
        <div class="p-6 flex-1">
          <h4 class="mb-2 block font-sans text-2xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
            <?php
            echo $title;
            ?>
          </h4>
          <p class="mb-8 block font-sans text-base font-normal leading-relaxed text-gray-700 antialiased">
            <!-- todo: Print event description here -->
            <!-- done: Echo description-->
            <span>Description: <?php echo $text ?></span>
          </p>

          <div class="flex justify-between w-full">
            <!-- todo: Fill start and end dates below -->
            <!-- done: Added start and end dates -->
            <span>Start: <?php echo $start; ?></span>
            <span>End: <?php echo $end; ?></span>
          </div>

          <div>
            <!-- todo: use foreach to print the submitted features -->
            <!-- done: Iterate through the selection array using foreach-->
            <div class="text-sm flex flex-col">
                <?php foreach ($checkboxes as $checkbox) : ?>
                  <label class="inline-flex items-center mt-3">
                    <span class="ml-2 text-gray-700"><?php echo $checkbox; ?></span>
                  </label>
                <?php endforeach; ?>
            </div>
          </div>

        </div>
      <?php } else { ?>

        <div class="text-xl p-8">
          something wrong <br>
          <!-- todo: add an anchor to link the form page -->
        </div>

      <?php } ?>
    </div>
  </div>
</body>

</html>