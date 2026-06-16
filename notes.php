<?php
include('include/init.php');


// debugOutput($_POST);
if (isset($_REQUEST['saveComment'])) {
    saveComment($_REQUEST['name'], $_REQUEST['comment']);

    header('location:?');
    exit;
}


$comments = dbQuery("
    SELECT *
    FROM injection_test

")->fetchAll();

echo "<h1>View all comments </h1>";

foreach($comments as $comment){
    echo "
        <div><strong>($comment[name])</strong> $comment[comment] </div>";

}
?>



<form action='' method='post'>
  
    <h2> Leave a comment </h2>

    Name: <input type='text' name='name' />

    <br> </br>

    Comment: <textarea name='comment' style='width:400px; height: 100px' >
    </textarea>    
    <br> </br>

    <input type='submit' name='saveComment' >
    </input>
</form>
 

<?php
// Eva test')
function saveThisComment($name, $comment){
    dbQuery("
    INSERT INTO injection_test(name, comment)
    VALUES(:name', :comment')
    ",
    
    [
        'name' =>$name,
        'comment' => $comment
    ]);
}