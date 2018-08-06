<?php
$db = false;
function connectDB()
{
    global $db;
    $db = new SQLite3('news.sqlite', SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE);
    $db->query("
      CREATE TABLE IF NOT EXISTS news (
        id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
        title VARCHAR NOT NULL,
        intro_text VARCHAR NOT NULL,
        full_text VARCHAR NOT NULL
      )
    ");
}

function closeDB()
{
    // no-op
}
