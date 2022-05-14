<?php include_once 'header.php';?>

        <section class="header">
            <h2>Son Guarachando Live</h2>
        </section>

        <section class="leftcolumn">
            <div class="card">
                <div class="images">
                    <img src="images/party4.jpg" alt="party4">
                </div>
                <div class="fleft">
                    <p>Event: Son Guarachando Live </p>
                    <p>Date/Time: Saturday April 30th, 19:00</p>
                    <p>Location: Verdict Jazz Club, Brighton</p>
                    <p>Price: £14.00</p> 
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
