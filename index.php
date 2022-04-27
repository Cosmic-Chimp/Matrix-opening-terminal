<?php

// > start program with "wake up neo", delay each word with built in functionality,
//  but write custom func to make it a bit cleaner

// > give usr ability to answer, but then the machine should respond with
// "the matrix has got you" regardless of what the user answered/entered with

// > add other cool things like after the "got you" part, let the user input something, but
//  add conditionals that only responds on the input if the users asks a question



// First lines:

// > Wake up, neo...
// > The Matrix has you...
// > Follow the white rabbit.

function Matrix()
{
  echo "\nWake up neo...\n";
  readline("you: ");


  echo "\nThe Matrix has you...\n";
  readline("you: ");


  echo "\nFollow the white rabbit.\n";
  // readline("you: ");
}
Matrix();
