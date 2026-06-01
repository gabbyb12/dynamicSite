<?php
    include('include/init.php');
    echoHead('Home');
    //TODO: loop through the array of posts here. And for each item in the array
    //ill echo an element. In this case it is an a tag
    // $myPosts = getAllPosts_2026();
?>
    <style>
        .lavenderBack {
            background-color: lavender;
        }
        div {
            font-family:Arial, Helvetica, sans-serif;
        }


        p {
            font-family:'Courier New', Courier, monospace
        }
    </style>
</head>
<title> awesomeWebsite.org</title>

<body>
<div> 
        <h1> Awesome website with awesome links!</h1>

    Welcome to Cats and Web Development!
</div>


    <div> 
        <p> Useful Links:  </p>

        <p>
        <button> <a href="newcat.php?postId=1" target="_blank"> new cat</a></button>
        <button> <a href="newdog.php?postId=2" target="_blank"> new dog </a> </button>
     </p>
    </div>

    <div> 
        <img src="pinkcat.jpg" alt="white cat with a pink background">
        </div>
</body>
</html>
<?php
    echoFoot();
?>