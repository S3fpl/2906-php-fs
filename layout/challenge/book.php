<?php

function book($title, $author)
{
    echo "Title: $title, Author: $author\n";
}

book('Harry Potter', author: 'J.K. Rowling');
book(title: '1984', author: 'George Orwell');
book('The Hobbit', 'J.R.R. Tolkien');
book('Pride and Prejudice', 'Jane Austen');
book(author: 'Herman Melville', title: 'Moby Dick');
