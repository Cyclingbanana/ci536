<?php include_once 'header.php';?>

        <section class="header">
            <h2>SummerTime Live Brighton 2022</h2>
        </section>

        <section class="leftcolumn">
            <div class="card">
                <div class="images">
                    <img src="images/party1.jpg" alt="party1">
                </div>
                <div class="fleft">
                    <p>Event: SummerTime Live Brighton 2022 </p>
                    <p>Date/Time: Saturday July 9th , 14:00</p>
                    <p>Location: Brighton Racecourse</p>
                    <p>Price: Starts at £32.65</p> 
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
