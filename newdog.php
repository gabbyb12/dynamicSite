<?php
    include('include/init.php');
    echoHead('new dog');

    $mypostId = $_REQUEST["postId"];

    $posts= getPost($mypostId);
    // debugOutput($posts);

    $title = $posts["title"];

    $content = $posts["content"];


    // var_dump($posts);

   echo "<style>

    
    div {
        width: 20%;
        display: inline-flexbox;
                              }
    </style>
<header>
   <h2> $title </h2> 
</header>

<nav>
    <a href='index.php'> Home Page</a> |
    <a href='newcat.php?postId=1'> new cat</a> |
    <a href='newdog.php?postId=2'> new dog </a>

</nav>
<body>
    <div style='background-color: lavender;'>
        <p> $content </p>
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
            </p>
    </div>

</body>";

?>    
<?php
    echoFoot();
?>