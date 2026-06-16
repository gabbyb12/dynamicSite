<?php
    include('include/init.php');
    echoHead('view post');
    // TODO: get post id from the superglobal request


    $mypostId = $_GET["postId"];
    debugOutput($_GET);

    $posts = getPost($mypostId);
    debugOutput($posts);

    $comment = $_POST["comment"];

    $comments = getComments($mypostId);
    $userArr = [];

    foreach($comments as $comment) {
        $userId = $comment['userId'];
        $userArr[]=$userId;
    }   
    
    $userIdString = implode(",", $userArr);
    $users = getUsersforCommentsOnPost($userIdString);
    

    foreach($comments as $comment) {
        echo $comment['content'];
    }

    if(isset($_POST["comment"])) {
        debugOutput($_POST);
        saveComment($comment);
	    header("Location: view_post.php?postId=".$_REQUEST['postId']."");
        exit;
    }

    $title = $posts["title"];

    $content = $posts["content"];

     echo "<style>
            div {
                width: 20%;
                display: inline-flexbox;
                }
            </style>

    <header>
    <h2>".$title."</h2> 
    </header>

    <nav>
        <a href='index.php'> Home Page</a> |
        <a href='newcat.php?postId=1'> new cat</a> |
        <a href='newdog.php?postId=2'> new dog </a>
    </nav>
    <body>
        <div style='background-color: lavender;'>
            <p> ".$content."</p>
        </div>
        <div style='background-color: antiquewhite;'>
            <p> 2 </p>
        </div>

        <div style='background-color: lavender;'>
            <p>
                3
            </p>
        </div>
        <div style='background-color: antiquewhite;'>
                <p>
                    4
                    <form action=' ' method=post>
                        <label> Comments Af </label>
                        <input type='text' name='comment'> </input>
                        <input type='submit'> </input>

                </p>
        </div>
  
</body> ";


    echoFoot();

    // var_dump($posts);

    ?>
