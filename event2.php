<?php include_once 'header.php';?>

        <section class="header">
            <h2>Swiftogeddon – Taylor Swift Club Night</h2>
        </section>

        <section class="leftcolumn">
            <div class="card">
                <div class="images">
                    <img src="images/party2.jpg" alt="party2">
                </div>
                <div class="fleft">
                    <p>Event: Swiftogeddon – Taylor Swift Club Night </p>
                    <p>Date/Time:Friday May 20th, 23:00 </p>
                    <p>Location: Komedia Brighton</p>
                    <p>Price: £8.96</p>   
                    <div class="button">
                        <button type="button">Buy Ticket</button>
                    </div>
                </div>
            </div>
        
            <div class="card">
                <div class="fleft">
                    <div class="card" id="commentcard">
                        <p>USER: comment</p>
                    </div>
                    <div class="card" id="commentcard">
                        <p>USER: comment</p>
                    </div>

                    <input type="text" id="commentbox" name="comment" placeholder="Leave a comment">

                    <button onclick="document.getElementById('commentbox').value=''"type="submit" class="commentsub">Submit</button>
          
                </div>
            </div>
        </section>  
    </div>
<?php include_once 'footer.php';?>
