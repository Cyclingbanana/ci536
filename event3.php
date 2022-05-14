<?php include_once 'header.php';?>

        <section class="header">
            <h2>Addicitve Beats – Dirty Disco</h2>
        </section>

        <section class="leftcolumn">
            <div class="card">
                <div class="images">
                    <img src="images/party3.jpg" alt="party3">
                </div>
                <div class="fleft">
                    <p>Event: Addicitve Beats – Dirty Disco </p>
                    <p>Date/Time: Saturday April 20th, 22:00</p>
                    <p>Location:The Factory Live, Worthing</p>
                    <p>Price: £16.22</p>  
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
