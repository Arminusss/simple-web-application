<!DOCTYPE html>
<html lang="en">
    <head>
        <title>user panel</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="user panel.css">
    </head>
    <body>
        <div class="container">
        <h1>Add new post</h1>
        <p class="p">write a new post here</p>
        <form name="newpost" method="post" action="user_panel_server.php">
            <div class="form-control">
                <label class="label">New Title</label>
                <textarea name="title" id="title" class="textarea" placeholder="my title.."></textarea>
                <label  class="label">New Post</label>
                <textarea name="message" id="message" class="textarea" rows="3" cols="30" placeholder="my new post is about...."></textarea>
                <label class="label">Author</label>
                <textarea name="author" id="author" class="textarea" placeholder="written by..."></textarea>
            </div>
            <input  type="submit" name="Submit" id="Submit" value="Submit">
            <a href="home page.php">
    <button class="btn">log-out</button>
     </a>
     <a href="home_page_server.php">
    <button class="btn">view my posts</button>
     </a>
            
        </form>
    </div>
    </body>
</html>